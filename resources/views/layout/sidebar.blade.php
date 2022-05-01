<div class="sidebar" data-color="blue" data-image="{{ asset('assets/img/sidebar-5.jpg') }}">

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ route('home') }}" class="simple-text">
                News Portal
            </a>
        </div>

        <ul class="nav">
            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Route::is('catecory.index') ? 'active' : '' }}">
                <a href="{{ route('catecory.index') }}">
                    <i class="pe-7s-note2"></i>
                    <p>Category</p>
                </a>
            </li>
            <li class="{{ Route::is('news.add') ? 'active' : '' }}">
                <a href="{{ route('news.add', ['type' => 1]) }}">
                    <i class="pe-7s-plus"></i>
                    <p>Add News</p>
                </a>
            </li>
            <li class="{{ Route::is('news.add') ? 'active' : '' }}">
                <a href="{{ route('news.add', ['type' => 2]) }}">
                    <i class="pe-7s-plus"></i>
                    <p>Add Video News</p>
                </a>
            </li>
            <li class="{{ Route::is('news.list') ? 'active' : '' }}">
                <a href="{{ route('news.list') }}">
                    <i class="pe-7s-news-paper"></i>
                    <p>News List</p>
                </a>
            </li>
            <li class="{{ Route::is('rasifal.list') ? 'active' : '' }}">
                <a href="{{ route('rasifal.list') }}">
                    <i class="pe-7s-news-paper"></i>
                    <p>Rashifal</p>
                </a>
            </li>
            <li class="{{ Route::is('user.add') ? 'active' : '' }}">
                <a href="{{ route('user.add') }}">
                    <i class="pe-7s-users"></i>
                    <p>Users</p>
                </a>
            </li>
        </ul>
    </div>
</div>
