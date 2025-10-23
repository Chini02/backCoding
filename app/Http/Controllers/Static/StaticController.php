<?php

namespace App\Http\Controllers\Static;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    //
    public function index()
    {
        return view('layout');
    }
    //
    
    //
    public function services()
    {
        return view('services');
    }
    //
    public function contact()
    {
        return view('contact');
    }
    //
    public function about()
    {
        return view('about');
    }
}
