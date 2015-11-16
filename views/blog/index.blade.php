    <div class="page-title">
        <div class="container">
            <h2><i class="icon-book color"></i> Blog </h2>
            <hr />
        </div>
    </div>
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="posts">
                    @if(count(list_blog(null, @$blog_category)) > 0)
                        @foreach(list_blog(null, @$blog_category) as $key=>$value)
                        <div class="entry">
                            <h2><a href="{{blog_url($value)}}">{{$value->judul}}</a></h2>
                            <div class="meta">
                                <i class="icon-calendar"></i> {{waktuTgl($value->updated_at)}}  <i class="icon-folder-open"></i> <a href="{{url(blog_category_url($value->kategori))}}">{{$value->kategori->nama}}</a>
                            </div>
                            <p>{{shortDescription($value->isi, 330)}}</p>
                            <a href="{{blog_url($value)}}" class="btn btn-info">Selengkapnya</a>
                        </div>
                        @endforeach
                        <ul class="pagination">{{list_blog(null, @$blog_category)->links()}}</ul>
                    @else
                        <article><p class="center"><i>Blog tidak ditemukan</i></p></article>
                    @endif
                        <div class="clearfix"></div>
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
                            <!-- <h4>Banner</h4> -->
                            @foreach(vertical_banner() as $item)
                            <a href="{{url($item->url)}}"><img src="{{url(banner_image_url($item->gambar))}}" alt="Info Promo" /></a>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>