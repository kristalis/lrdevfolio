<?php

namespace App\Http\Controllers;

use App\Herocpanel;
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


        $herodetails = \App\Herocpanel::find('1');         
        return view('devfolio',['herodetails' => $herodetails]);
    }
}
