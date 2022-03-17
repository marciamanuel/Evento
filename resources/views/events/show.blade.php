@extends('layout.main')

@section('title', $event->title)

@section('content')
<div class="col-md-10 offset-md-1 mt-5 mb-5">
    <div class="row">
        <div id="image-container" class="col-md-6">
<img src="/img/events/{{$event->image}}"  alt="{{$event->title}}">
        </div>
        <div id="info-container" class="col-md-6">
        <h1 class="text-danger">{{$event->title}}</h1>
        <p class="event-city">{{$event->city}}</p>
        <p class="event-participants">Xparticipantes</p>
        <p class="event-owner">Dono do Evento</p>
        <a href="" class="btn btn-primary" id="event-submit">Confirmar presença</a>
        </div>
        <div class="col-md-12" id="description-container">
        <h3>Sobre o Evento:</h3>
        <p class="event-description">{{$event->description}}</p>
        </div>
    </div>

</div>



 @endsection
