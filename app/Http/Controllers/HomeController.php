<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('home');
    }

    public function services(){
        return view('services');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function team(){
        return view('team');
    }

    public function contact(){
        return view('contact');
    }
}