@extends('layout.app')
@section('title')
    News List
@endsection
@section('content')

    <div class="card">
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($news as $item)
                        <tr>
                            <td>
                                {{ $item->id }}
                            </td>
                            <td>
                                <img src="{{ asset('storage/' . $item->image) }}" alt="" width="100px">
                            </td>
                            <td>
                                {{ $item->title }}
                            </td>
                            <td>
                                <a href="{{ route('news.update', ['news' => $item->id]) }}"
                                    class="btn btn-success btn-fill"> Edit </a>
                                <a href="{{ route('news.delete', ['news' => $item->id]) }}"
                                    class="btn btn-danger btn-fill"> Delete </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
