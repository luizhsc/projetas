<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use Carbon\Carbon;

class VehicleController extends Controller
{
    public function index() {
        $vehicles = Vehicle::all();
        
        return view('vehicle.index')->withVeiculo($vehicles);
    }

    public function create() {
        return view('vehicle.create');
    }

    public function store(Request $request) {
        $input = $request->all();        
        $create_at = Carbon::now()->toDateTimeString();

        Vehicle::create($input, $create_at);            
        
        return redirect()->route('vehicle.index');
    }

    public function edit($id) {
        $vehicles = Vehicle::find($id);
        
        return view('vehicle.edit')->with('vehicle', $vehicles);
    }

    public function update($id, Request $request) {        
        $vehicles = Vehicle::findOrFail($id);
        $input = $request->all();   
        $vehicles->fill($input)->save();
        
        return redirect()->route('vehicle.index');
    }

    public function destroy(Request $request, $id) {
        $vehicles = Vehicle::findOrFail($id);
        $vehicles->delete();
        
        return redirect()->route('vehicle.index');
    }

    public function show($id) {
        $vehicles = Vehicle::findOrFail($id);
        
        return view('vehicle.show')->withVeiculo($vehicles);
    }
}
