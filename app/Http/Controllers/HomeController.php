<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Event;
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
    public function index()
    {
        return view('user/home');
    }

    public function event()
    {
        $events = Event::all();
        return view('user/events',compact('events'));
    }

    public function adminHome()
    {
        return view('admin/admin-home');
    }

    public function home()
    {
        $products = Product::all();

        return view('user/home',compact('products'));
    }

}
