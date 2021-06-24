	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay" style="background-image: url({{ asset('img/'.$images[1]->img) }})!important;"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						<h2>{!! str_replace(["(", ")"], ["<span>", "</span>"], $titres[1]->h2) !!}</h2>
					</div>
					@can('create', App\models\Testimonial::class)
                    <div class="max-w-6xl mx-auto  flex justify-center my-2">
                        <a class="site-btn hover:bg-purple-500 text-white px-2 rounded-lg m-2 w-auto text-center" href="/testimonial/create">+ Create</a>
                    </div>
                	@endcan
					<div class="owl-carousel" id="testimonial-slide">
						<!-- single testimonial -->
						@foreach ($testimonials as $testimonial)
							<div class="testimonial">
								<span>‘​‌‘​‌</span>
								<p>{{ $testimonial->p }}</p>
								<div class="client-info">
									<div class="avatar">
										<img src="{{asset("img/avatar/" . $testimonial->img) }}" alt="">
									</div>
									<div class="client-name m-2">
										<h2>{{ $testimonial->h2 }}</h2>
										<p>{{ $testimonial->p2 }}</p>
									</div>
									<div class="">
										@can('update', $testimonial)
											<a href="{{route('testimonial.edit',$testimonial->id) }}" class="bg-red-500 hover:bg-red-600 text-white px-1 rounded-lg m-2 w-auto text-center m-2"> <button class="bg-red-500 hover:bg-red-600 text-white px-1 rounded-lg m-2 w-auto text-center m-2">Edit</button></a>
										@endcan
										@can('delete', $testimonial)
											<form action="{{ route('testimonial.destroy',$testimonial->id) }}" method="POST">
												@csrf
												@method('DELETE')
												<button class="bg-red-500 hover:bg-red-600 text-white px-1 rounded-lg m-2 w-auto text-center m-2">Delete</button>
											</form>
										@endcan
									</div>
								</div>
							</div>
						@endforeach
						<!-- single testimonial end-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->