@extends('layout.app')
@section('title')
    News
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/dropify/css/dropify.min.css') }}">
@endsection

@section('content')
    <div class="card">
        <div class="header">
            <h4 class="title">Add News</h4>
        </div>
        <div class="content">

            <form method="post" action="{{ route('news.submit', ['type' => $type]) }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    @if ($type == 1)
                        <div class="form-group col-md-12">
                            <label>Featured Image</label>
                            <input type="file" class="dropify" id="dropify-event" name="image"
                                placeholder="Featured Image">
                        </div>
                    @else
                        <div class="form-group col-md-12">
                            <label>Featured Youtube Link</label>
                            <input type="url" class="form-control" name="link" placeholder="Featured Youtube Link">
                        </div>
                    @endif
                    <div class="form-group col-md-9">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Category</label>
                        <select name="category_id" class="form-control">
                            @foreach (App\Models\Category::all() as $cat)

                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                        {{-- <input type="text" class="form-control" name="name" placeholder="Title" required> --}}
                    </div>

                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea id="mytextarea" name="content" rows="20" placeholder="Your News Here"></textarea>
                </div>
                <div class="footer text-right">
                    <button type="submit" class="btn btn-info btn-fill">Publish News</button>
                </div>

            </form>

        </div>
    </div>
@endsection
@section('js')
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
    <script src="{{ asset('assets/dropify/js/dropify.min.js') }}"></script>
    <script>
        $('.dropify').dropify();
    </script>
@endsection
