<?php

namespace App\Http\Controllers;
use Exception;
use App\Models\admin;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    //
    function addvehicle(Request $request)
    {
        try{
            $admin = new admin;
            $admin->vehicle_name = $request->vehicle_name;
            $admin->save();
        }
        catch (Exception $error) {
            return redirect()->back()->with('error', $error);
        }
    }
    function getall()
    {
        try{
            $admin = admin::all();
        }
        catch (Exception $error) {
            return redirect()->back()->with('error', $error);
        }
    }
}
