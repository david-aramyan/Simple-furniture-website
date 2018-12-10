<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\OrderMail;
use App\Subscriber;
use App\Category;
use App\Product;

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
        Mail::to('sales@imperativofurniture.com')->send(new OrderMail($product, $request->all()));
        return redirect('/');
    }

    public function contactUs(Request $request)
    {
        Mail::to('management@imperativofurniture.com')->send(new ContactMail($request->all()));
        return redirect('/');
    }

    public function subscribe(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required|unique:subscribers'
            ]);
        Subscriber::create($request->all());
        return redirect()->back();
    }
}
