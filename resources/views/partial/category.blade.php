@extends('layouts.appFront')

@section('content')
    @include('partial.preloder')
    @include('partial.nav')

<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>{{ $nav[2]->li }}</h2>
            <div class="page-links">
                <a href="#">{{ $nav[0]->li }}</a>
                <span>{{ $nav[2]->li }}</span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end -->
<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                @foreach ($category->articles as $article)
                    @if ($article->confirm === 1)
                        <!-- Post item -->
                        <div class="post-item">
                            <div class="post-thumbnail">
                                <img style="object-fit: cover; object-position: center; height: 270px; width: 100%;" src="{{ asset("img/blog/" .  $article->img) }}" alt="">
                                <div class="post-date">
                                    <h2>
                                        {{ substr($article->created_at, 8, 2) }}
                                    </h2>
                                    <h3>
                                        @php
                                            $monthdigit = substr($article->created_at, 5, 2);
                                            switch ($monthdigit) {
                                                case '01':
                                                    $month = 'Jan';
                                                    break;
                                                case '02':
                                                    $month = 'Feb';
                                                    break;
                                                case '03':
                                                    $month = 'Mar';
                                                    break;
                                                case '04':
                                                    $month = 'Apr';
                                                    break;
                                                case '05':
                                                    $month = 'May';
                                                    break;
                                                case '06':
                                                    $month = 'Jun';
                                                    break;
                                                case '07':
                                                    $month = 'Jul';
                                                    break;
                                                case '08':
                                                    $month = 'Aug';
                                                    break;
                                                case '09':
                                                    $month = 'Sep';
                                                    break;
                                                case '10':
                                                    $month = 'Oct';
                                                    break;
                                                case '11':
                                                    $month = 'Nov';
                                                    break;
                                                case '12':
                                                    $month = 'Dec';
                                                    break;
                                                default:
                                                    $month = 'Not a valid month!';
                                                    break;
                                            }
                                        @endphp
                                        {{ $month }}
                                        {{ substr($article->created_at, 0, 4) }}
                                    </h3>
                                </div>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title">{{ $article->h2 }}</h2>
                                <div class="post-meta">
                                    <a href="">{{ $article->user->nom }}</a>
                                    @php
                                        $i=0;
                                    @endphp
                                    <a href="">@foreach ($article->categories as $category)
                                                @if ($article->categories->count()==$i+1)
                                                    
                                                    {{ $category->name }}
                                                @else  
                                                    {{ $category->name . " ," }}
                                                @endif
                                                    @php
                                                    $i+=1;
                                                @endphp
                                                @endforeach
                                     </a>
                                    <a href="">{{ $article->comments->count() }} Comment</a>
                                </div>
                                <p>{{ substr($article->p, 0, 315) }}...</p>
                                <a href="{{ route('article.show', $article) }}" class="read-more">Read More</a>
                            </div>
                        </div>
                    @endif
                @endforeach
                <!-- Post item end -->

                <!-- Pagination -->
                <div class="page-pagination">
                    {{ $articles->links() }}
                </div>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        @foreach ($categories as $categorie )
								<li><a href="{{ route('category.show', $categorie) }}">
									{{ $categorie->name }}
								</a></li>
						@endforeach
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">tags</h2>
                    <ul class="category">
                        @foreach ($tags as $tag )
								<li><a href="{{ route('tag.show', $tag) }}">
									{{ $tag->name }}
								</a></li>
						@endforeach
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Quote</h2>
                    <div class="quote">
                        <span class="quotation">‘​‌‘​‌</span>
                        <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit
                            metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia
                            turpis at ultricies vestibulum.</p>
                    </div>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Add</h2>
                    <div class="add">
                        <a href=""><img src="img/add.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->

@include('partial.serviceNewsletter')
@include('partial.footer')
@endsection
