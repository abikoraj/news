@extends('layout.app')
@section('title')
    News List
@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
@endsection
@section('content')
    <div class="text-right">
        <a href="{{ route('rasifal.add') }}" class="btn btn-info btn-fill">Add New</a>

    </div>
    <br>
    <div class="card">
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped" id="myTable">
                <thead>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($rashifal as $item)
                        <tr>
                            <td>
                                {{ $item->id }}
                            </td>

                            <td>
                                {{ $item->date }}
                            </td>

                            <td>
                                <a href="{{ route('rasifal.update', ['rashifal' => $item->id]) }}"
                                    class="btn btn-success btn-fill"> Edit </a>
                                {{-- <a href="{{ route('news.delete', ['news' => $item->id]) }}"
                                    class="btn btn-danger btn-fill"> Delete </a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
