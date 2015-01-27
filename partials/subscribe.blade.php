<!-- Catchy starts -->
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
                             <div class="form-group"><input type="email" value="" placeholder="Enter your email" name="EMAIL" class="form-control required email" id="newsletter mce-EMAIL">
                             </div>
                             <button type="submit" {{ @$mailing->action==''?'disabled="disabled"':'' }} class="btn btn-danger">Subscribe</button>
                           </form>

                        </div>
                     </div>
                     <div class="col-md-7">
                     
                        <div class="report">
                           <div class="report-bor">
                              <div class="row" style="margin: 0 20px;">
                                 <!-- Report data starts -->
                                 <span>{{--shortDescription($aboutUs[1]->isi,200)--}}<a href="{{URL::to('halaman/about-us')}}"></a></span>

                              </div>
                              
                              <hr class="hidden-xs">
                              
                              <div class="row" style="text-align: center">
                                 
                                 <div class="social">
                                    @if($sosial->fb)
                                        <a target="_blank" class="facebook" href="{{URL::to($sosial->fb)}}"><i class="icon-facebook"></i></a>
                                    @endif
                                    @if($sosial->tw)
                                        <a target="_blank" class="twitter" href="{{URL::to($sosial->tw)}}"><i class="icon-twitter"></i></a>
                                    @endif
                                    @if($sosial->gp)
                                        <a target="_blank" href="{{URL::to($sosial->gp)}}" class="google-plus"><i class="icon-google-plus"></i></a>
                                    @endif
                                    @if($sosial->ig)
                                        <a target="_blank" class="linkedin" href="{{URL::to($sosial->ig)}}"><i class="icon-linkedin"></i></a>
                                    @endif
                                    @if($sosial->pt)
                                        <a target="_blank" class="pinterest" href="{{URL::to($sosial->pt)}}"><i class="icon-pinterest"></i></a>
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
      <!-- Catchy ends -->