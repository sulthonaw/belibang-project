<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('front.index', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function details(Product $product)
    {
        $products = Product::all();
        $categories = Category::all();
        return view('front.details', [
            "product" => $product,
            "products" => $products,
            "categories" => $categories
        ]);
    }

    public function categories(Category $category)
    {
        if ($category['slug'] == 'all-products') {
            $products = Product::all();
            $categories = Category::all();
            return view('front.category', [
                "category" => $category,
                'categories' => $categories,
                "products" => $products
            ]);
        }

        $products = Product::where('category_id', $category->id)->get();
        $categories = Category::all();
        return view('front.category', [
            "category" => $category,
            "categories" => $categories,
            "products" => $products
        ]);
    }

    public function search(Request $request)
    {
        $keyword = $request->query('keyword');
        $products = Product::where('name', 'like', "%$keyword%")
            ->orWhere('about', 'like', "%$keyword%")
            ->orWhereHas('category', function ($query) use ($keyword) {
                $query->where('name', 'like', "%$keyword%");
            })
            ->get();
        $categories = Category::all();
        return view('front.search', [
            "products" => $products,
            "keyword" => $keyword,
            "categories" => $categories
        ]);
    }
}
