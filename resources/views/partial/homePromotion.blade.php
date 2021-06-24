<!-- Promotion section -->
<div class="promotion-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2>{!! str_replace(["(", ")"], ["<span>", "</span>"], $titres[4]->h2) !!}</h2>
                <p>{{ $titres[4]->p1 }}</p>
            </div>
            <div class="col-md-3">
                <div class="promo-btn-area">
                    <a href="" class="site-btn btn-2">{{ $link->a }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Promotion section end-->