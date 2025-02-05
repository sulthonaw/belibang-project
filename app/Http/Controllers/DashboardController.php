<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $my_products = Product::where('creator_id', Auth::id())->get();
        $my_orders = ProductOrder::where('creator_id', Auth::id())->where('is_paid', 1)->get(); // success order
        $my_revenue = ProductOrder::where('creator_id', Auth::id())->where('is_paid', 1)->sum('total_price');

        return view('admin.dashboard', [
            'my_products' => $my_products,
            'my_orders' => $my_orders,
            'my_revenue' => $my_revenue,
        ]);
    }
}
