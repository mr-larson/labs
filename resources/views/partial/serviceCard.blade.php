<!-- services card section-->
<div class="services-card-section spad">
    <div class="container">
        <div class="row">
            <!-- Single Card -->
            @foreach ($articles->shuffle()->slice(0,3) as $article)
            <div class="col-md-4 col-sm-12">
                <div class="sv-card">
                    <div class="card-img">
                        <img src="img/blog/{{ $article->img }}" alt="">
                    </div>
                    <div class="service-text">
                        <h2>{{ $article->h2 }}</h2>
                        <p>{{ substr($article->p, 0, 315) }}...</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- services card section end-->