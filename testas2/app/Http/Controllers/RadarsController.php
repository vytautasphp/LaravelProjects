<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Radar;
use Validator;
use App\Http\Requests\RadarFormRequest;
use Session;
use App\Repositories\RadarRepository;
class RadarsController extends Controller
{
    private $radarRepository;

    public function __construct(RadarRepository $radarRepository)
    {
        $this->radarRepository = $radarRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RadarRepository $radarRepository)
    {
        //$radars = Radar::orderBy('date', 'desc')->paginate(15);
        $radars = $radarRepository->list(10);
       // return view('radars.index', compact('radars'));
       //$radars=Radar::all();
        return view('radars.index', compact('radars'));   //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Radar $radar)
    {
        return view('radars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'date' => 'required | date',
            'distance' => 'required | numeric',
            'number' => 'required | string | max:6 |min:1',
            'time' => 'required | numeric'
            ]);

        $validator->after(function($validator) {
            $data = $validator->getData();
            $speed = $data['distance'] / $data['time'] * 3.6;
            if ($speed < 10 || $speed > 300) {
                $validator->errors()->add('speed', 'Wrong speed: '.$speed.' km/h !');
            }
            });      
        $validator->validate();

        $radar = new Radar;
        $radar->date = $request->input('date');
        $radar->number = $request->input('number');
        $radar->distance = $request->input('distance');
        $radar->creator_id = \Auth::user()->id;
        $radar->updator_id = \Auth::user()->id;
        $radar->time = $request->input('time');
        
        $radar->save();
        
        return redirect('/radars');
    }

    /**
     * Display the specified resource.
     *
     * @param  Radar $radar;
     * @return \Illuminate\Http\Response
     */
    public function show(Radar $radar)
    {
        
        return view('radars.show', compact('radar')); //radars/index   //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Radar $radar)
    {
        return view('radars.edit', compact('radar')); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Radar $radar,RadarRepository $radarRepository)
    {
        $validator = Validator::make($request->all(), [
            'date' => 'required | date',
            'distance' => 'required | numeric',
            'number' => 'required | string | max:6 |min:1',
            'time' => 'required | numeric'
            ]);

        $validator->after(function($validator) {
            $data = $validator->getData();
            $speed = $data['distance'] / $data['time'] * 3.6;
            if ($speed < 50 || $speed > 300) {
                $validator->errors()->add('speed', 'Wrong speed: '.$speed.' km/h !');
            }
            });      
        $validator->validate();

        $radars = $radarRepository->update($request, $radar);
        return redirect('/radars');
    }
    public function delete(Radar $radar)
    {
        return view('radars.destroy', compact('radar')); //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Radar $radar)
    {
     $this->radarRepository->delete($radar);
     return redirect('/radars');
    }
    
}
