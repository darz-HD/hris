<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        Session::put('test', 'test');
        return view('test');
    }
}
