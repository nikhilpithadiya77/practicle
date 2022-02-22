<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;
use Exception;
class clientcontroller extends Controller
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
       
            return view('practicle');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
                $practicle = new client();
                $practicle->vehicle = $request->vehicle;
                $practicle->date = $request->date;
                $practicle->booking = $request->booking;
                $practicle->name = $request->name;
                $practicle->email = $request->email;
                $practicle->phone = $request->phone;
                $practicle->dob = $request->dob;
                $practicle->address = $request->address;
                $practicle->zipcode = $request->zipcode;
                $practicle->city = $request->city;
                $practicle->state = $request->state;
                $practicle->save();
                return redirect('practicle');
            
         
        } catch (Exception $error) {
            return redirect()->back()->with('error', $error);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
