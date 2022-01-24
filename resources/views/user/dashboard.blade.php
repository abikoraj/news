@extends('layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center">

                <div class="header">
                    <h3 class="title">Users</h3>

                </div>
                <div class="content">
                    <h2>{{ $user_count }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">

                <div class="header">
                    <h3 class="title">Categories</h3>

                </div>
                <div class="content">
                    <h2>{{ $category_count }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">

                <div class="header">
                    <h3 class="title">News</h3>

                </div>
                <div class="content">
                    <h2>{{ $news_count }}</h2>
                </div>
            </div>
        </div>
    @endsection
