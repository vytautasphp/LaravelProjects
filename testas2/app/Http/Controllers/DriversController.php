<?php

namespace App\Http\Controllers;

use App\Driver;
use Illuminate\Http\Request;

class DriversController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Driver $driver)
    {
       // $drivers=Driver::all();
     //  return view('drivers.index', compact('drivers'));
       $drivers = Driver::orderBy('id')->paginate(15);
       // return view('radars.index', compact('radars'));
       //$radars=Radar::all();
        return view('drivers.index', compact('drivers'));   //
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Driver $driver)
    {
        return view('drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $driver = new Driver;
        $driver->name = $request->input('name');
        $driver->city = $request->input('city');
        
        $driver->save();
        
        return redirect('/drivers');  //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        return view('drivers.show', compact('driver'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        return view('drivers.edit', compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        
        $driver->name = $request->input('name');
        $driver->city = $request->input('city');
        $driver->city = $request->input('id');
        $driver->Save();
        
        return redirect('/drivers'); //  //
    }
    public function delete(Driver $driver)
    {
        return view('drivers.destroy', compact('driver')); //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        $driver->delete();
        return redirect('/drivers'); //
    }
}
