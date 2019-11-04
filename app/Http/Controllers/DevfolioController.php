<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevfolioController extends Controller
{
     /**
     * Show the application homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $herodetails = \App\Herocpanel::all();
        return view('devfolio',['herodetails'=>$herodetails]);
    }
}
