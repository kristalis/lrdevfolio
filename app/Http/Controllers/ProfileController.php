<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profiles = Profile::find($id);         
        return view('cpanel.profilecpanel',['profiles' => $profiles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profiles = Profile::find($id);  
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
            $proiles->profile_image = $name;
        }
            $profiles->profile_name = $request->name;
            $profiles->profile_title = $request->profile_title;
            $profiles->profile_email = $request->profile_email;
            $profiles->profile_phone = $request->profile_phone;
            $profiles->profile_aboutme = $request->profile_aboutme;

            $profiles->save();

            return redirect()->route('Lrdevfolio');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
