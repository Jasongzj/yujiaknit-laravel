<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request, Product $product)
    {
        $category_id = $request->category_id;
        $products = $product->where('category_id', $category_id)->paginate(20);
        return view('products/index', compact('products', 'category_id'));
    }

    public function show(Product $product)
    {
        // 预加载
        return view('products/show', ['product' => $product->load(['category.colors'])]);
    }
}
