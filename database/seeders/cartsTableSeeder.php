<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cart;
use Webpatser\Uuid\Uuid;

class cartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cartData = [];
        $cartData['cart_uuid'] = Uuid::generate(4);
        $cartData['product_name'] = 'AI & ML Master Class';
        $cartData['currency'] = 'AED';
        $cartData['price'] = '2999.00';
        $cartData['tax_percentage'] = 5;
        $cartData['tax_price'] = '149.95';
        $cartData['total_price'] = '3148.95';

        $existCart = Cart::where('product_name', 'AI & ML Master Class')->first();

        if (empty($existCart))
        {
            $cart = Cart::insertRecord($cartData);
        }
        else
        {
            $cart = Cart::updateRecord($cartData, $existCart->id);
        }
    }
}
