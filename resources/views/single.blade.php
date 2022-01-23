@extends('layout.front.app')
@section('content')
    <!-- Single News Start-->
    <div class="single-news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="sn-img">
                        <img src="{{ asset('storage/' . $news->image) }}" />
                    </div>
                    <div class="sn-content">
                        <a class="sn-title" href="">Lorem ipsum dolor sit amet</a>
                        <a class="sn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                        {!! $news->content !!}
                    </div>
                </div>

                @include('layout.front.cat')
            </div>
        </div>
    </div>
    <!-- Single News End-->
@endsection