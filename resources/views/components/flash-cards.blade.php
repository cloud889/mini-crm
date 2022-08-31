@if(session()->has('message'))
<div class="alert alert-primary position-absolute top-10 start-50 translate-middle z-index" role="alert">
    {{session('message')}}
  </div>
@endif