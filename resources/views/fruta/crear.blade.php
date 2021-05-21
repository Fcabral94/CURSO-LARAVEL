<h1> Crear una Fruta </h1>
<form action="{{ action('FrutaController@save') }}" method="POST">
@csrf
    <label for="nombre">Nombre</label><br>
    <input type="text" name="nombre" /><br><br>

    <label for="descripcion">Descripcion</label><br>
    <input type="text" name="descripcion"><br><br>

    <label for="precio"> Precio</label><br>
    <input type="text" name="precio"/><br><br>

    <input type="submit" value="Guardar">

    
</form>