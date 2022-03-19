@extends('layout.main')

@section('title', 'evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-m-3 ">
<h1>Criar um evento</h1>
<form action="/events" method="POST" enctype="multipart/Form-data">
    @csrf
    <div class="form-group">
    <label for="image">Evento:</label>
    <input type="file" id="image" name="image" class="form-control-file">
</div>
<div class="form-group">
    <label for="title">Evento:</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento...">
</div>

<div class="form-group">
    <label for="date">Data do evento:</label>
    <input type="date" class="form-control" id="date" name="date" >
</div>

<div class="form-group">
    <label for="title">Cidade:</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento...">
</div>

<div class="form-group">
    <label for="title">O evento é privado?</label>
    <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
    </select>
</div>

<div class="form-group">
    <label for="title">Descrição:</label>
   <textarea name="description" id="description"  class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
</div>
<div class="form-group">
    <label for="title">Adicione itens de Infraestrutura:</label>
   <div class="fomr-group">
       <input type="checkbox" name="itens[]" id="itens" value="Cadeiras">Cadeiras
   </div>
   <div class="fomr-group">
    <input type="checkbox" name="itens[]" id="itens" value="Palco">Palco
</div>
<div class="fomr-group">
    <input type="checkbox" name="itens[]" id="itens" value="Cerveja grátis">Cerveja grátis
</div>
<div class="fomr-group">
    <input type="checkbox" name="itens[]" id="itens" value="Open food">Open food
</div>
<div class="fomr-group">
    <input type="checkbox" name="itens[]" id="itens" value="Brindes">Brindes
</div>
</div>
<input type="submit" class="btn btn-primary" value="Criar Evento">
</form>
</div>

@endsection
