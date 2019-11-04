<?php

namespace App\Http\Controllers;

use App\Herocpanel;
use Illuminate\Http\Request;

class HerocpanelController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $herolists = \App\Herocpanel::find('1');         
        return view('cpanel.herocpanel',['herolists' => $herolists]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Herocpanel  $herocpanel
     * @return \Illuminate\Http\Response
     */
    public function show(Herocpanel $herocpanel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Herocpanel  $herocpanel
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $herolists = \App\Herocpanel::find('1');         
        return view('cpanel.herocpanel',['herolists' => $herolists]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Herocpanel  $herocpanel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Herocpanel $herocpanel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Herocpanel  $herocpanel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Herocpanel $herocpanel)
    {
        //
    }
}