<ul>
    @foreach ($paises as $pais)
    <li>
      <h2>{{$pais->nombre}}</h2>
      </li>
      <li><p>{{$pais->descripcion}}</p></li>
     

      <h2>fotos de la tabla de Festivales</h2>
      
      <ul>
        @foreach ($pais->festival as $festivales)

          <li><img src="storage/upload/{{$festivales->foto1}}" alt="imagen de festival"></li>
          <li><p>{{$festivales->descripcion_foto1}}</p></li>
          <li><img src="storage/upload/{{$festivales->foto2}}" alt="imagen de festival"></li>
          <li><p>{{$festivales->descripcion_foto2}}</p></li>
          <li><img src="storage/upload/{{$festivales->foto3}}" alt="imagen de festival"></li>
          <li><p>{{$festivales->descripcion_foto3}}</p></li>
        
          @endforeach

          </ul>

    <h2>fotos de la tabla de hospedaje</h2>
      
      <ul>

        @foreach ($pais->hospedajes as $hospedaje)

          <li><img src="/storage/upload/{{$hospedaje->foto1}}" alt="imagen de hospedaje"></li>
          <li><p>{{$hospedaje->descripcion_foto1}}</p></li>
          <li><img src="/storage/upload/{{$hospedaje->foto2}}" alt="imagen de hospedaje"></li>
          <li><p>{{$hospedaje->descripcion_foto2}}</p></li>
          <li><img src="/storage/upload/{{$hospedaje->foto3}}" alt="imagen de hospedaje"></li>
          <li><p>{{$hospedaje->descripcion_foto3}}</p></li>

        
        @endforeach

        </ul>

    <h2>fotos de la tabla de Lugares Turisticos</h2>
      <ul>
          @foreach ($pais->lugarTuristico as $lugares)

            <li><img src="/storage/upload/{{$lugares->foto1}}" alt="imagen de lugarTuristico"></li>
            <li><p>{{$lugares->descripcion_foto1}}</p></li>
            <li><img src="/storage/upload/{{$lugares->foto2}}" alt="imagen de lugarTuristico"></li>
            <li><p>{{$lugares->descripcion_foto2}}</p></li>
            <li><img src="/storage/upload/{{$lugares->foto3}}" alt="imagen de lugarTuristico"></li>
            <li><p>{{$lugares->descripcion_foto3}}</p></li>

          @endforeach

          </ul>

    <h2>fotos de la tabla de Tribus</h2>
      
      <ul>
          @foreach ($pais->tribus as $tribu)

          <li><img src="/storage/upload/{{$tribu->foto1}}" alt="imagen de tribus"></li>
          <li><p>{{$tribu->descripcion_foto1}}</p></li>
          <li><img src="/storage/upload/{{$tribu->foto2}}" alt="imagen de tribus"></li>
          <li><p>{{$tribu->descripcion_foto2}}</p></li>
          <li><img src="/storage/upload/{{$tribu->foto3}}" alt="imagen de tribus"></li>
          <li><p>{{$tribu->descripcion_foto3}}</p></li>
          
          @endforeach

      </ul>
    

      
    <h2>fotos de la tabla de Naturalezas</h2>
      
    <ul>
       @foreach ($pais->naturalezas as $naturaleza)

          <li><img src="/storage/upload/{{$naturaleza->foto1}}" alt="imagen de naturaleza"></li>
          <li><p>{{$naturaleza->descripcion_foto1}}</p></li>
          <li><img src="/storage/upload/{{$naturaleza->foto2}}" alt="imagen de naturaleza"></li>
          <li><p>{{$naturaleza->descripcion_foto2}}</p></li>
          <li><img src="/storage/upload/{{$naturaleza->foto3}}" alt="imagen de naturaleza"></li>
          <li><p>{{$naturaleza->descripcion_foto3}}</p></li>
        
          @endforeach

    </ul>

    <h2>fotos de la tabla de Higlights</h2>
      
    <ul>
        @foreach ($pais->iconos as $icono)
          <li><p>{{$icono->titulo}}</p></li>
          <li><img src="/storage/upload/{{$icono->icono}}" alt="imagen de icono"></li>
         @endforeach

    </ul>
  
  @endforeach
     </ul>