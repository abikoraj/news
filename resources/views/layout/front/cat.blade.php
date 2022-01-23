<div class="col-md-4">
    <div class="sidebar">
        <div class="sidebar-widget">
            <h2><i class="fas fa-align-justify"></i>Category</h2>
            <div class="category">
                <ul class="fa-ul">
                    @foreach (App\Models\Category::take(7)->get() as $category)

                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a
                                href="">{{ $category->name }}</a></li>
                    @endforeach

                </ul>
            </div>
        </div>

        <div class="sidebar-widget">
            <h2><i class="fas fa-align-justify"></i>Tags</h2>
            <div class="tags">
                <a href="">National</a>
                <a href="">International</a>
                <a href="">Economics</a>
                <a href="">Politics</a>
                <a href="">Lifestyle</a>
                <a href="">Technology</a>
                <a href="">Trades</a>
                <a href="">National</a>
                <a href="">International</a>
                <a href="">Economics</a>
                <a href="">Politics</a>
                <a href="">Lifestyle</a>
                <a href="">Technology</a>
                <a href="">Trades</a>
            </div>
        </div>

        <div class="sidebar-widget">
            <h2><i class="fas fa-align-justify"></i>Ads 1 column</h2>
            <div class="image">
                <a href=""><img src="{{ asset('assets/front/img/adds-1.jpg') }}" alt="Image"></a>
            </div>
        </div>

        <div class="sidebar-widget">
            <h2><i class="fas fa-align-justify"></i>Ads 2 column</h2>
            <div class="image">
                <div class="row">
                    <div class="col-sm-6">
                        <a href=""><img src="{{ asset('assets/front/img/adds-2.jpg') }}" alt="Image"></a>
                    </div>
                    <div class="col-sm-6">
                        <a href=""><img src="{{ asset('assets/front/img/adds-2.jpg') }}" alt="Image"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
