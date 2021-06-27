@extends('layouts.appFront')

@section('content')
@include('partial.nav')
	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>{{ $nav[2]->li }}</h2>
				<div class="page-links">
					<a href="#">Home</a>
					<span>{{ $nav[2]->li }}</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->


	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Single Post -->
					<div class="single-post">
						<div class="post-thumbnail">
							<img src="{{asset("img/blog/" . $article->img)}}" alt="">
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
							<h2 class="post-title">{{ $article->h2 }}t</h2>
							<div class="post-meta">
								<a href="">{{ $article->user->nom }}</a>
									@php
                                        $i=0;
                                    @endphp
                                    <a href="">@foreach ($article->tags as $tag)
                                                @if ($article->tags->count()==$i+1)
                                                    
                                                    {{ $tag->name }}
                                                @else  
                                                    {{ $tag->name . " ," }}
                                                @endif
                                                @php
                                                    $i+=1;
                                                @endphp
                                                @endforeach
                                    </a>
								<a href="">2 Comments</a>
							</div>
							<p>{!! str_replace(["/"], ["<br>"], $article->p) !!}</p>
						</div>
						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								<img src="{{asset("img/team/" . $article->user->img)}}" alt="">
							</div>
							<div class="author-info">
								<h2>{{ $article->user->nom }}, <span>Author</span></h2>
								<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
							</div>
						</div>
						<!-- Post Comments -->
						<div class="comments">
							<h2>Comments (2)</h2>
							<ul class="comment-list">
								@foreach ($article->comments as $comment)	
									<li>
										<div class="avatar">
											<img src="{{ asset ("img/team/" . $comment->user->img) }}" alt="">
										</div>
										<div class="commetn-text">
											<h3>{{ $comment->user->nom }} |
													@php
														$monthdigit = substr($comment->created_at, 5, 2);
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
												|Reply</h3>
											<p>{{ $comment->p }}</p>
										</div>
									</li>
								@endforeach
							</ul>
						</div>
						<!-- Commert Form -->
						<div class="row">
							<div class="col-md-9 comment-from">
								<h2>Leave a comment</h2>
								<form action="{{ route('comment.store') }}" method="POST" class="form-class" id="con_form">
									@csrf
									@method('POST')
									<div class="row">
										<div class="col-sm-12">
											<textarea name="p" placeholder="commentaire"></textarea>
											<input name="article_id" style='display:none;' value="{{ $article->id }}" type="text">
											<button type="submit" class="site-btn">send</button>
										</div>
									</div>
								</form>
							</div>
						</div>
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
								<li><a href="#">
									{{ $categorie->name }}
									</a></li>
							@endforeach
							
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Instagram</h2>
						<ul class="instagram">
							<li><img src="img/instagram/1.jpg" alt=""></li>
							<li><img src="img/instagram/2.jpg" alt=""></li>
							<li><img src="img/instagram/3.jpg" alt=""></li>
							<li><img src="img/instagram/4.jpg" alt=""></li>
							<li><img src="img/instagram/5.jpg" alt=""></li>
							<li><img src="img/instagram/6.jpg" alt=""></li>
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul>
							@foreach ($tags as $tag )
								<li><a href="#">
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
							<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
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
@endsection