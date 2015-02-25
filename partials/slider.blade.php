<!-- Carousel starts -->		
<div id="carousel-example-generic" class="carousel slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" style="background-color: white">
		<!-- Item -->
		@foreach ($slideshow as $val)
		<div class="item {{$val->idSlide==1 ? 'active':''}} animated fadeInRight">
			<img src="{{URL::to(getPrefixDomain().'/galeri/'.$val->gambar.'?'.Time())}}" alt="{{$val->gambar}}" class="img-responsive" style="text-align: center; margin:0 auto;" />
			<div class="carousel-caption">
				<p class="animated fadeInTopBig">{{ $val->text }}</p>
			</div>
		</div>
		@endforeach 
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		<span class="icon-prev"></span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		<span class="icon-next"></span>
	</a>
</div>
<!-- carousel ends -->

<!-- Hero starts -->		
<div class="hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center>
					<!-- Catchy title -->
					<!-- <h3>It<span class="color">'</span>s Lorem ipsum <span class="color">dolor</span> sit amet consectetur</h3> -->
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique est sit amet diam interdum semper. Vestibulum condimentum ante urna, vel interdum odio accumsan id.</p> -->
					@foreach(getBanner(2) as $item)
					<a target="_blank" href="{{URL::to($item->url)}}"><img class="img-responsive" src="{{URL::to(getPrefixDomain().'/galeri/'.$item->gambar)}}"  /></a>
					@endforeach
				</center>
			</div>
		</div>
		<div class="sep-bor"></div>
	</div>
</div>
<!-- Hero ends -->