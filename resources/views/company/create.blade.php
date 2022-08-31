@extends('layouts.app')
@section('content')
<div class="container text-center headerss">
  <h1>Add Company</h1>
</div>
<div class="container ">
    <form action="/company" method="POST">
        @csrf
        <div class="form-group ">
            <label for="exampleFormControlInput1">name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="name">
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
            <label for="website">website</label>
            <input type="text" class="form-control" name="website" id="website" aria-describedby="emailHelp" placeholder="https://acmecorp.com">
            @error('name')
                <p class="text-redtext-xs mt-1">{{$message}}</p>
            @enderror
          </div>
          <div class="form-group ">
            <label for="location">location</label>
            <input type="text" class="form-control" name="location" id="location" aria-describedby="emailHelp" placeholder="California C.A">
            @error('name')
                <p class="text-red text-xs mt-1">{{$message}}</p>
            @enderror
          </div>

          <div class="mb-3 form-group">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">Enter message here...</textarea>
          </div>
          <div class="form-group d-flex justify-content-end">
            <button class="btn btn-primary">submit</button>
          </div>
    </form>
</div>


@endsection