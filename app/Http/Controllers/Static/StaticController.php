<?php

namespace App\Http\Controllers\Static;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }
    //
    public function about($categories = null, $item = null)
    {
        return '<h1>' . $categories . '</h1>';
    }
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
    public function portfolio()
    {
        $filetr = request('color');
        if (isset($filetr)) {
            # code...
            return 'About Page color ' . strip_tags($filetr) . ' .';
        } else {
            return 'About Page color .';
        }
    }
}
