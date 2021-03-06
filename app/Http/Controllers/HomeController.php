<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\Car;
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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cars = Car::where('status', 1)->limit(6)->get();
        $bikes = Bike::where('status', 1)->limit(6)->get();
        return view('home', compact('cars', 'bikes'));
    }

    public function about() {
        return view('about');
    }
}
