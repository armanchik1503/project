<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();

        return view('admin.products', compact('products'));
    }
    public function create()
    {
        return view('admin.addProduct');
    }
    public function store(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->in_stock = $request->in_stock;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->images()->product_id = $request->category_id;
        $product->save();
        $product->images()->create(['img' => $request->file('img')->getClientOriginalName()]);
        //$product->images()->product_id = $request->category_id;

        return redirect()->route('admin.products');
    }
}
