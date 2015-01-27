      <!-- Page title -->
      <div class="page-title">
         <div class="container">
            <h2><i class="icon-book color"></i> Blog </h2>
            <hr />
         </div>
      </div>
      <!-- Page title -->
      
      <!-- Page content -->
      
      <div class="blog">
         <div class="container">
            <div class="row">
                  <div class="col-md-8">
                           <div class="posts">
                           
                              <!-- Each posts should be enclosed inside "entry" class" -->
                              <!-- Post one -->
                              @foreach($data as $key=>$value)
	                              <div class="entry">
	                                 <h2><a href="{{URL::to("blog/".$value->slug)}}">{{$value->judul}}</a></h2>
	                                 
	                                 <!-- Meta details -->
	                                 <div class="meta">
	                                    <i class="icon-calendar"></i> {{waktuTgl($value->updated_at)}} 
	                                 </div>
	                                 
	                                 <!-- Thumbnail -->
	                                 <!-- <div class="bthumb">
	                                    <a href="#"><img src="img/back1.jpg" alt="" class="img-responsive" /></a>
	                                 </div> -->
	                                 
	                                 <!-- Para -->
	                                 <p>{{shortDescription($value->isi, 330)}}</p>

	                                 <!-- Read more -->
	                                 <a href="{{URL::to("blog/".$value->slug)}}" class="btn btn-info">Read More</a>
	                              </div>
                              @endforeach
                              
                              <!-- Pagination -->
                              <ul class="pagination">
                                {{$data->links()}}
                              </ul> 
                              
                              <div class="clearfix"></div>
                              
                           </div>
                        </div>                        
                        <div class="col-md-4">

                            <!-- Sidebar 1 -->

                           <div class="sidebar">
                              <!-- Widget -->
                              <div class="widget">
                                 <h4>Blog Terbaru</h4>
                                 <ul>
                                 	@foreach(recentBlog() as $recent)
	                                 <li><a href="{{slugBlog($recent)}}">{{$recent->judul}}</a></li>
	                                 @endforeach
                                 </ul>
                              </div>
                              <div class="widget">
                                 <h4>Kategori</h4>
                                 <ul>
                                 	@foreach($categoryList as $key=>$value)
				                        <li><a href="{{URL::to('blog/category/'.generateSlug($value))}}">{{$value->nama}}</a></li>
				                    @endforeach
                                 </ul>
                              </div>
                              <div class="widget" style="text-align: center;">
                              	<h4>Banner</h4>
                                 @foreach(getBanner(1) as $item)
									<div><a href="{{URL::to($item->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$item->gambar)}}" /></a></div>
								 @endforeach
                              </div>                              
                           </div>                                                
                        </div>

                        
    </div>
         </div>
      </div>