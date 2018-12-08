<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use App\Category;

class FrontController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('home', compact('categories'));
    }

    public function allProducts()
    {
        $products = Product::paginate(4);
        $categories = Category::all();
        return view('products', compact('products', 'categories'));
    }

    public function categoryProducts(Category $category)
    {
        $products = $category->products()->paginate(4);
        $categories = Category::all();
        return view('products', compact('products', 'categories'));
    }

    public function product(Product $product)
    {
        $categories = Category::all();
        return view('product', compact('product', 'categories'));
    }

    public function orderForm(Product $product)
    {
        return view('order_form', compact('product'));
    }

    public function orderProduct(Product $product, Request $request)
    {
        dd($product, $request->all());
    }
}
