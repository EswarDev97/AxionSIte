<?php

namespace App\Models\Orders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Orders\OrderItem;
use App\Models\Orders\OrderPayment;
use App\Models\Orders\OrderAddress;
use App\Models\Customer;
use Exception;

class Order extends Model
{
    use SoftDeletes;
    
    protected $table = 'orders';
    protected $fillable = [
        'order_uuid', 'order_type', 'order_ref_no', 'order_status', 'payment_status', 'tax', 'discount', 'total_price', 'customer_id', 'status', 'additional_info', 'order_placed_at', 'paid_at', 'cancelled_at', 'created_by', 'updated_by'
    ]; 

    public static function insertRecord($data)
    {
        $order = new Order();

        $order->order_uuid = @$data['order_uuid'];
        $order->order_type = @$data['order_type'];
        $order->order_ref_no = @$data['order_ref_no'];
        $order->order_status = @$data['order_status'];
        $order->payment_status = @$data['payment_status'];
        $order->currency = @$data['currency'];
        $order->sub_total_price = @$data['sub_total_price'];
        $order->tax = @$data['tax'];
        $order->discount = @$data['discount'];
        $order->total_price = @$data['total_price'];
        $order->customer_id = @$data['customer_id'];
        $order->status = @$data['status'];
        $order->additional_info = @$data['additional_info'];
        $order->order_placed_at = @$data['order_placed_at'];        
        $order->paid_at = @$data['paid_at'];
        $order->cancelled_at = @$data['cancelled_at'];
        $order->created_by = @$data['created_by'];
        $order->updated_by = @$data['updated_by'];

        try {
            $order->save();
            return $order->where('id', $order->id)->first();
        }
        catch (Exception $e) {
            return $e->getMessage(); 
        }
    }

    public static function updateRecord($data, $id)
    {
        $order = Order::find($id);

        $order->order_type = @$data['order_type'] ?? $order->order_type;
        $order->order_ref_no = @$data['order_ref_no'] ?? $order->order_type;
        $order->order_status = @$data['order_status'] ?? $order->order_status;
        $order->payment_status = @$data['payment_status'] ?? $order->payment_status;
        $order->currency = @$data['currency'] ?? $order->currency;
        $order->sub_total_price = @$data['sub_total_price'] ?? $order->sub_total_price;
        $order->tax = @$data['tax'] ?? $order->tax;
        $order->discount = @$data['discount'] ?? $order->discount;
        $order->total_price = @$data['total_price'] ?? $order->total_price;
        $order->customer_id = @$data['customer_id'] ?? $order->customer_id;
        $order->status = @$data['status'] ?? $order->status;
        $order->additional_info = @$data['additional_info'] ?? $order->additional_info;
        $order->order_placed_at = @$data['order_placed_at'] ?? $order->order_placed_at;
        $order->paid_at = @$data['paid_at'] ?? $order->paid_at;
        $order->cancelled_at = @$data['cancelled_at'] ?? $order->cancelled_at;
        $order->updated_by = @$data['updated_by'] ?? $order->updated_by;

        try {
            $order->save();
            return $order->where('id', $order->id)->first();
        }
        catch (Exception $e) {
            return $e->getMessage(); 
        }   
    }

    public function orderItem()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }

    public function address()
    {
        return $this->hasOne(OrderAddress::class, 'order_id', 'id');
    }

    public function payment()
    {
        return $this->hasOne(OrderPayment::class, 'order_id', 'id');
    }

    public function customer()
    {
        return $this->hasOne(Customer::class, 'id', 'customer_id');
    }
}
