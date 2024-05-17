<?php

namespace App\Models\Orders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderAddress extends Model
{
    use SoftDeletes;
    
    protected $table = 'order_addresses';
    protected $fillable = [
        'order_id', 'address_type', 'first_name', 'email', 'phone', 'last_name', 'company', 'address_1', 'address_2', 'city', 'state', 'postcode', 'country', 'created_by', 'updated_by'
    ]; 

    public static function insertRecord($data)
    {
        $orderAddress = new OrderAddress();

        $orderAddress->order_id = @$data['order_id'];
        $orderAddress->address_type = @$data['address_type'];
        $orderAddress->first_name = @$data['first_name'];
        $orderAddress->last_name = @$data['last_name']; 
        $orderAddress->email = @$data['email'];
        $orderAddress->phone = @$data['phone'];
        $orderAddress->company = @$data['company'];
        $orderAddress->address_1 = @$data['address_1'];
        $orderAddress->address_2 = @$data['address_2'];
        $orderAddress->city = @$data['city'];
        $orderAddress->state = @$data['state'];
        $orderAddress->postcode = @$data['postcode'];
        $orderAddress->country = @$data['country'];
        $orderAddress->created_by = @$data['created_by'];
        $orderAddress->updated_by = @$data['updated_by'];

        try {
            $orderAddress->save();
            return $orderAddress->where('id', $orderAddress->id)->first();
        }
        catch (Exception $e) {
            return $e->getMessage(); 
        }
    }

    public static function updateRecord($data, $id)
    {
        $orderAddress = OrderAddress::find($id);

        $orderAddress->order_id = @$data['order_id'] ?? $orderAddress->order_id;
        $orderAddress->address_type = @$data['address_type'] ?? $orderAddress->address_type;
        $orderAddress->first_name = @$data['first_name'] ?? $orderAddress->first_name;
        $orderAddress->last_name = @$data['last_name'] ?? $orderAddress->last_name;
        $orderAddress->email = @$data['email'] ?? $orderAddress->email;
        $orderAddress->phone = @$data['phone'] ?? $orderAddress->phone;
        $orderAddress->company = @$data['company'] ?? $orderAddress->company;
        $orderAddress->address_1 = @$data['address_1'] ?? $orderAddress->address_1;
        $orderAddress->address_2 = @$data['address_2'] ?? $orderAddress->address_2;
        $orderAddress->city = @$data['city'] ?? $orderAddress->city;
        $orderAddress->state = @$data['state'] ?? $orderAddress->state;
        $orderAddress->postcode = @$data['postcode'] ?? $orderAddress->postcode;
        $orderAddress->country = @$data['country'] ?? $orderAddress->country;
        $orderAddress->updated_by = @$data['updated_by'] ?? $orderAddress->updated_by;

        try {
            $orderAddress->save();
            return $orderAddress->where('id', $orderAddress->id)->first();
        }
        catch (Exception $e) {
            return $e->getMessage(); 
        }   
    }
}
