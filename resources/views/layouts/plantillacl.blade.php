<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RealEstate</title>
        <meta http-equiv=”Content-Type” content="text/html; charset=ISO-8859-1" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('estilosweb/css/reset.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('estilosweb/css/style.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('estilosweb/css/grid_12.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('estilosweb/css/slider.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('estilosweb/css/jqtransform.css')}}">
        <script src="{{asset('estilosweb/js/jquery-1.7.min.js')}}"></script>
        <script src="{{asset('estilosweb/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('estilosweb/js/cufon-yui.js')}}"></script>
        <script src="{{asset('estilosweb/js/vegur_400.font.js')}}"></script>
        <script src="{{asset('estilosweb/js/Vegur_bold_700.font.js')}}"></script>
        <script src="{{asset('estilosweb/js/cufon-replace.js')}}"></script>
        <script src="{{asset('estilosweb/js/tms-0.4.x.js')}}"></script>
        <script src="{{asset('estilosweb/js/jquery.jqtransform.js')}}"></script>
        <script src="{{asset('estilosweb/js/FF-cash.js')}}"></script>
           <script src="{{asset('js/funciones.js')}}"></script>
        <script>
$(document)
        .ready(function () {
            $('.form-1')
                    .jqTransform();
            $('.slider')
                    ._TMS({
                        show: 0,
                        pauseOnHover: true,
                        prevBu: '.prev',
                        nextBu: '.next',
                        playBu: false,
                        duration: 1000,
                        preset: 'fade',
                        pagination: true,
                        pagNums: false,
                        slideshow: 7000,
                        numStatus: false,
                        banners: false,
                        waitBannerAnimation: false,
                        progressBar: false
                    })
        });
        </script>     
        <style>
            body {
                font-family: "Arial", Helvetica, sans-serif
            }

        </style>
    </head>
    <body>
        <div class="main">
            <!--==============================header=================================-->
            <header>
                <div>

                    <h1><a href="index.html"><img src="{{asset('images/logo.png')}}" alt="" /></a></h1>
                    <div class="social-icons"> 
                        <span>Siguenos:</span> <a href="#" class="icon-3"></a>
                        <a href="#" class="icon-2"></a> <a href="#" class="icon-1"></a> </div>
                    <div id="slide">
                        <div class="slider">
                            <ul class="items">
                                <li><img src="{{asset('images/portadaweb.png')}}" alt=""></li>
                                <li><img src="{{asset('images/hotelcali.png')}}" alt=""></li>
                                <li><img src="{{asset('images/fachadahotel3.png')}}" alt=""></li>
                            </ul>
                        </div>
                        <a href="#" class="prev"></a><a href="#" class="next"></a> </div>
                    <!-- sidebar menu -->
                    @include('partials.menucl')
                    <!-- /sidebar menu -->
                </div>
            </header>
            <!--==============================content================================-->
            <section id="content">
                <div class="container_12">
                    <div class="grid_12">
                        @yield('content')
                    </div>

                    <div class="clear"></div>
                </div>
            </section>
        </div>
        <!--==============================footer=================================-->
        <footer>

            <p style="font-size: 15px">Página desarrollada con la plantilla: Real Estate Website Template by TemplateMonster.com</p>
            <p style="font-size: 20px;font-weight: bold">Equipo de desarrollo: Soluweb</p>
        </footer>
        <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}" />
        <input type="hidden" id="base_url" name="base_url" value="{{ asset('/') }}" />
        <script>Cufon.now();</script>
    </body>
</html>
