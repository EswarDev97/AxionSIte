<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Exception;

class Cart extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'carts';
    protected $fillable = [
        'cart_uuid', 'product_name', 'currency', 'price', 'tax_percentage', 'tax_price', 'total', 'created_by', 'updated_by'
    ]; 

    public static function insertRecord($data)
    {
        $cart = new Cart();

        $cart->cart_uuid = @$data['cart_uuid'];
        $cart->product_name = @$data['product_name'];
        $cart->currency = @$data['currency'];
        $cart->price = @$data['price'];
        $cart->tax_percentage = @$data['tax_percentage'];
        $cart->tax_price = @$data['tax_price'];
        $cart->total_price = @$data['total_price'];
        $cart->user_id = @$data['user_id'];
        $cart->created_by = @$data['created_by'];
        $cart->save();

        return $cart->where('id', $cart->id)->first();
    }

    public static function updateRecord($data, $id)
    {
        $cart = Cart::where('id', $id)->first();

        $cart->product_name = (@$data['product_name']) ? @$data['product_name'] : $cart->product_name;
        $cart->currency = (@$data['currency']) ? @$data['currency'] : $cart->currency;
        $cart->price = (@$data['price']) ? @$data['price'] : $cart->price;
        $cart->tax_percentage = (@$data['tax_percentage']) ? @$data['tax_percentage'] : $cart->tax_percentage;
        $cart->tax_price = (@$data['tax_price']) ? @$data['tax_price'] : $cart->tax_price;
        $cart->total_price = (@$data['total_price']) ? @$data['total_price'] : $cart->total_price;
        $cart->user_id = (@$data['user_id']) ? @$data['user_id'] : $cart->user_id;
        $cart->updated_by = (@$data['updated_by']) ? @$data['updated_by'] : $cart->updated_by;
        $cart->save();

        return $cart->where('id', $cart->id)->first();
    }
}
