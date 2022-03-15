@extends('layouts.plantillacl')

@section('content')
<div class="grid_5">
    <h2 class="top-1 p3">Formulario de Reservas</h2>
    <form class="form-1 bot-2" id="form" method="post" action="#">
        <fieldset>
            <div class="select-none" style="margin-bottom: 2%;width: 61.1%">
                <label>Tipo de Habitacion</label>
                <select id="typeRoom" name="typeRoom" >
                    <option>Seleccione</option>                     
                    <option>Doble</option>
                    <option>Sencilla</option>
                    <option>Triple</option>
                </select>
            </div>
            <div class="select-none" style="margin-bottom: 2%;width: 61.1%">
                <label>Cantida de Personas</label>
                <select id="totalPeople"  name="totalPeople" >
                    <option>Seleccione</option>
                    <option>1</option>
                      <option>2</option>
                    <option>3</option>
                </select>
            </div>
            <label><strong>Fecha de llegada:</strong>           
                <input type="date" id="dateArrival"  name="dateArrival" step="1" min="2022-03-15" max="2022-03-15" value="2013-01-01">
            </label>
            <label><strong>Fecha de salida:</strong>           
                <input type="date" id="dateOutput" name="dateOutput" step="1" min="2022-03-15" max="2022-03-15" value="2013-01-01">
            </label>                       
        </fieldset>
    </form>
</div>

<div class="grid_6" style="margin-top: 10%;">   
    <form class="form-1 bot-2" id="form" method="post" action="#">
        <fieldset>            
            <label ><strong style="margin-bottom:2% ">Disponibilidad:</strong>
                <textarea id="comentarios" name="comentarios"></textarea>
            </label>
            <div class="btns"><a href="javascript:void(0)" onclick="validateReserva('{{ (auth()->user() != null) ? auth()->user()->numDocument : '' }}')" class="button">Verificar</a><a href="#" class="button">Haz tu Reserva</a></div>
        </fieldset>
    </form>
</div>


@endsection
