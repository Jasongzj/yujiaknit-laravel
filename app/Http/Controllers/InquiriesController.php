<?php

namespace App\Http\Controllers;

use App\Http\Requests\InquiryRequest;
use App\Models\Inquiry;
use App\Models\Product;
use Illuminate\Http\Request;

class InquiriesController extends Controller
{
    public function create(Request $request)
    {
        $product = Product::find($request->input('product_id'));
        return view('inquires.create', compact('product'));
    }

    public function store(InquiryRequest $request)
    {
        $inquiry = new Inquiry();
        $inquiry->product_id = $request->input('product_id');
        $inquiry->intential_products = $request->input('products');
        $inquiry->name = $request->input('name');
        $inquiry->email = $request->input('email');
        $inquiry->quantity = $request->input('quantity');
        $inquiry->market = implode(',', $request->input('market'));
        $inquiry->save();
        session()->flash('success', 'Your inquiry has been post!');
        return redirect()->back();
    }
}
