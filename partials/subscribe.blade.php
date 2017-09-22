<div class="catchy blocky">
    <div class="catchy-inner1">
        <div class="catchy-inner2">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="catchy-subscribe" id="mc_embed_signup">
                            <h3>Join Us!</h3>
                            <p>Jangan lewatkan update terbaru dari toko kami dengan bergabung di mailing list kami – sign up to our newsletter now.</p>
                            <br />
                            <form action="{{@$mailing->action}}" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form newsletter" class="form-inline validate" target="_blank" role="form" novalidate>
                                <div class="form-group">
                                    <input type="email" placeholder="Email anda" name="EMAIL" class="form-control required email" id="newsletter mce-EMAIL" {{ @$mailing->action==''?'disabled="disabled" style=cursor:default':'' }}>
                                </div>
                                <button type="submit" class="btn btn-danger" {{ @$mailing->action==''?'disabled="disabled"':'' }}>Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="report">
                            <div class="report-bor">
                                <div class="row subscribes">
                                    <!-- Report data starts -->
                                    <span>{{short_description(about_us()->isi,200)}}</span>
                                </div>
                                
                                <hr class="hidden-xs">
                                
                                <div class="row center">
                                    <div class="social">
                                    @if($sosial->fb)
                                        <a target="_blank" class="facebook" href="{{URL::to($sosial->fb)}}" title="Facebook"><i class="icon-facebook"></i></a>
                                    @endif
                                    @if($sosial->tw)
                                        <a target="_blank" class="twitter" href="{{URL::to($sosial->tw)}}" title="Twitter"><i class="icon-twitter"></i></a>
                                    @endif
                                    @if($sosial->gp)
                                        <a target="_blank" href="{{URL::to($sosial->gp)}}" class="google-plus" title="Google Plus"><i class="icon-google-plus"></i></a>
                                    @endif
                                    @if($sosial->ig)
                                        <a target="_blank" class="linkedin" href="{{URL::to($sosial->ig)}}" title="Instagram"><i class="icon-instagram"></i></a>
                                    @endif
                                    @if($sosial->pt)
                                        <a target="_blank" class="pinterest" href="{{URL::to($sosial->pt)}}" title="Pinterest"><i class="icon-pinterest"></i></a>
                                    @endif
                                    @if($sosial->picmix)
                                        <a target="_blank" href="{{url($sosial->picmix)}}" title="Picmix">
                                            <img class="picmix" src="//d3kamn3rg2loz7.cloudfront.net/blogs/event/icon-picmix.png">
                                        </a>
                                    @endif 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>