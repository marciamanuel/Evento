@extends('layout.main')

@section('title', 'MM Events')

@section('content')



<div id="search-container" class="col-md-12">
@if($search)<h1>Buscando por:{{ $search }}</h1>
  @else<h1>Busque um evento</h1>  
@endif

<form action="/" method="GET">

<input type="text" id="search" name="search" class="form-control" placeholder="procurar...">
</form>
</div>

<div id="events-container" class="col-md-12">
<h2>Próximos Eventos</h2>
<p>Veja os eventos dos próximos dias</p>

<div id= "cards-container" class="row mb-5 container">
@foreach($evento as $event)
<div class="card col-md-3 m-5">
    <img src="/img/events/{{$event->image}}" alt="{{$event->title}}">
    <div class="card-body">
    <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
<h5 class="card-title">{{$event->title}}</h5>
<p class="card-participantes">Xparticipantes</p>
<a href="/events/{{$event->id}}" class="btn btn-primary" id="botao">Saber mais</a>
</div>
</div>
@endforeach
@if(count($evento)==0 && $search)
<p>Não foi possivel encontrar evento com {{ $search }}! <a href="/">Ver todos!</a></p>
@elseif(count($evento)==0)
<p>Não há eventos disponíveis</p>
@endif

</div>
</div>





@endsection
