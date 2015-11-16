<div id="carousel-example-generic" class="carousel slide">
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" id="carousel-div">
		@foreach (slideshow() as $val)
		<div class="item {{$val->idSlide==1 ? 'active':''}} animated fadeInRight">
			<a href="{{$val->text == '' ? '#' : $val->text}}">
				<img src="{{url(slide_image_url($val->gambar))}}" alt="Slide" class="img-responsive" id="slides" />
			</a>
		</div>
		@endforeach
	</div>
	<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"><span class="icon-prev"></span></a>
	<a class="right carousel-control" href="#carousel-example-generic" data-slide="next"><span class="icon-next"></span></a>
</div>

<div class="hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center>
					<!-- Catchy title -->
					<!-- <h3>It<span class="color">'</span>s Lorem ipsum <span class="color">dolor</span> sit amet consectetur</h3> -->
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique est sit amet diam interdum semper. Vestibulum condimentum ante urna, vel interdum odio accumsan id.</p> -->
					@foreach(horizontal_banner() as $item)
					<a target="_blank" href="{{url($item->url)}}">
						<img class="img-responsive" src="{{url(banner_image_url($item->gambar))}}" alt="Info Promo"  />
					</a>
					@endforeach
				</center>
			</div>
		</div>
		<div class="sep-bor"></div>
	</div>
</div>