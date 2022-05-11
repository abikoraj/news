@extends('layout.app')
@section('title')
    {{ $mun->name }}
@endsection
@section('css')
    <style>
        .card {
            padding: 1rem;
            margin-bottom: 2.3rem;
        }

        label {
            font-weight: 600;
        }

        .btn-holder {
            display: flex;
            align-items: flex-end;
            margin-left: 1rem;
        }

        .btn-holder>button {
            width: 100%;
        }

    </style>
@endsection

@section('content')
    <div class="card shadow">
        <div class="row">

            @for ($i = 1; $i <= $mun->ward_nos; $i++)
                <div class="col-md-3">
                    <div class="card shadow ">
                        <div class="card-body ">
                            <div class="">
                                <label for="name">Ward No. {{ $i }}</label>

                            </div>
                            <hr>
                            <div style="display: flex;justify-content: space-between; flex-wrap: wrap;">
                                {{-- <button class="btn btn-success">Ward Adhakshya</button> --}}
                                {{-- <a href="{{ route('mun.del', ['id' => $mun->id]) }}" class="btn btn-danger">Delete</a> --}}
                                {{-- <button class="btn btn-success">Wards</button> <br> --}}

                                <a href="{{ route('mun.candi.head.list', ['mun' => $mun->id, 'ward' => $i]) }}"
                                    class="btn btn-success">List</a>
                                <a href="{{ route('mun.candi.add', ['mun' => $mun->id, 'ward' => $i, 'position' => 3]) }}"
                                    class="btn btn-success">Add New</a>
                            </div>

                        </div>
                    </div>
                </div>
            @endfor

        </div>
    </div>
@endsection
@section('js')
@endsection
