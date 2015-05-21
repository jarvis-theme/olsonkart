<div class="shop-items blocky">
    <div class="container">
      
     <div class="row">

        @foreach(list_product() as $key=>$myproduk)
        <!-- Item #1 -->
        <div class="col-md-3 col-sm-4 col-xs-6">
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
              <a href="{{product_url($myproduk)}}"><img src="{{url(product_image_url($myproduk->gambar1))}}" alt="{{$myproduk->nama}}" class="img-responsive"/></a>
            </div>
            <!-- Item details -->
            <div class="item-details">
              <!-- Name -->
              <h5><a href="{{product_url($myproduk)}}">{{$myproduk->nama}}</a></h5>
              <div class="clearfix"></div>
              <!-- Para. Note more than 2 lines. -->
              <hr />
              <!-- Price -->
              <div class="item-price pull-left" style="width:auto;padding: 0 3px;">{{price($myproduk->hargaJual,$matauang)}}</div>
              <!-- Add to cart -->
              <div class="pull-right"><a href="{{product_url($myproduk)}}" class="btn btn-danger btn-sm">Lihat Produk</a></div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        @endforeach


      </div>
    </div>
  </div>

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
                      @foreach(new_product() as $key=>$myproduk)
                      <li>
                         <a href="{{product_url($myproduk)}}"><img style="width: auto" src="{{url(product_image_url($myproduk->gambar1))}}" alt="" class="img-responsive"/></a>
                         <div class="carousel_caption">
                            <h5><a href="{{product_url($myproduk)}}">{{$myproduk->nama}}</a></h5>
                            <p>{{short_description($myproduk->deskripsi,100)}}...</p>
                            <a href="{{product_url($myproduk)}}" class="btn btn-info btn-sm"> {{price($myproduk->hargaJual,$matauang)}}</a>
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