@extends('layouts.plantillacl')

@section('content')
<div class="grid_12" style="margin-top: 4%;">

    
  
    <h2 class="p4">Galeria!</h2>
    <div class="wrap block-1">
        <div style="margin-right: 6%;margin-bottom: 3%"> <img width="210" src="{{asset('images/habitacionmatrimonial.png')}}" alt="" class="img-border">
            <h3>Habitacion Personal</h3>
            </div>
        <div style="margin-right: 6%"> <img width="210" src="{{asset('images/habitaciondoble.png')}}" alt="" class="img-border">
            <h3>Habitaciones Doble</h3>
            </div>
        <div style="margin-right: 6%"> <img width="210"src="{{asset('images/habitaciontriple.png')}}" alt="" class="img-border">
            <h3>Habitaciones Triple</h3>
            </div>
         <div class="last"> <img width="210"src="{{asset('images/salon2.png')}}" alt="" class="img-border">
            <h3>Banquetes</h3>
            </div>
    </div>
    
     <div class="wrap block-1">
        <div style="margin-right: 6%"> <img width="210"src="{{asset('images/recepcionhotel.png')}}" alt="" class="img-border">
            <h3>Recepcion</h3>
            </div>
        <div style="margin-right: 6%"> <img width="210" src="{{asset('images/habitaciondoble.png')}}" alt="" class="img-border">
            <h3>Habitaciones Doble</h3>
            </div>
        <div style="margin-right: 6%"> <img width="210"src="{{asset('images/recepcionhotel.png')}}" alt="" class="img-border">
            <h3>Recepcion</h3>
            </div>
        <div class="last"> <img width="210"src="{{asset('images/salon.png')}}" alt="" class="img-border">
            <h3>Banquetes</h3>
            </div>
    </div>
</div>


@endsection
