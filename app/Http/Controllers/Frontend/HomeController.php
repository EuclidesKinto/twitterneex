<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
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
        $users = User::get();
        return view('frontend.home', compact('users'));
    }
}
