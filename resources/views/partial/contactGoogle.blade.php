<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>{{ $nav[3]->li }}</h2>
            <div class="page-links">
                <a href="#">{{ $nav[0]->li }}</a>
                <span>{{ $nav[3]->li }}</span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end -->
<!-- Google map -->
<div class="mapouter" style="text-align: left;">

    <div class="gmap_canvas"><iframe height="600" id="gmap_canvas"
        src="https://maps.google.com/maps?q=%7B%7B {{ $map->adresse }} &t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
        scrolling="no" marginheight="0" marginwidth="0"></iframe>
        <style>
            .mapouter {
                position: relative;
                text-align: right;
                height: 460px;
                width: 100vw;
            }

            .gmap_canvas, #gmap_canvas {
                width: 100vw;
                overflow: hidden;
                background: none !important;
                height: 100%;
            }
        </style>
    </div>
</div>
