<!-- IMPRIMIR POR PANTALLA -->
<h1>{{$titulo}}</h1> 

<h1>{{$listado[2]}}</h1> 

<h2>{{date("Y")}}</h2>




@isset ($director) 
    tengo un director
@else
No hay director
    @endisset

@if ($titulo && count($listado) >=5 )
<h1>El titulo existe y es este : {{$titulo}} y el listado es mayor a 5</h1>
@else ($)
el titulo no existe
@endif 
<br/>
<!-- BUCLES -->

@for ($i = 0; $i<= 20; $i++)
El numero es {{$i}} <br/>
@endfor


