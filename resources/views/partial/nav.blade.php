<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <a href="/dashboard"><img src="img/logo.png" alt=""><!-- Logo --></a>
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="{{ request()->routeIs("home") ? 'active' : ' '  }}"><a href="/">Home</a></li>
            <li class="{{ request()->routeIs("services") ? 'active' : ' '  }}"><a href="services">Services</a></li>
            <li class="{{ request()->routeIs("blog") ? 'active' : ' '  }}"><a href="blog">Blog</a></li>
            <li class="{{ request()->routeIs("contact") ? 'active' : ' '  }}"><a href="contact">Contact</a></li>
        </ul>
    </nav>
</header>
<!-- Header section end -->