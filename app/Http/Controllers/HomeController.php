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
}
