
<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>{!! str_replace(["(", ")"], ["<span>", "</span>"], $titres[5]->h2) !!}</h2>
					</div>
					<p>{{ $titres[5]->p1 }}</p>
					<h3 class="mt60">Main Office</h3>
					<p class="con-item">{{ $adresse->rue }}, {{ $adresse->num }} <br> {{ $adresse->code }} {{ $adresse->ville }} </p>
					<p class="con-item">{{ $adresse->phone }}</p>
					<p class="con-item">{{ $adresse->email }}</p>
					<div class="buttons flex justify-center">
						@can('update', $adresse)
							<a href="{{route('adresse.edit',$adresse->id) }}" class="site-btn hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
						@endcan
					</div>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull"> 
					@if (session("message_mail"))
                    	<div>{{ session("message_mail") }}</div>
                	@endif
					<form action="/send-mail" method="post" class="form-class" id="con_form">
						@csrf
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" placeholder="Your name">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject">
								<textarea name="message" placeholder="Message"></textarea>
								<button class="site-btn">send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->