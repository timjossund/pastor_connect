<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage() {
        return view('home');
    }

    public function aboutpage() {
        return view('single-post');
    }
}
