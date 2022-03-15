<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /*public function index(){
        $bookings = Booking::all();
        return view('reservas.index',compact('bookings'));
    }*/

    public function index(){
        $bookings = Booking::all();
        return view('dashAdmin.reservas',compact('bookings'));
    }

    public function create(){
        $booking = new Booking();
        return view('reservas.create',compact('booking'));
    }

    public function store(Request $request){
        $request->validate([
//            'numBooking' => ['required', 'string', 'max:255', 'unique:bookings'],
            'numDocument' => ['required', 'string', 'max:255'],
            'typeRoom' => ['required', 'string', 'max:255'],
           // 'numRoom' => ['required', 'string', 'max:255'],
            'dateArrival' => ['required', 'date'],
            'dateOutput' => ['required', 'date'],
            //'costBooking' => ['required', 'int'],
        ]);

        $r = $request->all();
        $r->numDocument =Auth::user()->numDocument;
        Booking::create($r);
        return redirect()->route('reservas');
    }


    public function edit($id){
        $booking = Booking::where('id',$id)->first();
        return view('reservas.edit', compact('booking'));
    }

    public function update(Request $request,$id){
        $request->validate([
            'numBooking' => ['string', 'max:255'],
            'numDocument' => ['string', 'max:255'],            
        ]);
        //dd($request);
        $resultado = Booking::where('id',$id)->update([
            'numBooking'=>$request['numBooking'],
            'numDocument'=>$request['numDocument'],            
        ]);
        $bookings = Booking::all();
        //return view('reservas.index', compact('bookings'));
        return view('dashAdmin.reservas', compact('bookings'));
    }

    public function delete($id){
        $booking = Booking::where('id',$id)->delete();
        $bookings = Booking::all();
        //return view('reservas.index', compact('bookings'));
        return view('dashAdmin.reservas', compact('bookings'));
    }
}
