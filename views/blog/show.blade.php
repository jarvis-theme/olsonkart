<!-- Page title -->
      <div class="page-title">
         <div class="container">
            <h2><i class="icon-book color"></i> Blog <small></small></h2>
            <hr />
         </div>
      </div>
      <!-- Page title -->
      
      <!-- Page content -->
      
      <div class="blog">
         <div class="container">
            <div class="row">
                  <div class="col-md-8 col-sm-8">
                           <div class="posts">
                           
                              <!-- Each posts should be enclosed inside "entry" class" -->
                              <!-- Post one -->
                              <div class="entry">
                                 <h2><a href="#">{{$detailblog->judul}}</a></h2>
                                 
                                 <!-- Meta details -->
                                 <div class="meta">
                                    <i class="icon-calendar"></i> {{waktuTgl($detailblog->updated_at)}}  <i class="icon-folder-open"></i> <a href="{{URL::to('blog/category/'.generateSlug($detailblog->kategori))}}">{{$detailblog->kategori->nama}}</a> 
                                 </div>
                                 
                                 <!-- Thumbnail --><!-- 
                                 <div class="bthumb">
                                    <a href="#"><img src="img/back1.jpg" alt="" class="img-responsive" /></a>
                                 </div> -->
                                 
                                 <!-- Para -->
                                 <p>{{$detailblog->isi}}</p>

                              </div>
                            
                              
                              <!-- Comment posting -->
                              
                              <div class="respond">
                                 <div class="title"><h5>Post Reply</h5></div>
                                 
                                    {{$fbscript}}
							{{fbcommentbox(slugBlog($detailblog), '640px', '5', 'light')}}
                                 
                              </div>
                              
                              <!-- Navigation -->
                              
                              <div class="navigation ">  
                                   

                                    @if(isset($next))
                                        <div class="pull-right"><a href="{{$next->slug}}" class="btn btn-info">Next Post &raquo;</a></div>
                                    @endif
                                    @if(isset($prev))
                                        <div class="pull-left"><a href="{{$prev->slug}}" class="btn btn-info">&laquo; Previous Post</a></div>
                                    @endif
                                   
                              </div>

                              
   
                              
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
                                <h4 style="margin-left: 0">Banner</h4>
                                 @foreach(getBanner(1) as $item)
                                    <div><a href="{{URL::to($item->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$item->gambar)}}" /></a></div>
                                 @endforeach
                              </div>                              
                           </div>                                                
                        </div>
                        
    </div>
         </div>
      </div>