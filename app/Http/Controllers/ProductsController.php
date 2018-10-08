<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request, Product $product)
    {
        $products = $product->where('category_id', $request->category_id)->paginate(20);
        return view('products/index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('products/show', compact('product'));
    }
}
