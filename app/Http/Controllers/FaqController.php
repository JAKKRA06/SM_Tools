<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Show main options
     */
    public function index()
    {
        return view('faq');
    }
}
