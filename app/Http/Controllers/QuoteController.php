<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    public function quoteSave(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'product' => 'required',
            'company_name' => 'required',
            'company_size' => 'required',
            'address' => 'required',
            'message' => 'required'
        ]);

        $quotes = new Quote;

        $quotes->name = $request->name;
        $quotes->email = $request->email;
        $quotes->phone = $request->phone;
        $quotes->product = $request->product;
        $quotes->company_name = $request->company_name;
        $quotes->company_size = $request->company_size;
        $quotes->address = $request->address;
        $quotes->message = $request->message;

        $quotes->save();

        Mail::send('email.quote', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'product' => $request->get('product'),
            'company_name' => $request->get('company_name'),
            'company_size' => $request->get('company_size'),
            'address' => $request->get('address'),
            'message' => $request->get('message'),
        ), function ($message) use ($request) {
            $message->from($request->email);
            $message->to('taslimabegum6688@gmail.com', 'Hello Admin')->subject($request->get('company_name'));
        });

        return back()->with('success', 'We received your e-mail, Thank you for contact with us');

    }
}
