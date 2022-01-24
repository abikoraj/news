@extends('layout.front.app')
@section('content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Contact</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Contact Start -->
    <div class="contact">
        <div class="container-fluid">
            <div class="row align-items-center m-0">
                <div class="col-md-4">
                    <div class="form">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name" />
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" placeholder="Your Email" />
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject" />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                            </div>
                            <div><button class="btn" type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar-widget">
                        {{-- <h2><i class="fas fa-align-justify"></i>Ads 1 column</h2> --}}
                        <div class="image">
                            <a href=""><img class="w-100" src="{{ asset('assets/front/img/ads.png') }}"
                                    alt="Image"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar-widget">
                        {{-- <h2><i class="fas fa-align-justify"></i>Ads 1 column</h2> --}}
                        <div class="image">
                            <a href=""><img class="w-100" src="{{ asset('assets/front/img/ads.png') }}"
                                    alt="Image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
