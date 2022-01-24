@extends('layout.front.app')
@section('content')
    @if ($news->count() > 0)

        <!-- Top News Start-->
        <div class="top-news">
            <div class="container-fluid">
                <div class="row">
                    @php
                        $first = $news[0];
                    @endphp
                    @if ($first != null)

                        <div class="col-md-6 tn-left">
                            <div class="tn-img">
                                <img src="{{ $first->type == 1 ? asset($first->image) : $first->image }}" />
                                <div class="tn-content">
                                    <div class="tn-content-inner">
                                        <a class="tn-date"
                                            href="{{ route('news.view', ['news' => $first->id]) }}"><i
                                                class="far fa-clock"></i>{{ $first->updated_at->diffForHumans() }}</a>
                                        <a class="tn-title"
                                            href="{{ route('news.view', ['news' => $first->id]) }}">{{ $first->title }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="col-md-6 tn-right">
                        <div class="row">
                            @foreach ($news->skip(1)->take(4) as $top)
                                <div class="col-md-6">
                                    <div class="tn-img">
                                        <img src="{{ $first->type == 1 ? asset($first->image) : $first->image }}" />
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
    @endif
    <!-- Main News Start-->


    <div class="main-news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">

                        <div class="col-md-12">

                            <h2><i class="fas fa-align-justify"></i>Popular News</h2>
                            @if ($popular->count() > 0)

                                @php
                                    $popu = $popular[0];
                                @endphp
                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="mn-img">
                                            <img src="{{ $popu->type == 1 ? asset($popu->image) : $popu->image }}" />
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
                                        @foreach ($popular->skip(1)->take(4) as $item)
                                            <div class="mn-list">
                                                <div class="mn-img">
                                                    <img
                                                        src="{{ $item->type == 1 ? asset($item->image) : $item->image }}" />
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
                            @endif
                        </div>
                        <div class="col-md-12 text-center">
                            <hr>
                            {{-- <h2><i class="fas fa-align-justify"></i>Latest News</h2> --}}
                            <iframe src="https://www.hamropatro.com/widgets/calender-medium.php" frameborder="0"
                                scrolling="no" marginwidth="0" marginheight="0"
                                style="border:none; overflow:hidden; width:100%; height:385px;" allowtransparency="true">
                            </iframe>
                        </div>
                    </div>
                </div>

                @include('layout.front.cat')
            </div>
        </div>
    </div>
    <!-- Main News End-->
@endsection
