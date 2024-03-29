@extends('layout.front.app')
@section('meta')
    <meta property="og:url" content="{{ route('news.view', ['news' => $news->id]) }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $news->title }}" />
    <meta property="og:description" content="{{ strip_tags($news->content) }}" />
    <meta property="og:image" content="{{ $news->type == 1 ? asset($news->image) : $news->image }}" />
    <meta content="{{ strip_tags($news->content) }}" name="description">

@endsection
@section('css')
    <style>
        .iframe {
            width: 100%;
            height: 400px;
        }

        .st-close,
        .st-disclaimer,
        .st-logo {
            display: none;
        }

        @media (max-width:425px) {
            .iframe {
                height: 200px;
            }
        }

    </style>
@endsection
@section('content')
    <!-- Single News Start-->
    <div class="single-news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="sn-content">
                        <a class="sn-title" href="">{{ $news->title }}</a>
                        <a class="sn-date" href=""><i
                                class="far fa-clock"></i>{{ $news->updated_at->diffForHumans() }}</a>
                    </div>
                    @if ($news->type == 1)
                        <div class="sn-img">
                            <img src=" {{ asset($news->image) }}" alt="" class="w-100">
                        </div>
                    @else
                        <iframe class="iframe" src="https://www.youtube.com/embed/{{ $query['v'] }}"
                            frameborder="0"></iframe>
                    @endif

                    <div class="sn-content">

                        {!! $news->content !!}
                    </div>
                </div>

                @include('layout.front.cat')
            </div>
        </div>
    </div>
    <div class="sharethis-sticky-share-buttons"></div>
    <!-- Single News End-->
    <div id="fb-root"></div>

    <script>
        document.write('<div class="fb-comments" data-href="' + window.location.href +
            '" data-width="" data-numposts="5"></div>');
    </script>
@endsection
@section('js')
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0&appId=2721127184868304&autoLogAppEvents=1"
        nonce="rKl0XHfT">
    </script>
    <script type='text/javascript'
        src='https://platform-api.sharethis.com/js/sharethis.js#property=61ee95c8e14521001ac13910&product=sticky-share-buttons'
        async='async'>
    </script>
@endsection
