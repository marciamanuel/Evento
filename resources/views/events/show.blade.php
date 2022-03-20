@extends('layout.main')

@section('title', $evento->title)

@section('content')
<div class="col-md-10 offset-md-1 mt-5 mb-5">
    <div class="row">
        <div id="image-container" class="col-md-6">
<img src="/img/events/{{$evento->image}}"  alt="{{$evento->title}}">
        </div>
        <div id="info-container" class="col-md-6">
        <h1 class="text-danger">{{$evento->title}}</h1>
        <p class="event-city">{{$evento->city}}</p>
        <p class="event-participants">Xparticipantes</p>
        <p class="event-owner">{{ $eventoOwner['name'] }}</p>
        <a href="" class="btn btn-primary" id="event-submit">Confirmar presença</a>
        
        <h3 class="">O evento conta com:</h3>
        <ul id="itens-lista">
            @foreach($evento->itens as  $item)
               <li><i class="play-outline"></i>{{$item}}</li> 
            @endforeach

        </ul>
    </div>
        <div class="col-md-12 mt-5" id="description-container">
        <h3>Sobre o Evento:</h3>
        <p class="event-description">{{$evento->description}}</p>
        </div>
    </div>

</div>



 @endsection
