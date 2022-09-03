<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BillingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Checkout the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function checkout(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SK'));

        $user = auth()->user();

        $source = \Stripe\Source::create([
            'type' => $request->type ?? 'ideal', // sofort, bancontact
            'amount' => $request->amount ?? 500,
            'currency' => $request->currency ?? 'eur',
            'owner' => ['email' => $user->email, 'name' => $user->name],
            'sofort' => ['country' => 'NL',],
            'redirect' => ['return_url' => 'http://wsv3.test/membership'],
        ]);
        
        

        return response()->json(['url' => $source->redirect->url]);
    }
}
