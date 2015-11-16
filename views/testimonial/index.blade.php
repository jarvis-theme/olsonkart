<div class="page-title">
	<div class="container">
		<h2><i class="icon-desktop color"></i> Testimonial <small></small></h2>
		<hr />
	</div>
</div>

<div class="faq">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel-group" id="accordion">
					@foreach (list_testimonial() as $items)  
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<i class="icon-user"></i>&nbsp; {{$items->nama}}
							</h4>
						</div>
						<div class="panel-collapse collapse in">
							<div class="panel-body">"{{$items->isi}}"</div>
						</div>
					</div>
					@endforeach
				<div class="row"><div class="col-md-12">{{list_testimonial()->links()}}</div></div>
			</div>

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
		<div class="sep-bor"></div>
	</div>
</div>