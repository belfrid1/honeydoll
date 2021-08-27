<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    //    $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::check()) {
            return redirect()->action([Admin\AdminController::class, 'index']);
        } else {
            return redirect()->name('front.home');
        }
    }

}
