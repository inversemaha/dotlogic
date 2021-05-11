<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontEnd.pages.home.index');
    }
    public function service()
    {
        return view('frontEnd.pages.service.index');
    }
    public function productPage()
    {
        return view('frontEnd.pages.product.index');
    }
    public function about()
    {
        return view('frontEnd.pages.about.index');
    }
    public function contactUs()
    {
        return view('frontEnd.pages.contact.index');
    }
    public function contactSave(Request $request)
    {
        $inputs = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'company_name' => $request->input('company_name'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'bodyMessage' => $request->input('bodyMessage'),
        ];


    }
    public function askForQuote()
    {
        return view('frontEnd.pages.quote.index');
    }
}
