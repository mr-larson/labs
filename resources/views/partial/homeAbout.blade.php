<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                <!-- single service -->
                @foreach ($services->shuffle()->slice(0,3) as $service)
                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="{{ $service->i }}"></i>
                        </div>
                        <div class="service-text">
                            <h2>{{ $service->h2 }}</h2>
                            <p>{{ $service->p }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- card section end-->

    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            <div class="section-title">
                <h2>{!! str_replace(["(", ")"], ["<span>", "</span>"], $titres[0]->h2) !!}</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>{{ $titres[0]->p1 }}</p>
                </div>
                <div class="col-md-6">
                    <p>{{ $titres[0]->p2 }}</p>
                </div>
            </div>
            <div class="text-center mt60">
                <a href="" class="site-btn">{{ $link->a }}</a>
            </div>
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="{{ asset('img/'.$video->img) }}" alt="">
                        <a href="{{ $video->a }}" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->