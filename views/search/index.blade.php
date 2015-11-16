<div class="page-title">
	<div class="container">
		<h2><i class="icon-list-alt color"></i> Search</h2>
		<hr />
	</div>
</div>

<div class="shop-items">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-md-push-3">						 
			@if($jumlahCari!=0)
				<div class="row">
					@foreach($hasilpro as $myproduk)
					<div class="col-md-4 col-sm-4 col-xs-6">
						<div class="item">
							@if(is_outstok($myproduk))
							<div class="item-icon"><span class="label label-default">KOSONG</span></div>
							@elseif(is_terlaris($myproduk))
							<div class="item-icon"><span class="label label-danger">HOT</span></div>
							@elseif(is_produkbaru($myproduk))
							<div class="item-icon"><span class="label label-info">BARU</span></div>
							@endif

							<div class="item-image">
								<a href="{{product_url($myproduk)}}">{{HTML::image(product_image_url($myproduk->gambar1,'medium'), $myproduk->nama, array('class'=>"img-responsive", "id"=>"img-home1", "title"=>$myproduk->nama))}}</a>
							</div>
							<div class="item-details">
								<h5><a href="{{product_url($myproduk)}}">{{shortName($myproduk->nama,20)}}</a></h5>
								<div class="clearfix"></div>
								<p id="desc-product">{{shortDescription($myproduk->deskripsi,100)}}</p>
								<hr />
								<div class="item-price pull-left" id="harga">{{price($myproduk->hargaJual)}}</div>
								<div class="pull-right"><a href="{{product_url($myproduk)}}" class="btn btn-danger btn-sm">Lihat</a></div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			@else
				<div class="span12">
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<h4>Oh, We're So Sorry</h4>
						There is no product that matches the search criteria.
					</div>
					<div class="search">
						<div class="titleHeader clearfix">
							<!-- <h3>Search</h3> -->
						</div>

						<div class="well well-small">
							<form method="post" action="{{url('search')}}" class="form-inline">
								<div class="input-group col-sm-6" id="search-form">
							    	<input type="text" class="form-control" placeholder="Search" name="search" required>
							    	<span class="input-group-btn">
							    		<button class="btn btn-info" type="submit"><i class="icon-search"></i></button>
							    	</span>
							    </div>
							</form>
						</div>
					</div>
				</div>
			@endif						 
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
						</li>
					</ul>
				</div>

				@foreach(vertical_banner() as $item)
				<div class="special">
					<a href="{{url($item->url)}}">
						<img width="213" src="{{url(banner_image_url($item->gambar))}}" alt="Info Promo" />
					</a>
				</div>
				<br>
				@endforeach
				@if($jumlahCari!=0)
				<div class="form">
					<h5>Search</h5>
					<form action="{{url('search')}}" method="post" class="form-inline" role="form">
						<div class="form-group">
							<input type="text" class="form-control" id="search" name="search" placeholder="Cari" required>
							<button type="submit" class="btn btn-info">Cari</button>
						</div>
					</form>
				</div>
				<br>
				@endif
			</div>
		</div>
		
		<div class="sep-bor"></div>
	</div>
</div>