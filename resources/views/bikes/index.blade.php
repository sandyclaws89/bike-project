@extends('template.base')
@section('DocumentTitle', 'Bike\'s list')
@section('pageMain')
<section class="index text-center">
    <h1 class="my-5 fw-bold">Lista completa</h1>

    <div class="row g-4 justify-content-center">
        @foreach ($bikes as $bike)
            <div class="col-3 text-center">
                <a href=" {{ route('bikes.show', $bike->id) }}" class="text-decoration-none dark">
                    <div class="card h-100 ">
                        <h2 class="card-title">{{$bike->bike_name}}</h2>
                        <img src="{{ $bike->image }}" alt="{{ $bike->bike_name }}" class="h-100">
                        <div class="card-body">
                            <h3 class="card-text"> {{$bike->price}} €</h3>
                            <h4 class="card-text"> {{$bike->type}} </h4>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
    </div>

    {{$bikes->links()}}
    </div>

</section>
@endsection

