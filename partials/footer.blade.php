<div class="clients blocky">
	<div class="container">
		<div class="row"></div>
	</div>
</div>

<footer>
	<div class="container">
		<div class="row">
			@foreach(all_menu() as $key=>$group)
				<div class="col-md-3 col-sm-3">
					<div class="fwidget">
						<h4>{{$group->nama}}</h4>
						<hr />
						<ul>
							<li>
								@foreach($group->link as $key=>$link)
								<a class="invarseColor" href='{{menu_url($link)}}'><i class="icon-caret-right"></i> {{$link->nama}}</a>
								<br>
								@endforeach
							</li>
						</ul>
					</div>
				</div>
			@endforeach
			<div class="col-md-3 col-sm-3">
				<div class="fwidget">
					<h4>Hubungi Kami</h4>
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
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="client">
					@foreach(list_banks() as $value) 
                        @if($value->status == 1)
						<img src="{{bank_logo($value)}}" alt="{{$value->bankdefault->nama}}" class="img-responsive logo-bank" title="{{$value->bankdefault->nama}}" />
						@endif
					@endforeach	
					@foreach(list_payments() as $pay)
                        @if($pay->nama == 'paypal' && $pay->aktif == 1)
                        <img src="{{url('img/bank/paypal.png')}}" alt="Paypal" class="img-responsive logo-bank" title="Paypal" />
                        @endif
						@if($pay->nama == 'ipaymu' && $pay->aktif == 1)
						<img src="{{url('img/bank/ipaymu.jpg')}}" alt="support ipaymu" class="img-responsive logo-bank" title="iPaymu" />
						@endif
						@if($pay->nama == 'bitcoin' && $pay->aktif == 1)
						<img src="{{url('img/bitcoin.png')}}" alt="bitcoin" title="Bitcoin" />
						@endif
					@endforeach
					@if(count(list_dokus()) > 0 && list_dokus()->status == 1)
					<img src="{{url('img/bank/doku.jpg')}}" alt="support doku myshortcart" class="img-responsive logo-bank" title="Doku" />
					@endif
					@if(count(list_veritrans()) > 0 && list_veritrans()->status == 1 && list_veritrans()->type == 1)
					<img src="{{url('img/bank/veritrans.png')}}" alt="Veritrans" class="img-responsive logo-bank" title="Veritrans">
					@endif
				</div>
			</div>
		</div>
		<hr />
		<div class="copy text-center">
			{{-- Theme::place('title') --}} Copyright {{date('Y')}} © - Powered by <a target="_blank" href="http://jarvis-store.com">Jarvis Store</a>
		</div>
	</div>
</footer>
{{ pluginPowerup() }} 