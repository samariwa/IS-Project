<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('adminpages.dashboard');
    }
    public function getDeliverers()
    {
        return view('adminpages.drivers');
    }
    public function getCleaners()
    {
        return view('adminpages.cleaners');
    }
    public function getCooks()
    {
        return view('adminpages.cooks');
    }
    public function getReports()
    {
        return view('adminpages.reports');
    }
}
