@extends('template.base')
@section('DocumentTitle', 'Bike\'s list')
@section('pageMain')
<h1>Lista completa</h1>
    @foreach ($bikes as $bike)
        <div class="card">
            <h2> {{$bike->bike_name}}</h2>
        </div>

    @endforeach
    {{$bikes->links()}}
@endsection
