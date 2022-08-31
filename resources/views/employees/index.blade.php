@extends('layouts.app')
@section('content')
    {{-- main container --}}
    @guest
    <div class="container text-center mx-10">
      <h1>please login</h1>
    </div>
      

      @else
   
    <div class="d-flex">
        {{-- sidebar --}}
        <div class="sidebar sticky-top">
            <div class="flex">
                    <img src="{{asset('images/logo.png')}}" alt="" id="logo">
            </div>
            <hr>
            <div class="">
                <ul class="">
                    <a href="/"><li class="my-10">dashboard</li></a>
                    <a href="/"><li class="my-10">home</li></a>
                    <a href="/"><li class="my-10">company</li></a>
                    <a href="/employees"><li class="my-10">employee</li></a>
                    <a href="/"><li class="my-10"> <i class="fa-solid fa-arrow-right-from-bracket"></i> exit </li></a>
                    
                </ul>
            </div>

            
        </div>
        {{-- main dashoboard --}}
        <div class="main">
            <h1 class="textChange title-header ">All Company Employees list</h1>
          
            <hr>
           
            <div class="d-flex px-5 ">
                <div class="tabless ">
                    
                    {{-- modal --}}
                    
                    <table class="table company-table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Company</th>
                            <th scope="col">Date-Hired</th>
                          </tr>
                        </thead>
                        <tbody >
                        @foreach($employees as $employee)
                          <tr>
                            <th scope="row">{{$employee->id}}</th>
                            <td><strong>{{ucfirst($employee->firstName)}} {{ucfirst($employee->lastName)}}</strong></td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->phone}}</td>
                            <td>{{$employee->company->name}}</td>
                            <td>{{$employee->created_at->diffForHumans()}}</td>
                            <td >
                              <div class="d-flex">
                                <div class="options">
                                  <a href="/"><button class="btn btn-primary"><i class="fa-solid fa-pen"></i></button></a>
                                </div>
                                <div class="options">
                                  <form action="/" method="POST" style="margin:0px">
                                    @csrf
                                    @method('DELETE')
                                      <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                  </form>
                                </div>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{-- {{$companies->links()}} --}}
                      <div class="mt-6 p-4 d-flex justify-content-end"> {{$employees->links()}}</div>
                </div>
                
                <div></div>
            </div>
        </div>
    </div>
          
    @endguest

@endsection

<script>
    let randNum = 6;

    console.log(randNum)

</script>