<?php

namespace App\Services\Customers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Webpatser\Uuid\Uuid;
use App\Validators\Customers\CustomersValidator;

class CustomerService
{
    public static function saveCustomer($reqData)
    {
        $existCustomer = Customer::where('email', $reqData['email'])->first();

        $phone = (!empty(@$reqData['phone_no'])) ? @$reqData['phone_no']: @$reqData['phone'];

        if (empty($existCustomer))
        {
            $customerData = [
                'customer_uuid' => Uuid::generate(4),
                'first_name' => @$reqData['first_name'],
                'last_name' => @$reqData['last_name'],
                'email' => @$reqData['email'],
                'phone' => $phone,
                'status' => @$reqData['status'],
                //'created_by' => auth()->user()->id,
            ];

            $customer = Customer::insertRecord($customerData);
        }
        else
        {  
            $customerData = [
                'first_name' => @$reqData['first_name'],
                'last_name' => @$reqData['last_name'],
                'phone' => (!empty($phone) ) ? $phone : $existCustomer->phone,
                'status' => @$reqData['status'],
                //'updated_by' => auth()->user()->id,
            ];

            $customer = Customer::updateRecord($customerData, $existCustomer->id);
        }

        return $customer; 
    }
}
