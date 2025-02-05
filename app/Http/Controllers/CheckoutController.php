<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Product $product)
    {
        return view('front.checkout', [
            'product' => $product,
        ]);
    }

    // public function show(Product $product)
    // {
    //     return view('front.checkout', [
    //         'product' => $product
    //     ]);
    // }
}
