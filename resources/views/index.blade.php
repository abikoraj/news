@extends('layout.front.app')
@section('content')
    <!-- Top News Start-->
    <div class="top-news">
        <div class="container-fluid">
            <div class="row">
                @php
                    $first = App\Models\News::take(1)->first();
                @endphp
                <div class="col-md-6 tn-left">
                    <div class="tn-img">
                        <img src="{{ asset('storage/' . $first->image) }}" />
                        <div class="tn-content">
                            <div class="tn-content-inner">
                                <a class="tn-date" href="{{ route('news.view', ['news' => $first->id]) }}"><i
                                        class="far fa-clock"></i>{{ $first->updated_at->diffForHumans() }}</a>
                                <a class="tn-title"
                                    href="{{ route('news.view', ['news' => $first->id]) }}">{{ $first->title }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 tn-right">
                    <div class="row">
                        @foreach (App\Models\News::take(4)->latest()->get()
        as $top)
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="{{ asset('storage/' . $top->image) }}" />
                                    <div class="tn-content">
                                        <div class="tn-content-inner">
                                            <a class="tn-date"
                                                href="{{ route('news.view', ['news' => $top->id]) }}"><i
                                                    class="far fa-clock"></i>{{ $top->updated_at->diffForHumans() }}</a>
                                            <a class="tn-title"
                                                href="{{ route('news.view', ['news' => $top->id]) }}">{{ $top->title }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top News End-->
    <!-- Main News Start-->
    @php
    $lat_first = App\Models\News::take(1)
        ->latest()
        ->first();
    $temp = $lat_first->id;
    @endphp
    <div class="main-news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><i class="fas fa-align-justify"></i>Latest News</h2>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mn-img">
                                        <img src="{{ asset('storage/' . $lat_first->image) }}" />
                                    </div>
                                    <div class="mn-content">
                                        <a class="mn-title"
                                            href="{{ route('news.view', ['news' => $lat_first->id]) }}">{{ $lat_first->title }}</a>
                                        <a class="mn-date"
                                            href="{{ route('news.view', ['news' => $lat_first->id]) }}"><i
                                                class="far fa-clock"></i>{{ $lat_first->updated_at->diffForHumans() }}</a>
                                        <p>
                                            @php
                                                $ct = Str::limit($lat_first->content, 200, '...');
                                            @endphp
                                            {!! $ct !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    @foreach (App\Models\News::take(5)->latest()->where('id', '!=', $temp)->get()
        as $item)
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{ asset('storage/' . $item->image) }}" />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title"
                                                    href="{{ route('news.view', ['news' => $item->id]) }}">{{ $item->title }}</a>
                                                <a class="mn-date" href=""><i
                                                        class="far fa-clock"></i>{{ $item->updated_at->diffForHumans() }}</a>
                                            </div>
                                        </div>

                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            @php
                                $popu = App\Models\News::take(1)
                                    ->inRandomOrder()
                                    ->first();
                                $popu_id = $popu->id;
                            @endphp
                            <h2><i class="fas fa-align-justify"></i>Popular News</h2>
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="mn-img">
                                        <img src="{{ asset('storage/' . $popu->image) }}" />
                                    </div>
                                    <div class="mn-content">
                                        <a class="mn-title"
                                            href="{{ route('news.view', ['news' => $popu->id]) }}">{{ $popu->title }}</a>
                                        <a class="mn-date" href=""><i
                                                class="far fa-clock"></i>{{ $popu->updated_at->diffForHumans() }}</a>
                                        <p>
                                            @php
                                                $pn = Str::limit($popu->content, 200, '...');
                                            @endphp
                                            {!! $pn !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    @foreach (App\Models\News::take(5)->inRandomOrder()->where('id', '!=', $popu_id)->get()
        as $item)
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{ asset('storage/' . $item->image) }}" />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title"
                                                    href="{{ route('news.view', ['news' => $item->id]) }}">{{ $item->title }}</a>
                                                <a class="mn-date" href=""><i
                                                        class="far fa-clock"></i>{{ $item->updated_at->diffForHumans() }}</a>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
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
