@extends('layout.app')
@section('title')
    Manage Municipality
@endsection
@section('css')
    <style>
        .card{
            padding:1rem;
            margin-bottom:2.3rem;
        }
        label{
            font-weight: 600;
        }
        .btn-holder{
            display: flex;
            align-items: flex-end;
            margin-left: 1rem;
        }
        .btn-holder>button{
            width:100%;
        }
    </style>
@endsection

@section('content')
    <div class="card shadow ">
        <div class="card-body ">
            <form action="{{route('mun.add')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="col-md-3 btn-holder">
                        <button class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card shadow">
       <div class="row">
           @foreach ($muns as $mun)
            <div class="col-md-4">
                <div class="card shadow ">
                    <div class="card-body ">
                        <form action="{{route('mun.update',['id'=>$mun->id])}}" method="post">
                            @csrf
                            <div class="">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{$mun->name}}">
                            </div>
                            <hr>
                            <div style="display: flex;justify-content: space-between;">
                                <button class="btn btn-primary">update</button>
                                <a  href="{{route('mun.del',['id'=>$mun->id])}}" class="btn btn-danger">Delete</a>
                                <button class="btn btn-success">Wards</button>
                                <button class="btn btn-success">Mayor</button>
                                <button class="btn btn-success">Vice Mayor</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

           @endforeach
        </div>
    </div>

@endsection
@section('js')

@endsection
