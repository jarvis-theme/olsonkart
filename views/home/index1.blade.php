<div class="shop-items">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-md-push-3">
				<div class="row">
					@foreach(home_product() as $myproduk)
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="item">
							@if(is_outstok($myproduk))
							<div class="item-icon"><span class="label label-default">KOSONG</span></div>
							@elseif(is_terlaris($myproduk))
							<div class="item-icon"><span class="label label-danger">HOT</span></div>
							@elseif(is_produkbaru($myproduk))
							<div class="item-icon"><span class="label label-info">BARU</span></div>
							@endif
							<div class="item-image">
								<a href="{{product_url($myproduk)}}">
									{{HTML::image(url(product_image_url($myproduk->gambar1, 'medium')), $myproduk->nama, array('class'=>"img-responsive", "id"=>"img-home1", "title"=>$myproduk->nama))}}
								</a>
							</div>
							<div class="item-details">
								<h5><a href="{{product_url($myproduk)}}">{{shortName($myproduk->nama,20)}}</a></h5>
								<div class="clearfix"></div>
								<!-- Para. Note more than 2 lines. -->
								<p id="desc-product">{{short_description($myproduk->deskripsi, 50)}}</p>
								<hr />
								<div class="item-price pull-left" id="harga">{{price($myproduk->hargaJual)}}</div>
								<div class="pull-right">
									<a href="{{product_url($myproduk)}}" class="btn btn-danger btn-sm">Detail</a>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				<div class="row">
					<div class="col-md-12">{{home_product()->links()}}</div>
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
									<a href="{{url(category_url($kat))}}">{{shortName($kat->nama,20)}}</a>
									@if($kat->anak->count())
									<ul id="{{strtolower($kat->nama)}}">
									@foreach(list_category() as $kat2)
										@if ($kat2->parent==$kat->id)
										<li>
											<a href="{{category_url($kat2)}}" class="active" id="side-nav">{{$kat2->nama}}</a>
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
				<div class="sidebar-items">{{pluginSidePowerup()}}</div>
				<div class="special">
					@foreach(vertical_banner() as $item)
					<div>
						<a href="{{url($item->url)}}">
							<img width="213" align="middle" src="{{url(banner_image_url($item->gambar))}}" alt="Info Promo" />
						</a>
					</div>
					@endforeach
				</div>
				<br>
				<div class="form">
					<h5>Search</h5>
					<form action="{{url('search')}}" method="post" class="form-inline" role="form">
						<div class="form-group">
							<input type="text" class="form-control" id="search" name="search" placeholder="Cari" required><button type="submit" class="btn btn-info">Cari</button>
						</div>
					</form>
				</div>
				<br>
			</div>
		</div>
		<div class="sep-bor"></div>
	</div>
</div>