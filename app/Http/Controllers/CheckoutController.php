<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CheckoutService;
use App\Models\Cart;
use App\Models\Orders\Order;
use App\Models\Orders\OrderItem;
use App\Models\Orders\orderAddress;
use App\Models\Masters\CountryMaster;
use App\Jobs\EnrollmentEmailJob;
use AmrShawky\LaravelCurrency\Facade\Currency;

class CheckoutController extends Controller
{
    public function index()
    {
        $countries = CountryMaster::where('status', 'ACTIVE')->get();

        return view('checkout.checkout', compact('countries'));
    }

    public function getFromCart(Request $request)
    {
        $reqData = $request->all();
        
        $response = CheckoutService::getDataFromCart($reqData);
        return response()->json(["status" => @$response['status'], "code" => @$response['status_code'], "message" => @$response['message'], "data" => @$response['data']], @$response['status_code']);    
    }

    public function prepareCheckout(Request $request)
    {
        $reqData = $request->all();
        
        $response = CheckoutService::prepareCheckoutResponse($reqData);
        return response()->json(["status" => @$response['status'], "code" => @$response['status_code'], "message" => @$response['message'], "data" => @$response['data']], @$response['status_code']);    
    }

    public function processCheckout(Request $request)
    {
        $reqData = $request->all();

        $response = CheckoutService::processCheckoutResponse($reqData);

        if (@$response['status'])
        {
            $telrManager = new \TelrGateway\TelrManager();

            /*$amount = Currency::convert()
                ->from('USD')
                ->to('AED')
                ->amount(@$response['data']['order']['amount'])
                ->get();*/
            //dd(@$response['data']['billing_params']);
            return $telrManager->pay(@$response['data']['order']['order_id'], @$response['data']['order']['amount'], 'CP Technology', @$response['data']['billing_params'])->redirect();
        }
        else
        {
            return redirect()->route('checkout-declined');
        }
    }

    public function successCheckout(Request $request)
    {
        $telrManager = new \TelrGateway\TelrManager();
        $transaction = $telrManager->handleTransactionResponse($request);

        $id = @$transaction['order_id'];        
        $order = Order::find($id);

        $telrResponse = $transaction->response;
        
        if ($telrResponse)
        {
            $courseList = OrderItem::getCourseList();
            $courseName = @$courseList[$order->orderItem[0]->entity_ref_id];

            $customer_address = @$telrResponse['order']['customer']['address']['line1']. ', '.@$telrResponse['order']['customer']['address']['line2']. ', '.@$telrResponse['order']['customer']['address']['city']. ', '.@$telrResponse['order']['customer']['address']['state'];


            $mailData = [
                'order' => [
                    'id' => $order->order_uuid,
                    'order_ref_no' => $order->order_ref_no,
                    'course_name' => $courseName,
                    'currency' => @$telrResponse['order']['currency'],
                    'price' => $order->sub_total_price,
                    'tax' => $order->tax,
                    'total_price' => @$telrResponse['order']['amount'],
                ],
                'customer' => [
                    'name' => (@$telrResponse['order']['customer']['name']['forenames']) ? @$telrResponse['order']['customer']['name']['forenames'].' '.@$telrResponse['order']['customer']['name']['surname']: @$telrResponse['order']['customer']['name']['forenames'],
                    'email' => @$telrResponse['order']['customer']['email'],
                    'phone' => @$telrResponse['order']['customer']['address']['mobile'],
                    'company' => @$order->address->company,
                    'address' => $customer_address,
                    'country' => @$telrResponse['order']['customer']['address']['country'],
                ],
                'payment' => [
                    'card_no' =>  @$telrResponse['order']['card']['last4'],
                    'expiry_month' => @$telrResponse['order']['card']['expiry']['month'],
                    'expiry_year' => @$telrResponse['order']['card']['expiry']['year'],
                ],
                'subject' => 'Enrollment Confirmation',
            ];

            EnrollmentEmailJob::dispatch($mailData);

            return view('checkout.checkout-success', compact('order', 'courseName', 'customer_address', 'telrResponse'));
        }
        else
        {
            return redirect()->route('checkout-declined');
        }
    }

    public function cancelledCheckout(Request $request)
    {
        return view('checkout.checkout-cancelled');
    }

    public function declinedCheckout(Request $request)
    {
        return view('checkout.checkout-declined');
    }
}
