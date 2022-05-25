@extends('template.base')
@section('DocumentTitle', 'Add new bike')
@section('pageMain')

<form method="post" action="{{ route('bikes.store') }}" class="row g-3 container d-flex justify-content-center mx-auto my-5">
    @csrf
    <div class="col-md-6">
      <label for="post_title" class="form-label">Post title</label>
      <input type="text" class="form-control" id="post_title" name="post_title">
    </div>
    <div class="col-md-6">
        <label for="bike_name" class="form-label">Bike name</label>
        <input type="text" class="form-control" id="bike_name" name="bike_name">
    </div>
    <div class="col-md-6">
        <label for="brand" class="form-label">Brand</label>
        <input type="text" class="form-control" id="brand" name="brand">
    </div>
    <div class="col-md-6">
        <label for="model" class="form-label">Model</label>
        <input type="text" class="form-control" id="model" name="model">
    </div>
    <div class="col-md-6">
        <label for="price" class="form-label">Price</label>
        <input type="number" min="0" max="1000000" step=".1" class="form-control" id="price" name="price">
    </div>
    <div class="col-md-6">
        <label for="year" class="form-label">Year</label>
        <input type="text" min="1900" max="2100" step="1" class="form-control" id="year" name="year">
    </div>
    <div class="col-md-6">
        <label for="type" class="form-label">Type</label>
        <select id="type" class="form-select" name="type">
            <option selected>Choose...</option>
            <option value="race">RACE</option>
            <option value="mtb">MTB</option>
            <option value="city">CITY</option>
      </select>
    </div>
    <div class="col-md-6">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image">
      </div>
    <div class="col-12">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" rows="6" name="description"></textarea>
    </div>


    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="available" name="available" checked value="1">
        <label class="form-check-label" for="available">
          Available
        </label>
      </div>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </form>
  @endsection
