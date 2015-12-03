<div class="blocky">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="reg-login-info">
					<h2>Login & nikmati kemudahan berbelanja <span class="color">!!!</span></h2>
					<h3>Sudah Punya Akun ?</h3>
					<p>Silahkan login ke akun anda untuk dapat berbelanja dengan mudah, cepat dan dapat memantau status pesanan anda.</p><br>
					<a href="{{url('member/')}}" class="btn btn-danger">Login</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="register-login">
					<div class="cool-block">
						<div class="cool-block-bor">
							<h3>Register</h3>
							{{Form::open(array('url'=>'member','method'=>'post','class'=>'form-horizontal'))}}
								<div class="form-group">
									<label for="inputName" class="col-lg-2 control-label">Nama</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="inputName" name="nama" value="{{Input::old('nama')}}" required>
									</div>
								</div>                           
								<div class="form-group">
									<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
									<div class="col-lg-10">
										<input type="email" class="form-control" id="inputEmail1" name='email' value='{{Input::old("email")}}' required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword1" class="col-lg-2 control-label">Password</label>
									<div class="col-lg-10">
										<input type="password" class="form-control" id="inputPassword1" name="password"  required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword2" class="col-lg-2 control-label">Konfirmasi Password</label>
									<div class="col-lg-10">
										<input type="password" class="form-control" id="inputPassword2" name="password_confirmation" required>
									</div>
								</div>
								<div class="form-group">
									<label for="dropdown" class="col-lg-2 control-label">Negara</label>
									<div class="col-lg-10">
										{{Form::select('negara',array('' => '-- Pilih Negara --') + $negara,Input::old(''),array('required', 'id'=>"negara", "data-rel"=>"chosen", "class"=>"form-control"))}}
									</div>
								</div>
								<div class="form-group">
									<label for="dropdown" class="col-lg-2 control-label">Provinsi</label>
									<div class="col-lg-10">
										{{Form::select('provinsi',array('' => '-- Pilih Provinsi --') + $provinsi, Input::old("provinsi"),array('required', 'id'=>"provinsi", "data-rel"=>"chosen", "class"=>"form-control"))}}
									</div>
								</div>
								<div class="form-group">
									<label for="dropdown" class="col-lg-2 control-label">Kota</label>
									<div class="col-lg-10">
										{{Form::select('kota',array('' => '-- Pilih Kota --') + $kota, Input::old("kota"),array('required', 'id'=>"kota", "data-rel"=>"chosen", "class"=>"form-control"))}}
									</div>
								</div>
								<div class="form-group">
									<label for="inputComment" class="col-lg-2 control-label">Alamat</label>
									<div class="col-lg-10">
										<textarea id="inputComment" class="form-control" rows="3" name='alamat' required>{{Input::old("alamat")}}</textarea>
									</div>
								</div> 
								<div class="form-group">
									<label for="inputpos1" class="col-lg-2 control-label">Kode Pos</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="inputpos1" name='kodepos' value='{{Input::old("kodepos")}}' >
									</div>
								</div>                      
								<div class="form-group">
									<label for="inputpho1" class="col-lg-2 control-label">Telepon</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="inputpho1" name='telp' value='{{Input::old("telp")}}' required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputpho1" class="col-lg-2 control-label">Captcha</label>
									<div class="col-lg-10">
										{{ HTML::image(Captcha::img(), 'Captcha image') }}
										{{Form::text('captcha')}}
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<div class="checkbox">
											<label>
												<input name='readme' value="1" type="checkbox"> Saya telah membaca dan menyetujui <a href="{{url('service')}}" target="_blank" >Syarat & Ketentuan</a>
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<button type="submit" class="btn btn-info">Register</button>
										<button type="reset" class="btn btn-default">Reset</button>
									</div>
								</div>
							{{Form::close()}}
						</div>
					</div>   
				</div>
			</div>
		</div>
		<div class="sep-bor"></div>
   </div>
</div>