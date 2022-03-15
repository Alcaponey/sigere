@extends('layouts.plantillacl')

@section('content')


<div class="grid_12">
    <h2 class="top-1 p3">Nuestro Hotel</h2>
    <div class="wrap"> <img width="190" src="{{asset('images/nuestro_hotel.jpeg')}}" alt="" class="img-border img-indent">
        <div class="extra-wrap">
            <p class="color-1 p6">El Hotel mudejar cuenta con un gran servicio de hospeadaje el cual brindamos cada dia de la mejor manera que podemos para que nuestros clientes se sientan acogidos. </p>
            <p>El Hotel Mudejar cuenta con 7 pisos, 40 Habitaciones y con una muy buena recepcion, en cuanto a sus servicios cuenta con habitaciones sencillas, matrimoniales y triples. En nuestro primer piso contamos con nuestro restaurante, Una exelente recepcion y tambien se encuentra el parqueadero, en nuestra habitacion contamos con muebles de exelente calidad y diseño muy bonitos que te sentiras acogido al hotel. Desde el segundo piso al sexto se encuentra ubicadas las habitaciones y en nuestro septimo piso se encuentra nuestras oficinas del hotel.</p>
        </div>
    </div>
   

      
</div>
<div class="grid_12">
    
    <h2 class="top-2 p3"><?php echo utf8_encode('Video') ?></h2>
    <iframe width="500" height="315" src="https://www.youtube.com/embed/5DCtti7Zcuw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>


@endsection
