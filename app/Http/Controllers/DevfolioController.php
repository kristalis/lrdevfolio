<?php

namespace App\Http\Controllers;

use App\Herocpanel;
use App\Profile;
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


        $herodetails = Herocpanel::find('1');
        $profiledetails = Profile::find('1');          
        return view('devfolio',['herodetails' => $herodetails, 'profiledetails' => $profiledetails ]);
    }
}
