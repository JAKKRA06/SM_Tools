<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * HomeController controlls main blocks (section)
     */


    /**
     * Show main options
     */
    public function index()
    {
        return view('main-blocks');
    }
}
