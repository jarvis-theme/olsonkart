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
						@if(!empty($kategoridetail))
							<!-- {{breadcrumbProduk(null,' <li>;</li> ',';', true, $kategoridetail)}} -->
						<li>
        					<a href="{{url('home')}}">Home</a></li> {{breadcrumbProduk($produk,' <span>/</span>; ',';',true, $kategoridetail,@$category,@$collection)}}
						@else
							<li><a href="{{url('home')}}">Home</a></li>
							<a class="active">/ Produk</a>
						@endif
					</ul>
					 
					<!-- Items List starts -->
					<div class="row">
						<!-- Item #1 -->
                        @foreach(list_product(null,@$category,@$collection) as $myproduk)
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="item">
								<!-- Use the below link to put HOT icon -->
								@if(is_outstok($myproduk))
									<div class="item-icon"><span class="label label-default">KOSONG</span></div>
								@else
									@if(is_terlaris($myproduk))
										<div class="item-icon"><span class="label label-danger">HOT</span></div>
									@elseif(is_produkbaru($myproduk))
										<div class="item-icon"><span class="label label-info">BARU</span></div>
									@endif
								@endif
								<!-- Item image -->
								<div class="item-image">
									<a href="{{product_url($myproduk)}}">
										{{HTML::image(product_image_url($myproduk->gambar1, 'medium'), 'produk', array('class'=>"img-responsive", "style"=>"width:auto"))}}
									</a>
								</div>
								<!-- Item details -->
								<div class="item-details">
									<!-- Name -->
									<h5><a href="{{product_url($myproduk)}}">{{shortName($myproduk->nama,20)}}</a></h5>
									<div class="clearfix"></div>
									<!-- Para. Note more than 2 lines. -->
									<p style="min-height:80px;">{{shortDescription($myproduk->deskripsi,100)}}</p>
									<hr />
									<!-- Price -->
									<div class="item-price pull-left" style="width:auto;padding: 0 3px;">{{price($myproduk->hargaJual)}}</div>
									<!-- Add to cart -->
									<div class="pull-right">
										<a href="{{product_url($myproduk)}}" class="btn btn-danger btn-sm">Lihat</a>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						@endforeach	
					</div>

					<!-- Items List ends -->
					<div class="row">
						<div class="col-md-12">
							<!-- Pagination -->
                            {{list_product(null,@$category,@$collection)->links()}}
						</div>
					</div>
				</div>	 
				<div class="col-md-3 col-md-pull-9">
					<div class="sidey">
						<ul class="nav">
							<li>
								<a href="{{url('/')}}"><i class="icon-home"></i> &nbsp;Home</a>
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
																<a href="{{category_url($submenu2)}}" class="active" style="text-decoration: none;">{{$submenu2->nama}}</a>
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
							</li>
						</ul>
					</div>
							
					<!-- Sidebar items (featured items)-->
					<div class="sidebar-items">
						<h5>Koleksi</h5>
						@foreach (list_koleksi() as $kol)
						<!-- Item #1 -->
						<div class="sitem">
							<div class="onethree-left">
								<!-- Image -->
								<a href="{{koleksi_url($kol)}}">{{ HTML::image(koleksi_image_url($kol->gambar,'thumb'),$kol->nama, array('class' => 'img-responsive' ))}}</a>
							</div>
							<div class="onethree-right">
								<!-- Title -->
								<a href="{{koleksi_url($kol)}}">{{$kol->nama}}</a>
							</div>
							<div class="clearfix"></div>
						</div>
						@endforeach
					</div>

					<div class="special" style="text-align:center;">
					@foreach(vertical_banner() as $item)
						<div>
							<a href="{{url($item->url)}}">
								<img width="213" src="{{url(banner_image_url($item->gambar))}}" />
							</a>
						</div>
					@endforeach
					</div>
					<br>
					<div class="form">
						<h5>Search</h5>
						<form action="{{url('search')}}" method="post" class="form-inline" role="form">
							<div class="form-group">
								<input type="text" class="form-control" id="search" name="search" placeholder="Cari">
								<button type="submit" class="btn btn-info">Cari</button>
							</div> 
						</form>
					</div>
					<br>
				</div>
			</div>
			<div class="sep-bor"></div>
		</div>
	</div>