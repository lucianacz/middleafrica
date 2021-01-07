<body>
    <form action="/cargarIconos/{{$iconos->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="nombre"><h3>Nombre de los iconos</h3></label>
        
        <p>{{$iconos->nombre}}</p>

        <label for="icono">icono</label>
        <input type="file" name="icono" id="icono">
        <br>
        <label for="icono2">icono2</label>
        <input type="file" name="icono2" id="icono2">
<br>
        <label for="icono3">icono3</label>
        <input type="file" name="icono3" id="icono3">
        <br>
        <label for="icono4">icono4</label>
        <input type="file" name="icono4" id="icono4">
        <br>
        <label for="icono5">icono5</label>
        <input type="file" name="icono5" id="icono5">
      <br>
        <label for="icono6">icono6</label>
        <input type="file" name="icono6" id="icono6">


        <input type="submit" value="cargar fotos">
        
    </form>
</body>