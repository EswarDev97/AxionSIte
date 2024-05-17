<?php

namespace App\Models\Orders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderPayment extends Model
{
    use SoftDeletes;
    
    protected $table = 'order_payments';
    protected $fillable = [
        'order_id', 'payment_uuid', 'payment_ref_no', 'payment_mode', 'transaction_type', 'transaction_ref_no', 'card_no', 'cardholders_name', 'card_expiry_month', 'card_expiry_year', 'cvv', 'amount', 'service_charges', 'additional_info', 'payment_url', 'transaction_status', 'status', 'created_by', 'updated_by'
    ]; 

    public static function insertRecord($data)
    {
        $orderPayment = new OrderPayment();

        $orderPayment->order_id = @$data['order_id'];
        $orderPayment->payment_uuid = @$data['payment_uuid'];
        $orderPayment->payment_ref_no = @$data['payment_ref_no'];
        $orderPayment->payment_mode = @$data['payment_mode'];
        $orderPayment->transaction_type = @$data['transaction_type'];
        $orderPayment->transaction_ref_no = @$data['transaction_ref_no'];
        $orderPayment->card_no = @$data['card_no'];
        $orderPayment->cardholders_name = @$data['cardholders_name'];
        $orderPayment->card_expiry_month = @$data['card_expiry_month'];
        $orderPayment->card_expiry_year = @$data['card_expiry_year'];
        $orderPayment->cvv = @$data['cvv'];
        $orderPayment->amount = @$data['amount'];
        $orderPayment->service_charges = @$data['service_charges'];
        $orderPayment->additional_info = @$data['additional_info'];
        $orderPayment->payment_url = @$data['payment_url'];
        $orderPayment->transaction_status = @$data['transaction_status'];
        $orderPayment->status = @$data['status'];
        $orderPayment->created_by = @$data['created_by'];
        $orderPayment->updated_by = @$data['updated_by'];

        try {
            $orderPayment->save();
            return $orderPayment->where('id', $orderPayment->id)->first();
        }
        catch (Exception $e) {
            return $e->getMessage(); 
        }
    }

    public static function updateRecord($data, $id)
    {
        $orderPayment = OrderPayment::find($id);

        $orderPayment->order_id = @$data['order_id'] ?? $orderPayment->order_id;
        $orderPayment->payment_ref_no = @$data['payment_ref_no'] ?? $orderPayment->payment_ref_no;
        $orderPayment->payment_mode = @$data['payment_mode'] ?? $orderPayment->payment_mode;
        $orderPayment->transaction_type = @$data['transaction_type'] ?? $orderPayment->transaction_type;
        $orderPayment->transaction_ref_no = @$data['transaction_ref_no'] ?? $orderPayment->transaction_ref_no;
        $orderPayment->card_no = @$data['card_no'] ?? $orderPayment->card_no;
        $orderPayment->cardholders_name = @$data['cardholders_name'] ?? $orderPayment->cardholders_name;
        $orderPayment->card_expiry_month = @$data['card_expiry_month'] ?? $orderPayment->card_expiry_month;
        $orderPayment->card_expiry_year = @$data['card_expiry_year'] ?? $orderPayment->card_expiry_year;
        $orderPayment->cvv = @$data['cvv'] ?? $orderPayment->cvv;
        $orderPayment->amount = @$data['amount'] ?? $orderPayment->amount;
        $orderPayment->service_charges = @$data['service_charges'] ?? $orderPayment->service_charges;
        $orderPayment->additional_info = @$data['additional_info'] ?? $orderPayment->additional_info;
        $orderPayment->payment_url = @$data['payment_url'] ?? $orderPayment->payment_url;
        $orderPayment->transaction_status = @$data['transaction_status'] ?? $orderPayment->transaction_status;
        $orderPayment->status = @$data['status'] ?? $orderPayment->status;
        $orderPayment->updated_by = @$data['updated_by'] ?? $orderPayment->updated_by;

        try {
            $orderPayment->save();
            return $orderPayment->where('id', $orderPayment->id)->first();
        }
        catch (Exception $e) {
            return $e->getMessage(); 
        }
    }
}
