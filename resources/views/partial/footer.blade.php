<!-- Footer section -->
<footer class="footer-section">
    <h2>{{ $footer->h2 }} <a href="{{ $footer->a }}" target="_blank"> <span>{{ $footer->span }}</span> </a></h2>
    <div class="buttons flex justify-center">
        @can('update', $footer)
            <a href="{{route('footer.edit',$footer->id) }}" class="site-btn hover:bg-indigo-700 text-white m-2 w-auto text-center">Edit</a>
        @endcan
    </div>
</footer>
<!-- Footer section end -->