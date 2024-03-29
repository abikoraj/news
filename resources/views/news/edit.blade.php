@extends('layout.app')
@section('title')
    News
@endsection
@section('js')
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
@endsection
@section('content')
    <div class="card">
        <div class="header">
            <h4 class="title">Edit News</h4>
        </div>
        <div class="content">

            <form method="post" action="{{ route('news.update', ['news' => $news->id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" required
                        value="{{ $news->title }}">
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label>Category</label>
                        <select name="category_id" class="form-control">
                            @foreach (App\Models\Category::all() as $cat)

                                <option value="{{ $cat->id }}"
                                    {{ $cat->id == $news->category_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                            @endforeach
                        </select>
                        {{-- <input type="text" class="form-control" name="name" placeholder="Title" required> --}}
                    </div>
                    <div class="form-group col-md-3">
                        <label>Featured Image</label>
                        <input type="file" class="form-control" name="image" placeholder="Featured Image"
                            data-default-file="{{ $news->image }}" value="{{ $news->image }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Featured Youtube Link</label>
                        <input type="url" class="form-control" name="link" placeholder="Featured Youtube Link"
                            value="{{ $news->link }}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea id="mytextarea" name="content" rows="20"
                        placeholder="Your News Here">{{ $news->content }}</textarea>
                </div>
                <div class="footer text-right">
                    <button type="submit" class="btn btn-info btn-fill">Update News</button>
                </div>

            </form>

        </div>
    </div>
@endsection
