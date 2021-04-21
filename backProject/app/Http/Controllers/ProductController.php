<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function show($category, $product_id)
    {
        $item = Product::where('id', $product_id)->first();

        return view('product.show', compact('item'));
    }
    public function showCategory($category_alias)
    {
        $category = Category::where('alias', $category_alias)->first();
        return view('categories.index', compact('category'));
    }
}
