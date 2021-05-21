<h1>Formulario en Laravel</h1>

<form action= /recibir method=POST content="{{ csrf_token() }}">
 @csrf
<label for="nombre">Nombre</label>
<input type="text" name="nombre"/>

<br/>
<label for="email">Email</label>
<input type="email" name="email"/>
<br/>

<input type="submit" value="Enviar"/> 




</form>









