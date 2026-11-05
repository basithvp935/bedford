<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class MainController extends Controller
{
    
    public function index()
    {
        if(\Auth::guard('web')->user()) {
            return redirect()->route('admin::dashboard');
         } else {
            return redirect()->route('admin::get_login');
         }
    }
}
