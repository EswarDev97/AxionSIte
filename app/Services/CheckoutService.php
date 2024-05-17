<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Users\User;
use App\Models\Cart;
use App\Models\Orders\Order;
use App\Models\Orders\OrderItem;
use App\Models\Orders\OrderPayment;
use App\Models\Orders\OrderAddress;
use Webpatser\Uuid\Uuid;
use App\Validators\CheckoutValidator;
use App\Services\Customers\CustomerService;
use App\Helpers\OrderRefNoHelper;
use App\Services\Errors\ErrorLogService;
use Exception;

class CheckoutService
{
    public static function prepareCheckoutResponse($reqData)
    {

        $validation = CheckoutValidator::validatePrepareCheckout($reqData); 
        
        if ($validation === true)
        {
            $user = User::where('user_uuid', @$reqData['user_id'])->first();
            
            $cartPrice = sprintf('%0.2f', (float) @$reqData['price']);
            $taxPrice = sprintf('%0.2f', (float) $cartPrice * (@$reqData['tax'] / 100));
            $totalPrice = sprintf('%0.2f', (float) $cartPrice + (float) $taxPrice);

            $cartData = [
                'cart_uuid' => Uuid::generate(4),
                'product_name' => @$reqData['course'],
                'currency' => @$reqData['currency'],
                'price' => $cartPrice,
                'tax_percentage' => $reqData['tax'],
                'tax_price' => $taxPrice,
                'total_price' => $totalPrice,
                'user_id' => @$user->id,
            ];

            try {
                $otherCourseCart = Cart::where('product_name', '!=', @$reqData['course'])
                ->where('user_id', '=', @$user->id)->first();

                if (!empty($otherCourseCart))
                {
                    $otherCourseCart->delete();
                }

                $existCart = Cart::where([
                    'product_name' => @$reqData['course'],
                    'user_id' => @$user->id,
                ])->first();

                if (empty($existCart))
                {
                    if (auth()->user())
                    {
                        $cartData['created_by'] = auth()->user()->id;
                    }
                    $cart = Cart::insertRecord($cartData);
                }
                else
                {
                    if (auth()->user())
                    {
                        $cartData['updated_by'] = auth()->user()->id;
                    }
                    $cart = Cart::updateRecord($cartData, $existCart->id);
                }

                $result = $cart->makeHidden(['id']);

                return ["status" => true, "status_code" => 200, "message" => "Data added in the cart successfully", "data" => $result];
            }
            catch(Exception $e)
            {
                $error = ["error" => [$e->getMessage()]];
                $errorLogData = [
                    'error_code' => 500, 
                    'error_type' => 'INTERNAL_SERVOR_ERROR',
                    'route' => url()->current(), 
                    'file_name' => __FILE__ .' (line: '. __LINE__ .')',
                    'error_message' => json_encode($error)
                ];
                ErrorLogService::saveErrorLog($errorLogData);

                return ["status" => false, "code" => 500, "message" => "Internal Server Error", "data" => ["error" => ['Internal Server Error']], "status_code" => 500];      
            }
        }
        else
        {
            //Return the error message
            $error = ["error" => $validation->errors()->all()];
            return ["status" => false, "code" => 422, "message" => 'Incorrect Request Data', "data" => $error, "status_code" => 422];
        }
    }

    public static function getDataFromCart($reqData)
    {
        $validation = CheckoutValidator::validateGetDataFromCart($reqData); 
        
        if ($validation === true)
        {
            $user = User::where('user_uuid', @$reqData['user_id'])->first();
            try {
                $cart = Cart::where([
                    'user_id' => @$user->id,
                ])->first();

                $result = $cart->makeHidden(['id']);

                return ["status" => true, "status_code" => 200, "message" => "Data retrieved from cart successfully", "data" => $result];
            }
            catch(Exception $e)
            {
                $error = ["error" => [$e->getMessage()]];
                $errorLogData = [
                    'error_code' => 500, 
                    'error_type' => 'INTERNAL_SERVOR_ERROR',
                    'route' => url()->current(), 
                    'file_name' => __FILE__ .' (line: '. __LINE__ .')',
                    'error_message' => json_encode($error)
                ];
                ErrorLogService::saveErrorLog($errorLogData);

                return ["status" => false, "code" => 500, "message" => "Internal Server Error", "data" => ["error" => ['Internal Server Error']], "status_code" => 500];      
            }
        }
        else
        {
            //Return the error message
            $error = ["error" => $validation->errors()->all()];
            return ["status" => false, "code" => 422, "message" => 'Incorrect Request Data', "data" => $error, "status_code" => 422];
        }
    }

    public static function processCheckoutResponse($reqData)
    {

        $validation = CheckoutValidator::validateProcessCheckout($reqData); 
        
        if ($validation === true)
        {
            $customerData = [
                'first_name' => @$reqData['fname'],
                'last_name' => @$reqData['lname'],
                'email' => @$reqData['email'],
                'phone' => @$reqData['phone'],
                'status' => (@$reqData['status']) ? @$reqData['status']: 'ACTIVE',
            ];
            $customer = CustomerService::saveCustomer($customerData);

            $orderData = [
                'order_uuid' => Uuid::generate(4),
                'order_type' => (@$reqData['order_type']) ? @$reqData['order_type']: 'ENROLLMENT',
                'order_ref_no' => OrderRefNoHelper::create(),
                'order_status' => 'PROCESSING',
                'payment_status' => 'PROCESSING',
                'currency' => @$reqData['currency'],
                'sub_total_price' => sprintf('%0.2f', (float) $reqData['price']),
                'tax' => sprintf('%0.2f', (float) $reqData['tax']),
                'discount' => (@$reqData['discount']) ? sprintf('%0.2f', (float) @$reqData['discount']) : NULL,
                'total_price' => sprintf('%0.2f', (float) @$reqData['price'] + (float) @$reqData['tax']),
                'customer_id' => @$customer->id,
                'order_placed_at' => date('Y-m-d H:i:s'),
                'status' => 'ACTIVE',
            ];

            $order = Order::insertRecord($orderData);
            
            $entity_ref_id = array_search(@$reqData['course_name'], OrderItem::getCourseList());
            $orderItemInsertData = [
                "order_id" => @$order->id,
                "order_item_uuid" => Uuid::generate(4),
                "entity_type" => (@$reqData['entity_type']) ? @$reqData['entity_type']: 'COURSE',
                "entity_ref_id" => $entity_ref_id,
                "currency" => (@$reqData['currency']) ? @$reqData['currency']: 'AED',
                "quantity" => (@$reqData['quantity']) ? @$reqData['quantity']: 1,
                "unit_price" => sprintf('%0.2f', (float) $reqData['price']),
                "total_price" => @$reqData['quantity'] * sprintf('%0.2f', (float) $reqData['price']),
                "status" => 'ACTIVE',
            ];
            
            $orderItem = OrderItem::insertRecord($orderItemInsertData);

            /* $orderPaymentInsertData = [
                "payment_uuid" => Uuid::generate(4),
                "order_id" => @$order->id,
                "payment_ref_no" => NULL,
                "payment_mode" => 'CARD',
                "transaction_type" => NULL,
                "transaction_ref_no" => NULL,
                "card_no" => @$reqData['card_no'],
                "cardholders_name" => @$reqData['cardholders_name'],
                "card_expiry_month" => @$reqData['card_expiry_month'],
                "card_expiry_year" => @$reqData['card_expiry_year'],
                "cvv" => @$reqData['cvv'],
                "amount" => @$reqData['total'],
                "service_charges" => NULL,
                "additional_info" => NULL,
                "payment_url" => NULL,
                "transaction_status" => 'SUCCESS',
                "status" => 'ACTIVE',
            ];

            $orderPayment = OrderPayment::insertRecord($orderPaymentInsertData); */

            $orderAddressInsertData = [
                "order_id" => $order->id,
                "address_type" => 'HOME',
                "first_name" => @$reqData['fname'],
                "last_name" => @$reqData['lname'],
                "company" => @$reqData['company'],
                "address_1" => @$reqData['apartment'],
                "address_2" => @$reqData['street'],
                "city" => @$reqData['city'],
                "state" => @$reqData['state'],
                "postcode" => @$reqData['zipCode'],
                "country" => @$reqData['country'],
                "email" => @$reqData['email'],
                "phone" => @$reqData['phone']
            ];
            
            $orderAddress = OrderAddress::insertRecord($orderAddressInsertData);

            $customer_address = @$orderAddress->address_1. ', '.@$orderAddress->address_2. ', '.@$orderAddress->city. ', '.@$orderAddress->state;

            /*$response = [
                'order' => [
                    'id' => $order->order_uuid,
                    'order_ref_no' => $order->order_ref_no,
                    'course_name' => $reqData['course_name'],
                    'currency' => $orderItem->currency,
                    'price' => $order->sub_total_price,
                    'tax' => $order->tax,
                    'total_price' => $order->total_price,
                ],
                'customer' => [
                    'name' => (@$customer['first_name']) ? @$customer['first_name'].' '.@$customer['last_name']: @$customer['first_name'],
                    'email' => @$customer['email'],
                    'phone' => @$customer['phone'],
                    'company' => @$orderAddress['company'],
                    'address' => $customer_address,
                    'country' => @$orderAddress['country'],
                ],
                'payment' => [
                    'card_no' => $orderPayment->card_no,
                    'expiry_month' => $orderPayment->card_expiry_month,
                    'expiry_year' => $orderPayment->card_expiry_year
                ],
                'subject' => 'Enrollment Confirmation',
            ];*/

            $response = [
                'billing_params' => [
                    'first_name' => @$reqData['fname'],
                    'sur_name' => @$reqData['lname'],
                    'address_1' => @$reqData['apartment'],
                    'address_2' => @$reqData['street'],
                    'city' => @$reqData['city'],
                    'region' => @$reqData['state'],
                    'zip' => @$reqData['zipCode'],
                    'country' => @$reqData['country'],
                    'phone' => @$reqData['phone'],
                    'email' => @$reqData['email']
                ],
                'order' => [
                    'order_id' => $order->id,
                    'amount' => $order->total_price,
                ]
            ];

            return ["status" => true, "status_code" => 200, "message" => "Billing details saved successfully", "data" => $response];
        }
        /*else
        {
            //Return the error message
            $error = ["error" => $validation->errors()->all()];
            return ["status" => false, "code" => 422, "message" => 'Incorrect Request Data', "data" => $error, "status_code" => 422];
        }*/
    }
}
