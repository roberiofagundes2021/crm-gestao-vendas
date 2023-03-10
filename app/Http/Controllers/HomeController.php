<?php

namespace App\Http\Controllers;
use App\Charts\Bar;
use App\Charts\linechart;
use App\Charts\MonthlyUsersChart;

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
     * @return \Illuminate\View\View
     */
    public function index(MonthlyUsersChart $chart)
    {
             return view('dashboard', ['chart' => $chart->build()]);
    }
  
    
    
}
