@extends('layout.app')
@section('title')
    Ward Adhakshya List
@endsection

@section('content')
    <div class="text-right">
        {{-- <a href="{{ route('mun.candi.add', ['mun' => $mun->id, 'ward' => 0, 'position' => 3]) }}"
            class="btn btn-success">Add
            New</a> --}}
    </div>
    <div class="card">
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped" id="myTable">
                <thead>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Party</th>
                    <th>Votes</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($head as $item)
                        <tr>
                            <td>
                                {{ $item->id }}
                            </td>
                            <td>
                                <img src="{{ asset($item->image) }}" width="100px" />
                            </td>
                            <td>
                                {{ $item->name }}
                            </td>
                            <td>
                                {{ $item->party }}
                            </td>
                            <td>
                                {{ $item->votes }}
                            </td>
                            <td>
                                <a href="{{ route('mun.candi.update', ['position' => $item->id]) }}"
                                    class="btn btn-primary btn-fill" target="_blank"> Update </a>
                                <a href="{{ route('mun.candi.delete', ['position' => $item->id]) }}"
                                    class="btn btn-danger btn-fill"> Delete </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
