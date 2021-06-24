	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src="{{ asset('img/'.$images[0]->img) }}" alt="">
				<p>{{ $titres[6]->h2 }}</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			@foreach ($sliders as $slider)	
				<div class="item  hero-item" data-bg="{{ asset("img/" . $slider->img) }}"></div>
			@endforeach	
		</div>
	</div>
	<!-- Intro Section end-->
