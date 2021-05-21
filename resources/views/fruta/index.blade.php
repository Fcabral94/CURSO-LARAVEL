<h1> Listado de Frutas </h1>

<ul>
@foreach ($frutas as $fruta)
<li>{{$fruta->nombre}}</li>
@endforeach
</ul>