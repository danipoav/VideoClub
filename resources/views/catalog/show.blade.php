@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-4">
            <img src={{ $peli['poster'] }} style="height: 350px">
        </div>
        <div class="col-sm-8">
            <h3>{{ $peli['titol'] }}</h3>
            <h5>Any: {{ $peli['any'] }}</h5>
            <h5>Director: {{ $peli['director'] }}</h5>
            <p><b>Resum: </b>{{ $peli['resum'] }}</p>

            @if ($peli['llogat'])
                <p><b>Estat: </b>Pelicula disponible</p>
                <a href="{{ url('/catalog') }}"><button class="btn btn-primary">Llogar pelicula</button></a>
            @else
                <p><b>Estat: </b>Pelicula actualment llogada</p>
                <a href="{{ url('/catalog') }}"><button class="btn btn-danger">Retornar pelicula</button></a>
            @endif

            
            <a href="{{ url('/catalog/edit/'.$id) }}"><button class="btn btn-warning">Editar pelicula</button></a>
            <a href="{{ url('/catalog') }}"><button class="btn btn-light">Tornar al llistat</button></a>

        </div>
    </div>
@endsection
