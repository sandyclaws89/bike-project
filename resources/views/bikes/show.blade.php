@extends('template.base')
@section('DocumentTitle', $DocumentTitle)
@section('pageMain')
<div class="container-md my-5">
    <div class="row">
        <div class="col">
            <div class="card text-center">
                <img src="{{ $bike->image }}" class="img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $bike->bike_name }}</h5>
                  <p class="card-text">{{ $bike->description }}</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
    </div>
</div>

  @endsection
