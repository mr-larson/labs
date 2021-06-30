<!-- newsletter section -->
<div class="newsletter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>{{ $titres[7]->h2 }}</h2>
            </div>
            <div class="col-md-9">
                <!-- newsletter form -->
                @if (session("message"))
                  <div class="alert alert-success">{{ session("message") }}</div>
                @endif
                <form class="nl-form" action="{{ route('newsletter.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <input type="text" name="email" placeholder="Your e-mail here">
                    <button class="site-btn btn-2" type="submit">{{ $titres[7]->p1 }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->