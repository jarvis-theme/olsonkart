<div class="shop-items blocky">
    <div class="container">
        <div class="row">
            @foreach(home_product() as $key=>$myproduk)
            <div class="col-md-3 col-sm-4 col-xs-12" id="home-product">
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
                            <img src="{{product_image_url($myproduk->gambar1, 'medium')}}" alt="{{$myproduk->nama}}" class="img-responsive" title="{{$myproduk->nama}}" />
                        </a>
                    </div>
                    <div class="item-details">
                        <h5 id="title-desc"><a href="{{product_url($myproduk)}}">{{short_description($myproduk->nama,40)}}</a></h5>
                        <div class="clearfix"></div>
                        <!-- Para. Note more than 2 lines. -->
                        <p id="desc-product">{{shortDescription($myproduk->deskripsi,100)}}</p>
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
    </div>
</div>
@if(new_product()->count() > 0)
<div class="recent-posts blocky">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title"><h4><i class="icon-shopping-cart color"></i> &nbsp;Whats New in Our Shop</h4></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="my_carousel">
                            <div class="carousel_nav pull-right">
                                <a class="prev" id="car_prev" href="#"><i class="icon-chevron-left"></i></a>
                                <a class="next" id="car_next" href="#"><i class="icon-chevron-right"></i></a>
                            </div>
                            <div class="clearfix"></div>
                            <ul id="carousel_container">
                                @foreach(new_product() as $key=>$myproduk)
                                <li id="new-item">
                                    <a href="{{product_url($myproduk)}}">
                                        <img id="img-home1" src="{{url(product_image_url($myproduk->gambar1, 'medium'))}}" alt="{{$myproduk->nama}}" class="img-responsive" title="{{$myproduk->nama}}" />
                                    </a>
                                    <div class="carousel_caption">
                                        <h5><a href="{{product_url($myproduk)}}">{{short_description($myproduk->nama,30)}}</a></h5>
                                        <a href="{{product_url($myproduk)}}" class="btn btn-info btn-sm"> {{price($myproduk->hargaJual)}}</a>
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