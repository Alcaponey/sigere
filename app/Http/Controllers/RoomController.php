<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /*public function index(){
        $rooms = Room::all();
        return view('habitaciones.index',compact('rooms'));
    }*/    

    public function index(){
        $rooms = Room::all();
        return view('dashAdmin.habitaciones',compact('rooms'));
    }

    public function create(){
        $room = new Room();
        return view('habitaciones.create',compact('room'));
    }    

    public function store(Request $request){
        $request->validate([
            'number' => ['required', 'string', 'max:255', 'unique:rooms'],
            'type' => ['required', 'string', 'max:255'],
            'available' => ['required', 'string', 'max:255'],
        ]);

        Room::create($request->all());
        return redirect()->route('habitaciones');
    }


    public function edit($id){
        $room = Room::where('id',$id)->first();
        return view('habitaciones.edit', compact('room'));
    }

    public function update(Request $request,$id){
        $request->validate([
            'number' => ['string', 'max:255'],
            'type' => ['string', 'max:255'],
            'available' => ['string', 'max:255'],
        ]);        
        //dd($request);
        $resultado = Room::where('id',$id)->update([
            'number'=>$request['number'],
            'type'=>$request['type'],
            'available'=>$request['available'],            
        ]);
        $rooms = Room::all();
        //return view('habitaciones.index', compact('rooms'));
        return view('dashAdmin.habitaciones', compact('rooms'));
    }


    public function delete($id){
        $room = Room::where('id',$id)->delete();
        $rooms = Room::all();
        //return view('habitaciones.index', compact('rooms'));
        return view('dashAdmin.habitaciones', compact('rooms'));
    }
}
