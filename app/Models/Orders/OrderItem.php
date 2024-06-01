<?php

namespace App\Models\Orders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
    use SoftDeletes;
    
    protected $table = 'order_items';
    protected $fillable = [
        'order_id', 'order_item_uuid', 'entity_type', 'entity_ref_id', 'quantity', 'unit_price', 'total_price', 'additional_info', 'status', 'created_by', 'updated_by'
    ]; 

    public static function insertRecord($data)
    {
        $orderItem = new OrderItem();

        $orderItem->order_id = @$data['order_id'];
        $orderItem->order_item_uuid = @$data['order_item_uuid'];
        $orderItem->entity_type = @$data['entity_type'];
        $orderItem->entity_ref_id = @$data['entity_ref_id'];
        $orderItem->quantity = @$data['quantity'];
        $orderItem->currency = @$data['currency'];
        $orderItem->unit_price = @$data['unit_price'];
        $orderItem->total_price = @$data['total_price'];
        $orderItem->additional_info = @$data['additional_info'];
        $orderItem->status = @$data['status'];
        $orderItem->created_by = @$data['created_by'];
        $orderItem->updated_by = @$data['updated_by'];

        try {
            $orderItem->save();
            return $orderItem->where('id', $orderItem->id)->first();
        }
        catch (Exception $e) {
            return $e->getMessage(); 
        }
    }

    public static function updateRecord($data, $id)
    {
        $orderItem = OrderItem::find($id);

        $orderItem->order_id = @$data['order_id'] ?? $orderItem->order_id;
        $orderItem->entity_type = @$data['entity_type'] ?? $orderItem->entity_type;
        $orderItem->entity_ref_id = @$data['entity_ref_id'] ?? $orderItem->entity_ref_id;
        $orderItem->quantity = @$data['quantity'] ?? $orderItem->quantity;
        $orderItem->currency = @$data['currency'] ?? $orderItem->currency;
        $orderItem->unit_price = @$data['unit_price'] ?? $orderItem->unit_price;
        $orderItem->total_price = @$data['total_price'] ?? $orderItem->total_price;
        $orderItem->additional_info = @$data['additional_info'] ?? $orderItem->additional_info;
        $orderItem->status = @$data['status'] ?? $orderItem->status;
        $orderItem->updated_by = @$data['updated_by'] ?? $orderItem->updated_by;

        try {
            $orderItem->save();
            return $orderItem->where('id', $orderItem->id)->first();
        }
        catch (Exception $e) {
            return $e->getMessage(); 
        }
    }

    public static function getCourseList()
    {
        return [
            '1' => 'AI & ML Master Class',
            '2' => 'AI & ML For Business Leaders',
        ];
    }
}
