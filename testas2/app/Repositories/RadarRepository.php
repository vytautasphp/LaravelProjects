<?php

namespace App\Repositories;
use App\Radar;

class RadarRepository 
{
    public function list($page)
    {
        $radars = Radar::orderBy('date', 'desc')->paginate($page);
       
        return $radars;   //
    }

    public function save($request)
    {
        $radar = new Radar;
        $radar->date = $request->input('date');
        $radar->number = $request->input('number');
        $radar->distance = $request->input('distance');
        $radar->creator_id = \Auth::user()->id;
        $radar->updator_id = \Auth::user()->id;
        $radar->time = $request->input('time');
        
        $radar->save();
         
    }
    public function update($request, Radar $radar)
    {
        $radar->date = $request->input('date');
        $radar->number = $request->input('number');
        $radar->distance = $request->input('distance');
        $radar->updator_id = \Auth::user()->id;
        $radar->time = $request->input('time');
        
        $radar->save();
        
    }
    public function delete(Radar $radar)
    {
        $radar->delete(); 
    }
}