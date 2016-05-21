	<div class="page-title">
		<div class="container">
			<h2><!-- <i class="icon-desktop color"></i> Laptops & Desktops <small>Subtext for header</small> --></h2>
			<hr />
		</div>
	</div>
	<div class="shop-items">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-md-push-3">
					<ul class="breadcrumb">
						{{breadcrumbProduk($produk,'; <span>/</span> ',';',true)}} 
					</ul>
			
					<div class="single-item" id="product-item">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12 center">
								<div class="item-image" id="flexslider-product">
									<a class="fancybox" href="{{product_image_url($produk->gambar1, 'large')}}" title="{{$produk->nama}}">
										<img src="{{url(product_image_url($produk->gambar1, 'medium'))}}" class="img-responsive img-product" alt="{{$produk->nama}}" title="{{$produk->nama}}">
									</a>
									@if($produk->gambar2!='')
										<div class="col-md-3 col-sm-4 col-xs-4 slides">
											<a class="fancybox" href="{{product_image_url($produk->gambar2, 'large')}}" title="{{$produk->nama}}">
												<img class="img-responsive thumb-product" src="{{product_image_url($produk->gambar2,'thumb')}}" alt="{{$produk->nama}}" title="{{$produk->nama}}">
											</a>
										</div>
									@endif
									@if($produk->gambar3!='')
										<div class="col-md-3 col-sm-4 col-xs-4 slides">
											<a class="fancybox" href="{{product_image_url($produk->gambar3, 'large')}}" title="{{$produk->nama}}">
												<img class="img-responsive thumb-product" src="{{product_image_url($produk->gambar3,'thumb')}}" alt="{{$produk->nama}}" title="{{$produk->nama}}">
											</a>
										</div>
									@endif
									@if($produk->gambar4!='')
										<div class="col-md-3 col-sm-4 col-xs-4 slides">
											<a class="fancybox" href="{{product_image_url($produk->gambar4, 'large')}}" title="{{$produk->nama}}">
												<img class="img-responsive thumb-product" src="{{product_image_url($produk->gambar4,'thumb')}}" alt="{{$produk->nama}}" title="{{$produk->nama}}" >
											</a>
										</div>
									@endif
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-11">
								<h4>{{$produk->nama}}</h4>
								<h5><strong>Harga : 
								@if($produk->hargaCoret!='')
									<span class="coret">{{ price($produk->hargaCoret) }}</span>
								@endif  
								{{ price($produk->hargaJual) }}</strong></h5>
								<p><strong>Brand</strong> : {{$produk->vendor}}</p>
								<p><strong>Stok</strong> : {{$produk->stok>0 ? 'In Stock' : 'Out Stock'}}</p>
								<br />
								 
								<form action="#" id='addorder'>
									<div class="form-group" >
										@if($opsiproduk->count() > 0)	
										<select class="span3" name="opsiproduk">
											<option value="">-- Pilih Opsi --</option>
											@foreach ($opsiproduk as $key => $opsi)
											<option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >
												{{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{price($opsi->harga)}} 
											</option>
											@endforeach
										</select>
										@endif
									</div>
									<div class="input-group">
										<input id="input-qty" type="text" class="form-control" name='qty' value="1" placeholder="QTY" >
										<span class="input-group-btn">
											<input class="btn btn-info" type="submit" value="Beli">
										</span>
									</div>
								</form>
								<br><hr>
								<div class="sosial">{{sosialShare(url(product_url($produk)))}}</div>
							</div>
						</div>
					</div><br />
					
					<ul id="myTab" class="nav nav-tabs">
						<li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
						<li><a href="#tab2" data-toggle="tab">Review Product</a></li>
					</ul>

					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="tab1">
							<h5><strong>{{$produk->nama}}</strong></h5>
							{{$produk->deskripsi}}
						</div>
						<div class="tab-pane fade" id="tab2">
							<div class="item-review">
								{{ pluginComment(product_url($produk), @$produk) }}
							</div>
						</div>
					</div>
				</div>
			
				<div class="col-md-3 col-md-pull-9">
					<div class="sidey">
						<ul class="nav">
							<li><a href="{{url('/')}}"><i class="icon-home"></i> &nbsp;Home</a></li>

							@foreach (list_category() as $kat)
								@if($kat->parent=='0')
									<li>
										<a href="{{category_url($kat)}}">{{shortName($kat->nama,20)}}</a>
										@if($kat->anak->count())
											<ul id="{{strtolower($kat->nama)}}" >
											@foreach(list_category() as $submenu)
												@if ($submenu->parent==$kat->id)
												<li>
													<a href="{{category_url($submenu)}}">{{$submenu->nama}}</a>
													@if($submenu->anak->count() != 0)
													<ul id="{{strtolower($submenu->nama)}}">
														@foreach($submenu->anak as $submenu2)
														@if($submenu2->parent == $submenu->id)
														<li>
															<a href="{{category_url($submenu2)}}" class="active" id="side-nav">{{$submenu2->nama}}</a>
														</li>
														@endif
														@endforeach
													</ul>
													@endif
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
					<div class="special center">
						@foreach(vertical_banner() as $item)
						<div>
							<a href="{{url($item->url)}}">
								<img width="213" src="{{url(banner_image_url($item->gambar))}}" alt="Info Promo" />
							</a>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="sep-bor"></div>
		</div>
	</div>

	@if(count(other_product($produk)) > 0)
	<div class="recent-posts blocky">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title"><h4><i class="icon-gift color"></i> &nbsp;Produk Lainnya</h4></div>
			
					<div class="row">
						<div class="col-md-12">
							<div class="my_carousel">
								<div class="carousel_nav pull-right">
									<a class="prev" id="car_prev" href="#"><i class="icon-chevron-left"></i></a>
									<a class="next" id="car_next" href="#"><i class="icon-chevron-right"></i></a>
								</div>
								<div class="clearfix"></div>
									<ul id="carousel_container">
										@foreach(other_product($produk) as $myproduk)
										<li>
											<a href="{{product_url($myproduk)}}">{{HTML::image(product_image_url($myproduk->gambar1, 'medium'), $myproduk->nama, array('class' => 'img-responsive', 'id'=>'img-home1', 'title'=>$myproduk->nama))}}</a>
											<div class="carousel_caption">
												<h5><a href="{{product_url($myproduk)}}">{{shortName($myproduk->nama, 20)}}</a></h5>
												<p>{{--shortDescription($myproduk->deskripsi,100)--}}</p>
												<a href="{{product_url($myproduk)}}" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Lihat Produk</a>
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