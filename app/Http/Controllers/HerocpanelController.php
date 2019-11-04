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
    public function edit($id)
    {
        $herolists = \App\Herocpanel::find($id);         
        return view('cpanel.herocpanel',['herolists' => $herolists]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Herocpanel  $herocpanel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $herolists = Herocpanel::find($id);  
        if($request->hasFile('image'))
        {
           $image = $request->image;
               // Get filename with extension            
            $filenameWithExt = $image->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);       
            $name =  $filename.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $imagePath = $destinationPath . "/" . $name;
            $image->move($destinationPath, $name);
            $herolists->hero_image = $name;
        }
            $herolists->brand = $request->brand;
            $herolists->hero_title = $request->hero_title;
            $herolists->hero_description = $request->hero_description;
            $herolists->save();

            return redirect()->route('Lrdevfolio');

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
