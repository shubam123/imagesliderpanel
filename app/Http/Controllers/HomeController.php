<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//declare that we are using Imgapp model here
use App\Imgapp;

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
    public function index()
    {
        //we'll need to show all data from images table

        $imgs = Imgapp::all();
        return view('home',['imgs'=>$imgs]);
    }
}
