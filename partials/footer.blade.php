	<!-- Clients starts -->
	<div class="clients blocky">
		<div class="container">
			<div class="row">
						 
			</div>
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
					@if($key!=0)
					<div class="col-md-4 col-sm-4">
						<div class="fwidget">
							<h4>{{$group->nama}}</h4>
							<hr />
							<ul>
								<li>
									@foreach($group->link as $key=>$link)
										@if($link->halaman=='1')
											<a class="invarseColor" href={{"'".URL::to("halaman/".strtolower($link->linkTo))."'"}}><i class="icon-caret-right"></i> {{$link->nama}}</a>
										@elseif($link->halaman=='2')
											<a class="invarseColor" href={{"'".URL::to("blog/".strtolower($link->linkTo))."'"}}><i class="icon-caret-right"></i> {{$link->nama}}</a>
										@elseif($link->url=='1')
											<a class="invarseColor" href="http://{{strtolower($link->linkTo)}}"><i class="icon-caret-right"></i> {{$link->nama}}</a>
										@else
											<a class="invarseColor" href={{"'".URL::to(strtolower($link->linkTo))."'"}}><i class="icon-caret-right"></i> {{$link->nama}}</a>
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
							<!-- 
							<p>           5th Stage, Koramangala, Madiwala,</p>
							<p>           Bangalore - 493922, Karananana.</p> -->
							<p><i class="icon-phone color contact-icon"></i> {{$kontak->telepon}}</p>
							<p><i class="icon-envelope color contact-icon"></i> <a href="mailto:{{$kontak->email}}">{{$kontak->email}}</a></p>
						</div>
					</div>
				</div>

			</div>
			<hr/>
			<div class="row">
			@if(!empty($bank))	
				@foreach($bank as $value)	
					<div class="col-md-2 col-sm-4 col-xs-6">
						<div class="client">
							<img style="margin: 0 auto;" src="{{URL::to('img/'.$value->bankdefault->logo)}}" alt="{{$value->name}}" class="img-responsive" />
						</div>
					</div>
				@endforeach	
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
