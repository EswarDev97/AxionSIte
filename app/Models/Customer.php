<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    protected $table = 'customers';
    protected $fillable = [
        'customer_uuid', 'user_name', 'first_name', 'last_name', 'email', 'phone', 'status', 'created_by', 'updated_by'
    ];

    public static function insertRecord($data) 
    {
        $customer = new Customer();

        $customer->customer_uuid = @$data['customer_uuid'];
        $customer->first_name = @$data['first_name'];
        $customer->last_name = @$data['last_name'];
        $customer->email = @$data['email'];
        $customer->phone = @$data['phone'];
        $customer->status = @$data['status'];
        $customer->created_by = @$data['created_by'];

        try {
            $customer->save();
            return $customer->where('id', $customer->id)->first();
        }
        catch (Exception $e) {
            return $e->getMessage(); 
        }
    }

    public static function updateRecord($data, $id) 
    {
        $customer = Customer::where('id', $id)->first();
        if(!empty($customer)){
            $customer->first_name = @$data['first_name'] ?? $customer->first_name;
            $customer->last_name = @$data['last_name'] ?? $customer->last_name;
            $customer->email = @$data['email'] ?? $customer->email;
            $customer->phone = @$data['phone'] ?? $customer->phone;
            $customer->status = @$data['status'] ?? $customer->status;
            $customer->updated_by = @$data['updated_by'] ?? $customer->updated_by;

            try {
                $customer->save();
                return $customer->where('id', $customer->id)->first();
            }
            catch (Exception $e) {
                return $e->getMessage(); 
            }
        }
        
    }

}
