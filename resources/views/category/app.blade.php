@extends('layout.app')
@section('title')
    Category
@endsection
@section('content')
    <div class="card">
        <div class="header">
            <h4 class="title">Add Category</h4>
        </div>
        <div class="content">
            <form action="{{ route('catecory.submit') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Category Name">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-fill"> Save </button>

                        </div>
                    </div>
                </div>


                <div class="clearfix"></div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                        <tr>
                            <form action="{{ route('catecory.update', ['category' => $item->id]) }}" method="POST">
                                @csrf
                                <td>{{ $item->id }}</td>
                                <td>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Category Name" value="{{ $item->name }}">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-fill"> Update </button>
                                        <a href="{{ route('catecory.delete', ['category' => $item->id]) }}"
                                            class="btn btn-danger btn-fill"> Delete </a>
                                    </div>
                                </td>
                                <td>

                                </td>

                                <div class="clearfix"></div>

                            </form>

                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
