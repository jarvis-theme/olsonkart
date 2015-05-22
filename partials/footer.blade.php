<!-- Clients starts -->
<div class="clients blocky">
	<div class="container">
    	<div class="row"></div>
	</div>
</div>
<!-- Clients ends -->

<!-- Footer starts -->
<footer>
    <div class="container">
			<div class="row">
                <!-- <div class="col-md-3 col-sm-3">
                    <div class="fwidget">
                       <h4>About</h4>
                       <hr />
                    </div>
                </div> -->

                @foreach($tautan as $key=>$group)
                    @if($key!=2)
                	<div class="col-md-4 col-sm-4">
                    	<div class="fwidget">
                    		<h4>{{$group->nama}}</h4>
                    		<hr />
                    		<ul>
	                       		<li>
	                            @foreach($group->link as $key=>$link)
	                                @if($link->halaman=='1')
	                                	@if($link->linkTo == 'halaman/about-us')
                                    	<a class="invarseColor" href='{{url(strtolower($link->linkTo))}}'><i class="icon-caret-right"></i> {{$link->nama}}</a>
                                        @else
                                    	<a class="invarseColor" href='{{url("halaman/".strtolower($link->linkTo))}}'><i class="icon-caret-right"></i> {{$link->nama}}</a>
                                        @endif
	                                
	                                @elseif($link->halaman=='2')
                                    <a class="invarseColor" href='{{url("blog/".strtolower($link->linkTo))}}'><i class="icon-caret-right"></i> {{$link->nama}}</a>
	                                
	                                @elseif($link->url=='1')
                                    <a class="invarseColor" href="{{strtolower($link->linkTo)}}"><i class="icon-caret-right"></i> {{$link->nama}}</a>
	                                
	                                @else
                                    <a class="invarseColor" href='{{url(strtolower($link->linkTo))}}'><i class="icon-caret-right"></i> {{$link->nama}}</a>
	                                @endif
	                                <br>
	                            @endforeach
	                    		</li>
                    		</ul>
                    	</div>
                	</div>    
                	@endif    
                @endforeach
                <div class="col-md-4 col-sm-4">
					<div class="fwidget">
						<h4>Get In Touch</h4>
						<hr />
						<div class="address">
							<p><i class="icon-home color contact-icon"></i> {{$kontak->alamat}}. </p>
							<p><i class="icon-phone color contact-icon"></i> {{$kontak->telepon}}</p>
							<p><i class="icon-envelope color contact-icon"></i> <a href="mailto:{{$kontak->email}}">{{$kontak->email}}</a></p>
						</div>
					</div>
				</div>

			</div>
			<hr/>
			<div class="row">
			@if(!empty($bank))	
				@foreach(list_banks() as $value)	
				<div class="col-md-2 col-sm-4 col-xs-6">
					<div class="client">
						<img style="margin: 0 auto; padding-top: 5px;" src="{{bank_logo($value)}}" alt="{{$value->name}}" class="img-responsive" />
					</div>
				</div>
				@endforeach	
				@if(count(list_payments()) > 0)
					@foreach(list_payments() as $pay)
						@if($pay->nama == 'ipaymu' && $pay->aktif == 1)
						<!-- <div class="col-md-2 col-sm-4 col-xs-6">
							<div class="client">
								<img style="margin: 0 auto; padding-top: 5px;" src="{{url('img/bank/ipaymu.jpg')}}" alt="support ipaymu" class="img-responsive" />
							</div>
						</div> -->
						@endif
					@endforeach
				@endif
				@if(count(list_dokus()) > 0 && list_dokus()->status == 1)
				<div class="col-md-2 col-sm-4 col-xs-6">
					<div class="client">
						<img style="margin: 0 auto; padding-top: 5px;" src="{{url('img/bank/doku.jpg')}}" alt="support doku myshortcart" class="img-responsive" />
					</div>
				</div>
				@endif
			@endif	
			</div>
			<hr />
			<div class="copy text-center">
				{{ Theme::place('title') }} Copyright {{date('Y')}} © - Powered by <a target="_blank" href="http://jarvis-store.com">Jarvis Store</a>
			</div>
		</div>
	</footer>
	<!-- Footer ends -->
{{pluginPowerup()}}