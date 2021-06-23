<!-- features section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{{ $titres[0]->h2 }} <span>the Lab</span> and  discover the world</h2>
        </div>
        <div class="row">
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                <div class="icon-box light left">
                    <div class="service-text">
                        <h2>{{ $features[0]->h2 }}</h2>
                        <p>{{ $features[0]->p }}</p>
                    </div>
                    <div class="icon">
                        <i class="{{ $features[0]->i }}"></i>
                    </div>
                </div>
                <!-- feature item -->
                <div class="icon-box light left">
                    <div class="service-text">
                        <h2>{{ $features[1]->h2 }}</h2>
                        <p>{{ $features[1]->p }}</p>
                    </div>
                    <div class="icon">
                        <i class="{{ $features[1]->i }}"></i>
                    </div>
                </div>
                <!-- feature item -->
                <div class="icon-box light left">
                    <div class="service-text">
                        <h2>{{ $features[2]->h2 }}</h2>
                        <p>{{ $features[2]->p }}</p>
                    </div>
                    <div class="icon">
                        <i class="{{ $features[2]->i }}"></i>
                    </div>
                </div>
            </div>
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="{{ asset('img/'.$images[2]->img) }}" alt="">
                </div>
            </div>
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                <div class="icon-box light">
                    <div class="icon">
                        <i class="{{ $features[3]->i }}"></i>
                    </div>
                    <div class="service-text">
                        <h2>{{ $features[3]->h2 }}</h2>
                        <p>{{ $features[3]->p }}</p>
                    </div>
                </div>
                <!-- feature item -->
                <div class="icon-box light">
                    <div class="icon">
                        <i class="{{ $features[4]->i }}"></i>
                    </div>
                    <div class="service-text">
                        <h2>{{ $features[4]->h2 }}</h2>
                        <p>{{ $features[4]->p }}</p>
                    </div>
                </div>
                <!-- feature item -->
                <div class="icon-box light">
                    <div class="icon">
                        <i class="{{ $features[5]->i }}"></i>
                    </div>
                    <div class="service-text">
                        <h2>{{ $features[5]->h2 }}</h2>
                        <p>{{ $features[5]->p }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt100">
            <a href="" class="site-btn">{{ $link->a }}</a>
        </div>
    </div>
</div>
<!-- features section end-->