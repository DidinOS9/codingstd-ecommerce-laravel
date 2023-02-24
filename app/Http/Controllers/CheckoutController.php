<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function store()
    {
        $carts = Cart::where('user_id', Auth::user()->id);

        $cartUser = $carts->get();

        $transaction = Transaction::create([
            'user_id' => Auth::user()->id
        ]);

        foreach ($cartUser as $cart) {
            $transaction->detail()->create([
                'product_id' => $cart->product_id,
                'qty' => $cart->qty
            ]);

            $carts->delete();
            return redirect('/');
        }
    }
}
