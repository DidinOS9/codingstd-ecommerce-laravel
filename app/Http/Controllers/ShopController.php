<?php

namespace App\Http\Controllers;

use App\Product;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::paginate(6);
        return view('shop.index', compact('products'));
    }

    public function show()
    {
        return view('shop.show');
    }
}