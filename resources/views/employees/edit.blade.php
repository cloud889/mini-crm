@extends('layouts.app')
@section('content')
<div class="container text-center headerss">
  <h1>Edit Employee</h1>
</div>
<div class="container ">
    <form action="/employees/{{$employee->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group ">
            <label for="firstName">first Name</label>
            <input type="text" class="form-control" name="firstName" id="firstName" aria-describedby="emailHelp" placeholder="name" value="{{$employee->firstName}}">
            @error('name')
                <p class="text-red text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
          <div class="form-group ">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" name="lastName" id="lastName" aria-describedby="emailHelp" placeholder="email" value="{{$employee->lastName}}"> 
            @error('name')
                <p class="text-red text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
          <div class="form-group ">
            <label for="email">email</label>
            <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="https://acmecorp.com" value="{{$employee->email}}">
            @error('name')
                <p class="text-redtext-xs mt-1">{{$message}}</p>
            @enderror
          </div>
          <div class="form-group ">
            <label for="phone">Phone number</label>
            <input type="number" class="form-control" name="phone" id="phone" aria-describedby="emailHelp" placeholder="California C.A" value="{{$employee->phone}}">
            @error('name')
                <p class="text-red text-xs mt-1">{{$message}}</p>
            @enderror
          </div>

          <div class="form-group d-flex justify-content-end">
            <button class="btn btn-primary" style="margin-right:20px">submit</button>
            <a href="/" class="" style="color:#333;text-decoration:none;margin-top:5px">return</a>
          </div>
    </form>
</div>


@endsection