<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
    {
        $this->middleware('auth');
    } */

    public function index()
    {
        return view('guests.index');
    }
    public function about()
    {
        return view('guests.about');
    }
    public function contacts()
    {
        return view('guests.contacts');
    }
}
