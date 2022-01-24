@extends('layout.front.app')
@section('content')

    <!-- Main News Start-->
    <br>
    <div class="main-news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><i class="fas fa-align-justify"></i>{{ $category->name }}</h2>
                            <div class="row">
                                @foreach ($category->getNews->all() as $item)
                                    <div class="col-md-12 row align-content-center">
                                        <div class="col-md-4">

                                            <div class="mn-img">
                                                <img src="{{ asset('storage/' . $item->image) }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-8">

                                            <div class="mn-content">
                                                <a class="mn-title" href="">{{ $item->title }}</a>
                                                <a class="mn-date" href=""><i
                                                        class="far fa-clock"></i>{{ $item->updated_at->diffForHumans() }}</a>
                                                <p>
                                                    @php
                                                        $pn = Str::limit($item->content, 150, '...');
                                                    @endphp
                                                    {!! $pn !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

                @include('layout.front.cat')
            </div>
        </div>
    </div>
    <!-- Main News End-->

@endsection
