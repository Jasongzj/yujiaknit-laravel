<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriptionRequest;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
    public function index()
    {
        return view('subscriptions.index');
    }

    public function store(SubscriptionRequest $request, Subscription $subscription)
    {
        $subscription->fill($request->all());
        $subscription->save();
        return response()->json();
    }
}
