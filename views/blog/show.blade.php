    <div class="page-title">
        <div class="container">
            <h2><i class="icon-book color"></i> Blog <small></small></h2><hr />
        </div>
    </div>
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="posts">
                        <div class="entry">
                            <h2>{{$detailblog->judul}}</h2>
                            <div class="meta">
                                <i class="icon-calendar"></i> {{waktuTgl($detailblog->updated_at)}}  <i class="icon-folder-open"></i> <a href="{{url(blog_category_url($detailblog->kategori))}}">{{$detailblog->kategori->nama}}</a>
                            </div>
                            <p>{{$detailblog->isi}}</p>
                        </div>
                        <div class="navigation">
                            @if(isset($next))   
                            <div class="pull-right"><a href="{{$next->slug}}" class="btn btn-info">Artikel Selanjutnya &raquo;</a></div>
                            @endif
                            @if(isset($prev))   
                            <div class="pull-left"><a href="{{$prev->slug}}" class="btn btn-info">&laquo; Artikel Sebelumnya</a></div>
                            @endif  
                        </div><br>
                        <div class="respond">
                            <div class="title"><!-- <h5>Post Reply</h5> -->
                                {{$fbscript}}
                                {{fbcommentbox(blog_url($detailblog), '100%', '5', 'light')}} 
                            </div>
                        </div>
                    </div>                        
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="widget">
                            <h4>Blog Terbaru</h4>
                            <ul>
                                @foreach(recentBlog() as $recent)
                                <li><a href="{{blog_url($recent)}}">{{$recent->judul}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget">
                            <h4>Kategori</h4>
                            <ul>
                                @foreach(list_blog_category() as $key=>$value)
                                <li><a href="{{blog_category_url($value)}}">{{$value->nama}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        @if(count(vertical_banner()) > 0)
                        <div class="widget center">
                            <!-- <h4 id="title-banner">Banner</h4> -->
                            @foreach(vertical_banner() as $item)
                            <div>
                                <a href="{{url($item->url)}}">
                                    <img src="{{url(banner_image_url($item->gambar))}}" alt="Info Promo" />
                                </a>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>                                                
                </div>
            </div>
        </div>