<body>
    <form action="/cargarIconos/{{$iconos->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="nombre"><h3>Nombre de los iconos</h3></label>
        
        <p>{{$iconos->nombre}}</p>

        <label for="icono">icono</label>
        <input type="file" name="icono" id="icono">


        <input type="submit" value="cargar fotos">
        
    </form>
</body>