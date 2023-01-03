<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('/home') }}" class="brand-link">
        <img src="https://st4.depositphotos.com/2934765/28878/v/450/depositphotos_288788394-stock-illustration-emoji-smile-icon-vector-symbol.jpg"
             alt="{{ config('app.name') }} Logo"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">Selamat Datang :)</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>
</aside>
