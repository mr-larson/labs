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
        scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies2.org/%22%3Efmovies"></a><br>
        <style>
            .mapouter {
                position: relative;
                text-align: right;
                height: 600px;
            }

        </style>
        <a href="https://www.embedgooglemap.net/%22%3Eembedgooglemap.net"></a>
        <style>
            .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 600px;
            }

        </style>
    </div>
</div>
<script>
    window.addEventListener("load", function(event) {
        let map = document.querySelector('#gmap_canvas');
        let map2 = document.querySelector('.gmap_canvas');
        let header = document.querySelector('.page-top-section');
        map.setAttribute('width', header.clientWidth);
        map2.setAttribute('width', header.clientWidth);
        const resize_ob = new ResizeObserver(function(entries) {
            // since we are observing only a single element, so we access the first element in entries array
            let rect = entries[0].contentRect;

            // current width & height
            let width = rect.width;
            let height = rect.height;

            console.log('Current Width : ' + width);
            console.log('Current Height : ' + height);
            let map = document.querySelector('#gmap_canvas');
            let map2 = document.querySelector('.gmap_canvas');
            let header = document.querySelector('.page-top-section');
            map.setAttribute('width', width);
            map2.setAttribute('width', height);
        });
        resize_ob.observe(header);
    });

</script>