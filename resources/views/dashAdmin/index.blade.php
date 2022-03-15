
@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Hotel Mudejar</h1>
@stop

@section('content')
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
            <center>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">                     
                    <img src="{!! asset('images/logoHotel.png') !!}">               
                </div>
            </center>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
