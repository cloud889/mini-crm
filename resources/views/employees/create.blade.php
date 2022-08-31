@extends('layouts.app')
@section('content')
<div class="container text-center headerss">
  <h1>Add Employee</h1>
</div>
<div class="container ">
    <form action="/employees/{{$company->id}}" method="POST">
        @csrf
        <div class="form-group ">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" name="firstName" id="firstName" aria-describedby="emailHelp" placeholder="John">
            @error('name')
                <p class="text-red text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
        <div class="form-group ">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" name="lastName" id="lastName" aria-describedby="emailHelp" placeholder="Doe">
            @error('name')
                <p class="text-red text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
          <div class="form-group ">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="email">
            @error('name')
                <p class="text-red text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
          <div class="form-group ">
            <label for="phone">Phone Number</label>
            <input type="number" class="form-control" name="phone" id="phone" aria-describedby="emailHelp" placeholder="09399328146">
            @error('name')
                <p class="text-redtext-xs mt-1">{{$message}}</p>
            @enderror
          </div>
         {{-- <div class="form-group">
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
             
         </div> --}}
        
          <div class="form-group d-flex justify-content-end">
            <button class="btn btn-primary">submit</button>
          </div>
    </form>
</div>


@endsection