<!-- Page title -->
      <div class="page-title">
         <div class="container">
            <h2><i class="icon-desktop color"></i> {{$data->judul}} </h2>
            <hr />
         </div>
      </div>
      <!-- Page title -->
      
      <!-- Page content -->
      
      <div class="about-us blocky">
         <div class="container">
            <div class="row">

               <div class="col-md-8 col-sm-7">               
                  <h4>{{$data->judul}}</h4>
                  {{$data->isi}}
                  <br />
               </div>

               <div class="col-md-3 col-sm-2">
                  <h4>Banner</h4>
                  @foreach(getBanner(1) as $item)
                    <div style="text-align: center;"><a href="{{URL::to($item->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$item->gambar)}}" /></a></div>
                  @endforeach
                  <br />
               </div>
            </div>
            <div class="sep-bor"></div>
            
         </div>
      </div>