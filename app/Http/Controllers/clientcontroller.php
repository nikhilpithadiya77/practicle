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
        try {
            return view('practicle');
        } catch (Exception $error) {
            return redirect()->back()->with('error', $error);
        }
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
                $companies = new client();
                $companies->vehicle = $request->vehicle;
                $companies->date = $request->date;
                $companies->booking = $request->booking;
                $companies->name = $request->name;
                $companies->email = $request->email;
                $companies->phone = $request->phone;
                $companies->dob = $request->dob;
                $companies->address = $request->address;
                $companies->zipcode = $request->zipcode;
                $companies->city = $request->city;
                $companies->state = $request->state;
                $companies->save();
                return redirect('practicle');
            
            dd("img");
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
