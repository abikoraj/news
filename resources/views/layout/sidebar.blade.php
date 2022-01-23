<div class="sidebar" data-color="blue" data-image="{{ asset('assets/img/sidebar-5.jpg') }}">

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text">
                News Portal
            </a>
        </div>

        <ul class="nav">
            <li>
                <a href="#">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="active">
                <a href="{{ route('catecory.index') }}">
                    <i class="pe-7s-note2"></i>
                    <p>Category</p>
                </a>
            </li>
            <li>
                <a href="{{ route('news.add') }}">
                    <i class="pe-7s-news-paper"></i>
                    <p>News</p>
                </a>
            </li>
        </ul>
    </div>
</div>
