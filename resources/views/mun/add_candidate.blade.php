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

                    <div class="col-md-2">
                        <label>Image</label>
                        <input type="file" class="dropify" id="dropify-event" name="image">
                    </div>
                    @php
                        $i=0;
                    @endphp
                    @foreach ($files as $file)
                    <input type="radio" name="image1" id="image-{{$i}}" value="{{$file->image}}">
                        <br>
                        <div class="col-md-2">
                            <label for="image-{{$i}}" style="width: 100%">
                                <img  style="width: 100%" src="{{asset($file->image)}}" alt="">
                            </label>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="col-md-4">
                        <label>Party</label>
                        <input type="text" class="form-control" name="party" required>
                    </div>
                    <div class="col-md-4">
                        <label>Votes</label>
                        <input type="number" class="form-control" name="votes" required value="0">
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
