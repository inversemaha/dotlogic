<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactSave(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'bodyMessage' => 'required'
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->company_name = $request->company_name;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
        $contact->bodyMessage = $request->bodyMessage;

        $contact->save();

        Mail::send('email.contact', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'company_name' => $request->get('company_name'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
            'bodyMessage' => $request->get('bodyMessage'),
        ), function ($message) use ($request) {
            $message->from($request->email);
            $message->to('taslimabegum6688@gmail.com', 'Hello Admin')->subject($request->get('company_name'));
        });

        return back()->with('success', 'We received your e-mail, Thank you for contact with us');

    }
}
