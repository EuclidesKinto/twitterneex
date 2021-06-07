<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        if(!Auth::user()){
            return view('auth.login');
        }
        return redirect()->route('index');
    }
    public function index()
    {
        return view('frontend.home');
    }
}
