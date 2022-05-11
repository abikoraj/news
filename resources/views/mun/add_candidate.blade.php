@extends('layout.app')
@section('title')
    Add Candidate
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/dropify/css/dropify.min.css') }}">
@endsection

@section('content')
    <div class="card">
        <div class="header">
            <h4 class="title">Add Candidate</h4>
        </div>
        <div class="content">

            <form method="post" action="{{ route('mun.candi.submit') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="min_id" value="{{ $mun }}">
                <input type="hidden" name="ward_id" value="{{ $ward }}">
                <input type="hidden" name="identity" value="{{ $position }}">

                <div class="row">

                    <div class="col-md-4">
                        <label>Image</label>
                        <input type="file" class="dropify" id="dropify-event" name="image">
                    </div>
                    <div class="col-md-4">
                        <label>Image</label>
                        <select name="image" id="">
                            <option value="">Select Image</option>
                            @foreach (\App\Models\position::all() as $item)
                                <option value="{{ $item->image }}"><img src="{{ asset($item->image) }}" width="100"
                                        alt=""></option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="col-md-6">
                        <label>Party</label>
                        <input type="text" class="form-control" name="party" required>
                    </div>
                    <div class="col-md-6">
                        <label>Votes</label>
                        <input type="number" class="form-control" name="votes" required>
                    </div>
                </div>
                <div class="footer text-right">
                    <button type="submit" class="btn btn-info btn-fill">Publish Candidate</button>
                </div>

            </form>

        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/dropify/js/dropify.min.js') }}"></script>
    <script>
        $('.dropify').dropify();
    </script>
@endsection
