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
                    <th>Type</th>
                    <th>Category</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($news as $item)
                        <tr>
                            <td>
                                {{ $item->id }}
                            </td>
                            <td>
                                <img src="{{ $item->type == 1 ? asset($item->image) : $item->image }}" width="100px" />
                            </td>
                            <td>
                                {{ $item->title }}
                            </td>
                            <td>
                                {{ $item->type }}
                            </td>
                            <td>
                                {{ $item->category_id }}
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
