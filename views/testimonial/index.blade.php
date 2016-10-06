<div class="page-title">
	<div class="container">
		<h1 class="testimonial-title"><i class="icon-comments-alt color"></i> Testimonial</h1>
		<hr />
	</div>
</div>

<div class="about-us">
	<div class="container">
		<div class="about-team">
			<div class="row">
				@foreach (list_testimonial() as $items)  
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="cwell">
						<div class="details">
							<div class="desig pull-left">
								<p class="name"><i class="icon-user"></i> {{ ucwords(strtolower($items->nama)) }}</p>
							</div>
							<div class="asocial pull-right">
								<em><i class="icon-calendar"></i> {{ date_format($items->created_at, "d F Y") }} <i class="icon-time"></i>{{ date_format($items->created_at, "H:i") }}</em>
							</div>
							<div class="clearfix"></div>
							<p class="testi-desc">{{ $items->isi }}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">{{list_testimonial()->links()}}</div>
			</div>
		</div>
		<div class="sep-bor"></div>
		<div class="respond">
			<h3 id="testimo-title">Buat Testimonial</h3>
			<form method="post" action="{{url('testimoni')}}" role="form">
				<div class="form-group">
					<label for="name">Nama</label>
					<input type="text" class="form-control" name="nama" id="name" required >
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Testimonial</label>
					<textarea name="testimonial" class="form-control" rows="3" required></textarea>
				</div>
				<button type="submit" class="btn btn-info">Kirim Testimonial</button>
				<button type="reset" class="btn btn-default">Reset</button>
			</form>
		</div>
	</div>
</div>