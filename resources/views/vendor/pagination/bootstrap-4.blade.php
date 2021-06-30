@if ($paginator->hasPages())
    <nav>

        <div class="page-pagination" style="display: flex; justify-content: center!important; margin-bottom: 20px;">

            @foreach ($elements as $element)
                @if (is_string($element))
                    <a>{{ $element }}</a>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="active" aria-current="page">{{ $page }}.</a>
                        @else
                            <a href="{{ $url }}">{{ $page }}.</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

        </div>

    </nav>
@endif