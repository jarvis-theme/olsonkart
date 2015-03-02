	<!-- Page title -->
	<div class="page-title">
		<div class="container">
			<h2><!-- <i class="icon-desktop color"></i> Laptops & Desktops <small>Subtext for header</small> --></h2>
			<hr />
		</div>
	</div>
	<!-- Page title -->
	  
	<!-- Page content -->
	<div class="shop-items">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-md-push-3">			   
					<!-- Breadcrumb -->
					<ul class="breadcrumb">
						{{breadcrumbProduk(null,' <li>;</li> ',';', false, $produk->kategori)}}
					</ul>
			
					<div class="single-item" style="height: 380px;">
						<div class="row">
							<div class="col-md-5 col-xs-5" style="text-align: center;">
								<div class="item-image" id="flexslider-product">
									<img style="margin:0" src="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar1)}}" class="img-responsive" alt="{{$produk->nama}}">
									@if($produk->gambar1!='')
										<div class="col-md-3 slides">
											<a  href="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar1)}}">
												<img class="img-responsive" style="float: left; width:75px !important;list-style-type: none;" src="{{URL::to(getPrefixDomain().'/produk/thumb/'.$produk->gambar1)}}"  alt="{{$produk->nama}}">
											</a>
										</div>
									@endif
									@if($produk->gambar2!='')
										<div class="col-md-3 slides">
											<a  href="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar2)}}">
												<img class="img-responsive" style="float: left; width:75px !important;list-style-type: none;" src="{{URL::to(getPrefixDomain().'/produk/thumb/'.$produk->gambar2)}}" alt="{{$produk->nama}}">
											</a>
										</div>
									@endif
									@if($produk->gambar3!='')
										<div class="col-md-3 slides">
											<a  href="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar3)}}">
												<img class="img-responsive" style="float: left; width:75px !important;list-style-type: none;" src="{{URL::to(getPrefixDomain().'/produk/thumb/'.$produk->gambar3)}}" alt="{{$produk->nama}}">
											</a>
										</div>
									@endif
								</div>
							</div>
							<div class="col-md-5 col-xs-7" style="">
								<!-- Title -->
								<h4>{{$produk->nama}}</h4>
								<h5><strong>Harga : 
								@if($produk->hargaCoret!='')
									<span style="text-decoration: line-through;">{{ jadiRupiah($produk->hargaCoret) }}</span>
								@endif  
								{{ jadiRupiah($produk->hargaJual) }}</strong></h5>
								<p><strong>Brand</strong> : {{$produk->vendor}}</p>
								<p>
									<strong>Stok</strong> : 
									@if($produk->stok>0)
										In Stock
									@else
										Out Stock
									@endif
								</p><br />
								 
								<form action="#" id='addorder'>
									<div class="form-group" >
										@if($opsiproduk->count()>0)                 
											<select class="span3" name="opsiproduk">
												<option value="">-- Pilih Opsi --</option>
												@foreach ($opsiproduk as $key => $opsi)
												<option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >
													{{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{jadiRupiah($opsi->harga)}}
												</option>
												@endforeach
											</select>
											</p>
										@endif
									</div>
									<!-- Quantity and add to cart button -->

									<div class="input-group">
										<input style="width:60px;" type="text" class="form-control" name='qty' value="1" placeholder="QTY..." >
										<span class="input-group-btn">
											<input class="btn btn-info" type="submit" value="Beli">
										</span>
									</div><!-- /input-group -->
								</form>
								<br><hr>
								<div style="margin:15px 0px;">
									<!-- Share button -->
									<iframe src="//www.facebook.com/plugins/share_button.php?href={{URL::to(slugProduk($produk))}}&amp;layout=button" scrolling="no" frameborder="0" style="border:none; overflow:hidden;height:20px;width:70px;" allowTransparency="true"></iframe>
									<a class="twitter-share-button" href="https://twitter.com/share" data-count="none">Tweet </a>
									<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
								</div>
							</div>
						</div>
					</div><br />
					
					<!-- Description, specs and review -->
					<ul id="myTab" class="nav nav-tabs">
						<!-- Use uniqe name for "href" in below anchor tags -->
						<li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
						<!-- <li><a href="#tab2" data-toggle="tab">Specs</a></li> -->
						<li><a href="#tab3" data-toggle="tab">Review Product</a></li>
					</ul>

					<!-- Tab Content -->
					<div id="myTabContent" class="tab-content">
						<!-- Description -->
						<div class="tab-pane fade in active" id="tab1">
							<h5><strong>{{$produk->nama}}</strong></h5>
							{{$produk->deskripsi}}
						</div>

						<!-- Sepcs -->
						<!-- <div class="tab-pane fade" id="tab2">
						
							<h5><strong>Product Specs:</strong></h5>
							<table class="table table-striped">
								<tbody>
									<tr>
									  <td><strong>Name</strong></td>
									  <td>Apple iPhone 5G</td>
									</tr>
								</tbody>
							</table>
						</div> -->

						<!-- Review -->
						<div class="tab-pane fade" id="tab3">
							<!--<h5><strong>Product Reviews :</strong></h5>
							<hr />-->
							<div class="item-review">
								{{pluginTrustklik()}}
								{{--$fbscript--}}
								{{--fbcommentbox(slugProduk($produk), '640px', '5', 'light')--}}
							</div>					
						</div>
					</div>
			   </div>
			   
			   <div class="col-md-3 col-md-pull-9">
				  <div class="sidey">
					 <ul class="nav">
						<li><a href="{{URL::to('/')}}"><i class="icon-home"></i> &nbsp;Home</a></li>

						@foreach ($kategori as $kat)
							@if($kat->parent=='0')
								<li><a href="{{URL::to('category/'.Str::slug($kat->nama))}}">{{shortName($kat->nama,20)}}</a>
									@if($kat->anak->count())
										<ul id="<?php echo strtolower($kat->nama);?>" >
										@foreach($kategori as $kat2)
											@if ($kat2->parent==$kat->id)
												<li><a href="{{URL::to('category/'.Str::slug($kat2->nama))}}" class="active" style="text-decoration: none;">{{$kat2->nama}}</a>
												</li>
											@endif
										@endforeach
										</ul>
									@endif
								</li>
							@endif
						@endforeach

					 </ul>
				  </div>
				  <div class="special" style="text-align: center;">
						 @foreach(getBanner(1) as $item)
						  <div><a href="{{URL::to($item->url)}}"><img width="213" src="{{URL::to(getPrefixDomain().'/galeri/'.$item->gambar)}}" /></a></div>
						@endforeach
					</div>

			   </div>
			</div>
			<div class="sep-bor"></div>
		 </div>
		</div>

		@if(count($produklain) > 0)
		<!-- Recent posts CarouFredSel Starts -->
		<div class="recent-posts blocky">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- Section title -->
						<div class="section-title">
							<h4><i class="icon-gift color"></i> &nbsp;Related Product</h4>
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
											@foreach($produklain as $myproduk)
											<li>
												<a href="{{slugProduk($myproduk)}}">{{HTML::image(getPrefixDomain().'/produk/'.$myproduk->gambar1, $myproduk->nama, array('class' => 'img-responsive', 'style' => 'width:auto;'))}}</a>
												<div class="carousel_caption">
													<h5><a href="{{slugProduk($myproduk)}}">{{shortName($myproduk->nama, 20)}}</a></h5>
													<p>{{--shortDescription($myproduk->deskripsi,100)--}}</p>
													<a href="{{slugProduk($myproduk)}}" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Lihat Produk</a>
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
			<!-- Recent posts Ends -->
		@endif