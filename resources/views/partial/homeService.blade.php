<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>{!! str_replace(["(", ")"], ["<span>", "</span>"], $titres[2]->h2) !!}</h2>
        </div>
        <div class="row">
            <!-- single service -->
            @foreach ($services->shuffle()->slice(0,9) as $service)
                <div class="col-md-4 col-sm-6">
                    <div class="service">
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
        <div class="text-center">
            <a href="" class="site-btn">{{ $link->a }}</a>
        </div>
    </div>
</div>
<!-- services section end -->