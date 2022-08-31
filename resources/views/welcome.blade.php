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
            <h1 class="textChange title-header ">Top performing companies</h1>
          
            <hr>
           
            <div class="d-flex px-5 ">
                <div class="tabless ">
                    <div class="mb-10 d-flex justify-content-end">
                        <a href="/company/create"><button type="button" class="btn btn-primary mr-10" >company <i class="fa-solid fa-plus"></i></button></a>
                        
                    </div>
                    {{-- modal --}}
                    
                    <table class="table company-table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Company</th>
                            <th scope="col">Description</th>
                            <th scope="col">Location</th>
                            <th scope="col">options</th>
                          </tr>
                        </thead>
                        <tbody >
                        @foreach($companies as $company)
                          <tr>
                            <th scope="row">{{$company -> id}}</th>
                            <td><strong><a href="/company/{{$company->id}}" class="company-name">{{$company -> name}}</a></strong></td>
                            <td>{{$company->description}}</td>
                            <td>{{$company->location}}</td>
                            <td >
                              <div class="d-flex ">
                                <div class="options">
                                  <a href="/employees/{{$company->id}}/create"><button class="btn btn-success"><i class="fa-solid fa-user-plus"></i></button></a>
                                 
                                </div>
                                <div class="options">
                                  <a href="/company/{{$company->id}}/update"><button class="btn btn-primary"><i class="fa-solid fa-pen"></i></button></a>
                                </div>
                                <div class="options">
                                  <form action="/company/{{$company->id}}" method="POST" style="margin:0px">
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
                      <div class="mt-6 p-4 d-flex justify-content-end"> {{$companies->links()}}</div>
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