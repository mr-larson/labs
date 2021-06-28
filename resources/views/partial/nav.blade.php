<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <a href="/dashboard"><img src="{{ asset('img/'.$images[3]->img) }}" alt=""><!-- Logo --></a>
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="{{ request()->routeIs("home") ? 'active' : ' '  }}"><a href="/">{{ $nav[0]->li }}</a></li>
            <li class="{{ request()->routeIs("services") ? 'active' : ' '  }}"><a href="/services">{{ $nav[1]->li }}</a></li>
            <li class="{{ request()->routeIs("blog") ? 'active' : ' '  }}"><a href="/blog">{{ $nav[2]->li }}</a></li>
            <li class="{{ request()->routeIs("contact") ? 'active' : ' '  }}"><a href="/contact">{{ $nav[3]->li }}</a></li>
        </ul>
    </nav>
</header>
<!-- Header section end -->