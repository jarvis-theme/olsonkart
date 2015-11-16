<div class="blocky">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="reg-login-info">
                    <h2>Login & nikmati kemudahan berbelanja <span class="color">!!!</span></h2>
                    <h3>Pelanggan Baru</h3>
                    <p>Dengan membuat akun di toko kami anda dapat berbelanja dengan mudah, cepat dan dapat melihat status pesanan anda.</p><br>
                    <a href="{{url('member/create')}}" class="btn btn-danger">Daftar</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="register-login">
                    <div class="cool-block">
                        <div class="cool-block-bor">                        
                            <h3>Login</h3>
                            {{Form::open(array('url'=>'member/login','method'=>'post','class'=>'form-horizontal'))}}
                                <div class="form-group">
                                    <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="email" class="form-control" id="inputEmail1" name='email' value='{{Input::old("email")}}' required placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                                    <div class="col-lg-10">
                                        <input type="password" class="form-control" id="inputPassword1" name="password" placeholder="Password">
                                        <a href="{{url('member/forget-password')}}" id="forget">Lupa password?</a>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button type="submit" class="btn btn-info">Login</button>
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