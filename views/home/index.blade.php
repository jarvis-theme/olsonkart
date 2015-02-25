<div class="shop-items blocky">
	<div class="container">
		<div class="row">
			@foreach($produk as $key=>$myproduk)
			<!-- Item #1 -->
			<div class="col-md-3 col-sm-4 col-xs-12" style="min-height:430px;">
				<div class="item">
					<!-- Use the below link to put HOT icon -->
					@if(is_terlaris($myproduk))
						<div class="item-icon"><span>HOT</span></div>
					@endif
					@if(is_produkbaru($myproduk))
						<div class="item-icon"><span>BARU</span></div>
					@endif
					@if(is_outstok($myproduk))
						<div class="item-icon"><span>KOSONG</span></div>
					@endif
					<!-- Item image -->
					<div class="item-image">
						<a href="{{slugProduk($myproduk)}}"><img src="{{URL::to(getPrefixDomain().'/produk/'.$myproduk->gambar1)}}" alt="{{$myproduk->nama}}" class="img-responsive"/></a>
					</div>
					<!-- Item details -->
					<div class="item-details" style="min-height:220px;">
						<!-- Name -->
						<h5 style="min-height:40px;"><a href="{{slugProduk($myproduk)}}">{{$myproduk->nama}}</a></h5>
						<div class="clearfix"></div>
						<!-- Para. Note more than 2 lines. -->
						<p style="min-height:80px;">{{shortDescription($myproduk->deskripsi,100)}}</p>
						<hr />
						<!-- Price -->
						<div class="item-price pull-left" style="width:auto;padding: 0 3px;">{{jadiRupiah($myproduk->hargaJual,$matauang)}}</div>
						<!-- Add to cart -->
						<div class="pull-right">
							<a href="{{slugProduk($myproduk)}}" class="btn btn-danger btn-sm">Lihat Produk</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

@if(count($newproduk) > 0)
<!-- Recent posts CarouFredSel Starts -->
<div class="recent-posts blocky">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Section title -->
				<div class="section-title">
					 <h4><i class="icon-shopping-cart color"></i> &nbsp;Whats New in Our Shop</h4>
				</div>
					
				<div class="row">
					<div class="col-md-12">
						<div class="my_carousel">
							<div class="carousel_nav pull-right">
								<!-- Carousel navigation -->
								<a class="prev" id="car_prev" href="#"><i class="icon-chevron-left"></i></a>
								<a class="next" id="car_next" href="#"><i class="icon-chevron-right"></i></a>
							</div>
							<div class="clearfix"></div>
							<ul id="carousel_container">
								<!-- Carousel item -->
								@foreach($newproduk as $key=>$myproduk)
								<li style="min-height:320px;">
									<a href="{{slugProduk($myproduk)}}">
										<img style="width: auto" src="{{URL::to(getPrefixDomain().'/produk/'.$myproduk->gambar1)}}" alt="" class="img-responsive"/>
									</a>
									<div class="carousel_caption">
										<h5><a href="{{slugProduk($myproduk)}}">{{$myproduk->nama}}</a></h5>
										<p>{{--shortDescription($myproduk->deskripsi,20)--}}</p>
										<a href="{{slugProduk($myproduk)}}" class="btn btn-info btn-sm"> {{jadiRupiah($myproduk->hargaJual,$matauang)}}</a>
									</div>
								</li>
								@endforeach
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endif