@extends('layout')

@section('content')
     {{-- form --}}
     <div class="container container-fix">
      <form method="POST" action="/jerseys">
        
        {{ csrf_field() }}
        @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <ul>
             @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
             @endforeach
            </ul>
          </div>
          @endif
        <img src="img/jersey.jpg" class="img-fluid jersey" alt="jersey">
        <div class="form-group">
            <label for="inputCity" class="font-weight-bold mt-3">1. Enter Name that should appear at the back of jersey</label>
            <input type="text" class="form-control" id="inputCity" name="name">
          </div>
          <div class="form-group">
            <label for="inputNumber" class="font-weight-bold">2. Jersey number that displayed at the back</label>
            <input type="number" class="form-control" id="inputNumber" name="number">
          </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1" class="font-weight-bold">
              3. Select dress size
            </label>
          <select class="form-control" id="exampleFormControlSelect1" name="size">
            <option value="XS" class="font-weight-bold">XS</option>
            <option value="S" class="font-weight-bold">S</option>
            <option value="M" class="font-weight-bold">M</option>
            <option value="L" class="font-weight-bold">L</option>
            <option value="XL" class="font-weight-bold">XL</option>
            <option value="XXL" class="font-weight-bold">XXL</option>
          </select>
        </div>
        <div class="custom-control custom-radio">
          <input type="radio" id="customRadio1" name="amount" class="custom-control-input" value="Paid">
          <label class="custom-control-label" for="customRadio1">Paid</label>
        </div>
        <div class="custom-control custom-radio">
          <input type="radio" id="customRadio2" name="amount" class="custom-control-input" value="Not Paid">
          <label class="custom-control-label" for="customRadio2">Not Paid</label>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
       
      </form>
      <div class="row mt-4">
        <div class="col">
          <p class="text-center">&copy; Copyright Incognito</p>
          <p class="text-center">Designed and built with all the love &hearts; <a href="https://www.instagram.com/harshith_va/">Harshith VA</a></p>
        </div>
      </div>
    </div>
@endsection