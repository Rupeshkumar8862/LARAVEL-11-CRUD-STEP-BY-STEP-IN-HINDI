@extends('layouts.home')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">

                {{-- for message --}}
                @if($message = Session::get('success'))
                <div class="alert alert-success alert-block text-center">
                   <strong>{{$message}} </strong> </div>
                   @endif

                <h4>Categorylist
             <a href="{{url('categoryf/create')}}" class="btn btn-success float-right">ADD CATEGORY</a>
            
                </h4>
                <div class="card-body">
                    <table class="table table-stiped table-bordered" border="1" cellpadding="5px" cellspacing="5px" align="center">
                      <thead>
                        <tr class="bg-info text-light">
                            <th>ID</th>
                            <th>NAME</th>
                            <th>GENDER</th>
                            <th>EMAIL</th>
                            <th>MESSAGE</th>
                            <th>OPERATION</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($categories as $value )
                          
                      
                        <tr>
                            <td> {{ $value->id}}</td>
                            <td>{{ $value->name}}</td>
                            <td>{{ $value->email}}</td>
                            <td>{{ $value->gender}}</td>
                            <td>{{ $value->message}}</td>
                            <td> <a href="{{route('categoryf.edit',$value->id)}}" class="btn btn-primary">EDIT</a>
                                 <a href="{{route('categoryf.show',$value->id)}}"class="btn btn-warning"  >SHOW</a>
                            {{-- <a href="{{route('categoryf.destroy',$value->id)}}" class="btn btn-danger">DEL</a> --}}

                            <form action=" {{route('categoryf.destroy',$value->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">DELETE</button>
                               </form>
                        </td>
                        </tr>
                      </tbody>  @endforeach
                    </table>

                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection