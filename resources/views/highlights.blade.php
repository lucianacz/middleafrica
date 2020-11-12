<body>

    <h3>Prueba de la Tabla Higlights</h3>
    <ul>
        @foreach ($iconos as $icono)

        <li>
             <h2> Titulo</h2>
            <p> {{$icono->nombre}}</P>
        </li>

        <li><img src="/storage/upload/{{$icono->icono}}" alt=""></li>

        <button><a href="/cargarIconos/{{$icono->id}}">cargar Fotos</a></button>
        @endforeach
    </ul>
</body>