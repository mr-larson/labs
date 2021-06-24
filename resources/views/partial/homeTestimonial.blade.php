	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay" style="background-image: url({{ asset('img/'.$images[1]->img) }})!important;"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						<h2>{{ $titres[1]->h2 }}</h2>
					</div>
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
									<div class="client-name">
										<h2>{{ $testimonial->h2 }}</h2>
										<p>{{ $testimonial->p2 }}</p>
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