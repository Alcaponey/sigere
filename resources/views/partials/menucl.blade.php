<nav>
        <ul class="menu">
          <li class="<?php echo (strpos(url()->current(), 'inicio') !== false) ? "current" : ""; ?>"><a href="{{url('/inicio')}}">Inicio</a></li>
          <li class="<?php echo (strpos(url()->current(), 'nuestrohotel') !== false) ? "current" : ""; ?>"><a href="{{url('/nuestrohotel')}}">Nuestro hotel</a></li>
         <li class="<?php echo (strpos(url()->current(), 'servicios') !== false) ? "current" : ""; ?>"><a href="{{url('/servicios')}}">Sevicios</a></li>
          <li class="<?php echo (strpos(url()->current(), 'reservas') !== false) ? "current" : ""; ?>"><a href="{{url('/reservas')}}">Reservas</a></li>
          <li class="<?php echo (strpos(url()->current(), 'galeria') !== false) ? "current" : ""; ?>"><a href="{{url('/galeria')}}">Galeria</a></li>
          <li class="<?php echo (strpos(url()->current(), 'contactenos') !== false) ? "current" : ""; ?>"><a href="{{url('/contactenos')}}">Contactenos</a></li>
        </ul>
      </nav>