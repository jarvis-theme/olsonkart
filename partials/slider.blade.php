<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		@for($i = 0; $i < slideshow()->count(); $i++)
		<li data-target="#carousel-example-generic" data-slide-to="{{$i}}" {{$i == 0 ? 'class="active"' : ''}}></li>
		@endfor
	</ol>
	<div class="carousel-inner" id="carousel-div" role="listbox">
		{{-- */ $j = 0; /* --}}
		@foreach (slideshow() as $val)
		<div class="item {{$j==0 ? 'active':''}} animated fadeInRight">
			@if(!empty($val->url))
			<a href="{{filter_link_url($val->url)}}" target="_blank">
			@else
			<a href="#">
			@endif
				<img src="{{url(slide_image_url($val->gambar))}}" alt="Slide" class="img-responsive" id="slides" />
			</a>
		</div>
		{{-- */ $j++; /* --}}
		@endforeach
	</div>
	@if(slideshow()->count() > 1)
	<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"><span class="icon-prev"></span></a>
	<a class="right carousel-control" href="#carousel-example-generic" data-slide="next"><span class="icon-next"></span></a>
	@endif
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