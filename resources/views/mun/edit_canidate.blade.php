@extends('layout.app')
@section('title')
    Edit Candidate
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/dropify/css/dropify.min.css') }}">
@endsection

@section('content')
    <div class="card">
        <div class="header">
            <h4 class="title">Edit Candidate</h4>
        </div>
        <div class="content">

            <form method="post" action="{{ route('mun.candi.update', ['position' => $position->id]) }}"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="min_id" value="{{ $position->min_id }}">
                <input type="hidden" name="ward_id" value="{{ $position->ward_id }}">
                <input type="hidden" name="identity" value="{{ $position->identity }}">

                <div class="row">

                    <div class="col-md-2">
                        <label>Image</label>
                        <input type="file" class="dropify" id="dropify-event" name="image"
                            value="{{ $position->image }}">
                    </div>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($files as $file)
                        <input type="radio" name="image1" id="image-{{ $i }}" value="{{ $file->image }}"
                            {{ $file->image == $position->image ? 'checked' : '' }}>
                        <br>
                        <div class="col-md-2">
                            <label for="image-{{ $i }}" style="width: 100%">
                                <img style="width: 100%" src="{{ asset($file->image) }}" alt="">
                            </label>
                        </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $position->name }}" required>
                    </div>
                    <div class="col-md-4">
                        <label>Party</label>
                        <input type="text" class="form-control" name="party" value="{{ $position->party }}" required>
                    </div>
                    <div class="col-md-4">
                        <label>Votes</label>
                        <input type="number" class="form-control" name="votes" value="{{ $position->votes }}" required>
                    </div>
                </div>
                <div class="footer text-right">
                    <button type="submit" class="btn btn-info btn-fill">Update Candidate</button>
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
