<?php

namespace App\Http\Controllers;

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

    public function askForQuote()
    {
        return view('frontEnd.pages.quote.index');
    }
}
