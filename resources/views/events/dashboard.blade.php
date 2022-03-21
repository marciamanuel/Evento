@extends('layout.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
<h1>Meus Eventos</h1>

</div>
<div class="col-md-10 offset-md-1 dashboard-evento-container">
    @if(count($evento)>0)
    <table class="table">
        <thead>
            <tr>
                <th class="col">#</th>
                <th class="col">Nome</th>
                <th class="col">Participantes</th>
                <th class="col">Ações</th>
            </tr>
        </thead>

        <tbody>


            @foreach ($evento as $even)
                <tr>
                    <td scropt="row">
        {{$loop->index+1 }}
                    </td>
                    <td>
                        <a href="/events/{{$even->id }}">{{$even->title }}</a>
                    </td>
                    <td>0</td>
                    <td> <a href="{{route( 'edit',$even->id) }}" class="btn btn-info">Editar</a>


                        <a href="{{route( 'index.eliminar',$even->id) }}" class="btn btn-danger">Eliminar</a>
                </tr>

            @endforeach
        </tbody>
    </table>

       @else
       <p>Você ainda não tem eventos, <a href="/events/create">Criar evento</a> </p>
    @endif
</div>
@endsection
