<body>

    <h3>Prueba de la Tabla Festivales</h3>
    <ul>
        @foreach ($festivales as $festival)

        <li>
             <h2> Nombre</h2>
            <p> {{$festival->nombre}}</P>
        </li>
        <li>
            <h2>Descripción</h2>
            <p>{{$festival->descripcion}}</p>
        </li>

        <li><img src="/storage/upload/{{$festival->foto1}}" alt=""></li>
        <li><p>{{$festival->descripcion_foto1}}</p></li>
        <li><img src="/storage/upload/{{$festival->foto2}}" alt=""></li>
        <li><p>{{$festival->descripcion_foto2}}</p></li>
        <li><img src="/storage/upload/{{$festival->foto3}}" alt=""></li>
        <li><p>{{$festival->descripcion_foto3}}</p></li>
        
        <p>nombre del pais</p>
        @if($festival->descripcion)
        <li>{{$festival->pais->nombre}}</li>
        @endif
        <button><a href="/cargarFotosFestivales/{{$festival->id}}">cargar Fotos</a></button>
        @endforeach
    </ul>
</body>