<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    
    public function index()
    {
        if(\Auth::guard('web')->user()) {
            return redirect()->route('dashboard');
         } else {
            return redirect()->route('login');
         }
    }
}
