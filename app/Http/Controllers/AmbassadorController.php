<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ambassador;
use League\Flysystem\Exception;

class AmbassadorController extends Controller
{
    public function home()
    {
        return view('index');
    }
    public function save(Request $request)
    {
        $ambassador = new App\Ambassador;
        try {
            $ambassador->name = $request->name;
            $ambassador->email = $request->email;
            $ambassador->phone = $request->phone;
            $ambassador->college = $request->college;
            $ambassador->city = $request->city;
            $ambassador->strength = $request->strength;
            $ambassador->course = $request->course;
            $ambassador->department = $request->department;
            $ambassador->year = $request->year;
            $ambassador->contact = $request->contact;
            $ambassador->position = $request->position;
            $ambassador->why = $request->why;
            $ambassador->how = $request->how;
            $ambassador->save();
            return view('index')->with('status', 'You have successfully registered !');
        } catch (Exception $e) {
            return view('index')->with('status', 'Registration has Failed due to wrong details !');
        }
    }
}
