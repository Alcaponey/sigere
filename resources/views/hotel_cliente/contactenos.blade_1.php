@extends('layouts.plantillacl')

@section('content')

    <div class="grid_8" style="margin-left: -6%">
        <h2 class="top-1 p3">Formulario de Contacto</h2>
        <form id="form" method="post" action="#">
          <fieldset>
            <label><strong>Nombre :</strong>
              <input type="text" value="">
            </label>
            <label><strong>E-mail:</strong>
              <input type="text" value="">
            </label>
            <label><strong>mensaje:</strong>
              <textarea></textarea>
            </label>
            <div class="btns"><a href="#" class="button">Cancelar</a><a href="#" class="button">Enviar</a></div>
          </fieldset>
        </form>
      </div>
      <div class="grid_4">
        <div class="left-1">
          
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.5890579555316!2d-76.53697688255615!3d3.44963910000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a6648eb7ce9b%3A0x32ad112bf991502f!2sCl%208%20%235-53%2C%20Cali%2C%20Valle%20del%20Cauca!5e0!3m2!1ses!2sco!4v1646762108640!5m2!1ses!2sco" width="420" height="300" style="border:0;margin-top: 8%;margin-bottom: 8%" allowfullscreen="" loading="lazy"></iframe>
          <h2 class="p3">Nuestra Dirección</h2>
          <dl>
            <dt class="color-1 p2"><strong>Cali Colombia,<br>
              Calle 8, #5-53.</strong></dt>
            <dd><span>Telefono:</span>+1 800 559 6580</dd>
            <dd><span>Cel:</span>+1 959 603 6035</dd>
            <dd><span>E-mail:</span><a href="#" class="link">mail@mudejar.com</a></dd>
          </dl>
        </div>
        
       
          
      </div>
      <div class="clear"></div>
  
   
        

@endsection
