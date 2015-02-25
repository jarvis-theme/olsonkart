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
							 
								 <!-- Items List starts -->
									@if($jumlahCari!=0)
										 <div class="row">


												<!-- Item #1 -->
											 @foreach($hasilpro as $myproduk)
												<div class="col-md-4 col-sm-4 col-xs-6">
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
															<a href="{{slugProduk($myproduk)}}">{{HTML::image(getPrefixDomain().'/produk/'.$myproduk->gambar1, $myproduk->nama, array('class="img-responsive" style="width:auto"'))}}</a>
														</div>
														<!-- Item details -->
														<div class="item-details">
															<!-- Name -->
															<h5><a href="single-item.html">{{shortName($myproduk->nama,20)}}</a></h5>
															<div class="clearfix"></div>
															<!-- Para. Note more than 2 lines. -->
															<p style="min-height:80px;">{{shortDescription($myproduk->deskripsi,100)}}...</p>
															<hr />
															<!-- Price -->
															<div class="item-price pull-left" style="width:auto;padding: 0 3px;">{{jadiRupiah($myproduk->hargaJual)}}</div>
															<!-- Add to cart -->
															<div class="pull-right"><a href="{{slugProduk($myproduk)}}" class="btn btn-danger btn-sm">Lihat</a></div>
															<div class="clearfix"></div>
														</div>
													</div>
												</div>
												@endforeach

											</div>

									<!-- Items List ends -->

								@else

										<div class="span12">

												<div class="alert alert-error">
														<button type="button" class="close" data-dismiss="alert">&times;</button>
														<h4>Oh, We're So Sorry</h4>
														There is no product that matches the search criteria.
												</div><!--end alert-->

												<div class="search">
														<div class="titleHeader clearfix">
																<h3>Search</h3>
														</div>

														<div class="well well-small">
																<form method="post" action="{{URL::to('search')}}" class="form-inline">
																		<input name="search" type="text" class="span3" placeholder="Type Search Term...">
																		&nbsp;&nbsp;
																		
																		<button type="submit" class="btn btn-primary"><i class="icon-search"></i></button>
																</form><!--end form-->
														</div><!--end well-->

												</div><!--end search-->
										</div><!--end span3-->

								@endif
							 
							 </div>
							 
							 
							 <div class="col-md-3 col-md-pull-9">
										
									<div class="sidey">
										 <ul class="nav">
												<li><a href="{{URL::to('/')}}"><i class="icon-home"></i> &nbsp;Home</a>

												@foreach ($kategori as $kat)
														@if($kat->parent=='0')
																<li><a href="{{URL::to('category/'.Str::slug($kat->nama))}}">{{shortName($kat->nama,20)}}</a><ul id="<?php echo strtolower($kat->nama);?>" >
																		@foreach($kategori as $kat2)
																				@if ($kat2->parent==$kat->id)
																						<li><a href="{{URL::to('category/'.Str::slug($kat2->nama))}}" class="active" style="text-decoration: none;">{{$kat2->nama}}</a>
																						</li>
																				@endif
																		@endforeach
																</ul></li>
														@endif
												@endforeach

										 </ul>
									</div>
									


									 <div class="special">
												 @foreach(getBanner(1) as $item)
													<div><a href="{{URL::to($item->url)}}"><img width="213" src="{{URL::to(getPrefixDomain().'/galeri/'.$item->gambar)}}" /></a></div>
												@endforeach
										</div>
										<br>
										<div class="form">
											<h5>Search</h5>
											<form action="{{URL::to('search')}}" method="post" class="form-inline" role="form">
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






