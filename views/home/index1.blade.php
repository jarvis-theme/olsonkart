<!-- Page title -->
<div class="page-title">
	<div class="container">
		<h2><!-- <i class="icon-desktop color"></i> Produk Kami <small></small> --></h2>
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
					<li class="active"><a href="{{url('home')}}">Produk</a></li>
				</ul>

				<!-- Items List starts -->
				<div class="row">
					<!-- Item #1 -->
					@foreach(list_product() as $myproduk)
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="item">
							<!-- Use the below link to put HOT icon -->
							@if(is_outstok($myproduk))
								<div class="item-icon"><span class="label label-default">KOSONG</span></div>
							@else
								@if(is_terlaris($myproduk))
								<div class="item-icon"><span class="label label-danger">HOT</span></div>
								@endif
								@if(is_produkbaru($myproduk))
								<div class="item-icon"><span class="label label-info">BARU</span></div>
								@endif
							@endif
							<!-- Item image -->
							<div class="item-image">
								<a href="{{product_url($myproduk)}}">
									{{HTML::image(url(product_image_url($myproduk->gambar1, 'medium')), $myproduk->nama, array('class'=>"img-responsive", "style"=>"width:auto"))}}
								</a>
							</div>
							<!-- Item details -->
							<div class="item-details">
								<!-- Name -->
								<h5><a href="{{product_url($myproduk)}}">{{shortName($myproduk->nama,20)}}</a></h5>
								<div class="clearfix"></div>
								<!-- Para. Note more than 2 lines. -->
								<p>{{short_description($myproduk->deskripsi, 50)}}</p>
								<hr />
								<!-- Price -->
								<div class="item-price pull-left" style="width:auto;padding: 0 3px;">
									{{price($myproduk->hargaJual)}}
								</div>
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
						{{list_product()->links()}}
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
									<a href="{{url(category_url($kat))}}">{{shortName($kat->nama,20)}}</a>
									@if($kat->anak->count())
									<ul id="{{strtolower($kat->nama)}}" >
									@foreach($kategori as $kat2)
										@if ($kat2->parent==$kat->id)
										<li>
											<a href="{{category_url($kat2)}}" class="active" style="text-decoration: none;">{{$kat2->nama}}</a>
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
					{{pluginSidePowerup()}}
				</div>

				<div class="special">
					@foreach(vertical_banner() as $item)
					<div>
						<a href="{{url($item->url)}}">
							<img width="213" align="middle" src="{{url(banner_image_url($item->gambar))}}" />
						</a>
					</div>
					@endforeach
				</div>
				<br>
				<div class="form">
					<h5>Search</h5>
					<form action="{{url('search')}}" method="post" class="form-inline" role="form">
						<div class="form-group">
							<input type="text" class="form-control" id="search" name="search" placeholder="Cari"><button type="submit" class="btn btn-info">Cari</button>
						</div>
					</form>
				</div>
				<br>
			</div>
		</div>
		<div class="sep-bor"></div>
	</div>
</div>