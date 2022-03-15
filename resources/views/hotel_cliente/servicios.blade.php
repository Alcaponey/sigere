@extends('layouts.plantillacl')

@section('content')


<h2 class="top-1 p3">Nuestros Servicios</h2>
<h3>El Hotel Mudejar cuenta con personal capacitado para una gran experiencia en tu estadia entregando lo mejor de cada uno dia a dia.</h3>

<div class="wrap block-1" style="margin-top: 5%;">
    <div> <img src="{{asset('images/reception_100px.png')}}" alt="" class="">
        <h3>Recepcion</h3>
    </div>
    <div> <img src="{{asset('images/sleeping_in_bed_50px.png')}}" alt="">
        <h3>Habitaciones</h3>
        <p></p>
        </div>
    <div class="last"> <img src="{{asset('images/carpool_50px.png')}}" alt="">
        <h3>Parqueadero</h3>
        <p></p>
    </div>
    <div class="last"> <img src="{{asset('images/luggage_50px.png')}}" alt="">
        <h3>Equipajes</h3>
        <p></p>
    </div>
    
</div>

<div class="wrap block-1" style="margin-top: 25px;">
    <div> <img src="{{asset('images/star_50px.png')}}" alt="" class="">
        <h3>Atencion 24/7</h3>
    </div>
    <div> <img src="{{asset('images/cutlery_50px.png')}}" alt="" class="">
        <h3>Paquetes</h3>
    </div>
    <div> <img src="{{asset('images/confetti_50px.png')}}" alt="" class="">
        <h3>Salon de Eventos</h3>
    </div>
    
</div>




@endsection
