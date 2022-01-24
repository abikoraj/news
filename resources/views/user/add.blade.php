@extends('layout.app')
@section('title')
    Users
@endsection
@section('content')
    <div class="card">
        <div class="header">
            <h4 class="title">Add User</h4>
        </div>
        <div class="content">

            <form method="post" action="{{ route('user.add') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="form-group col-md-3">
                        <label>Username</label>
                        <input type="text" class="form-control" name="name" placeholder="Username" required>
                    </div>

                    <div class="form-group col-md-3">
                        <label>Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group col-md-3">
                        <button type="submit" class="btn btn-info btn-fill">Save</button>
                    </div>

                </div>

            </form>

        </div>
    </div>
    <div class="card">
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($user as $item)
                        <tr>
                            <td>
                                {{ $item->id }}
                            </td>
                            <td>
                                {{ $item->name }}
                            </td>
                            <td>
                                {{ $item->email }}
                            </td>
                            </td>
                            <td>
                                {{-- <a href="{{ route('news.update', ['news' => $item->id]) }}"
                                    class="btn btn-success btn-fill"> Edit
                                </a> --}}
                                <a href="{{ route('user.delete', ['user' => $item->id]) }}"
                                    class="btn btn-danger btn-fill"> Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
