    <div class="page-title">
        <div class="container">
            <h2><i class="icon-user color"></i>My Account</h2>
            <hr />
        </div>
    </div>
    <div class="account-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidey">
                        <ul class="nav">
                            <li><a href="{{url('member')}}">Order History</a></li>                         
                            <li><a href="{{url('member/profile/edit')}}">Edit Profile</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <h3><i class="icon-edit color"></i> &nbsp;Edit Profile</h3>
                    {{Form::open(array('url'=>'member/update','method'=>'put','class'=>'form-horizontal'))}}
                        <div class="form-group">
                            <label for="inputName" class="col-md-2 control-label">Name</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="inputName" name="nama" value='{{$user->nama}}' placeholder="Name" required>
                            </div>
                        </div>            
                        <div class="form-group">
                            <label for="inputEmail1" class="col-md-2 control-label">Email</label>
                            <div class="col-md-4">
                                <input type="email" class="form-control" name='email' value='{{$user->email}}' id="inputEmail1" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPhone" class="col-md-2 control-label">Telepon</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="inputPhone" name='telp' value='{{$user->telp}}' placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputCountry" class="col-md-2 control-label">Country</label>
                            <div class="col-md-4">
                                {{Form::select('negara',array('' => '-- Pilih Negara --') + $negara , ($user ? $user->negara :(Input::old("negara")? Input::old("negara") :"")), array('required'=>'', 'id'=>'negara', 'class'=>'form-control'))}}
                            </div>
                        </div>      
                        <div class="form-group">
                            <label for="inputCountry" class="col-md-2 control-label">Provinsi</label>
                            <div class="col-md-4">
                                {{Form::select('provinsi',array('' => '-- Pilih Provinsi --') + $provinsi , ($user ? $user->provinsi :(Input::old("provinsi")? Input::old("provinsi") :"")),array('required'=>'','id'=>'provinsi', 'class'=>'form-control'))}}
                            </div>
                        </div>      
                        <div class="form-group">
                            <label for="inputCountry" class="col-md-2 control-label">Kota</label>
                            <div class="col-md-4">
                                {{Form::select('kota',array('' => '-- Pilih Kota --') + $kota , ($user ? $user->kota :(Input::old("kota")? Input::old("kota") :"")),array('required'=>'','id'=>'kota', 'class'=>'form-control'))}}
                            </div>
                        </div>              
                        <div class="form-group">
                            <label for="inputAddress" class="col-md-2 control-label">Alamat</label>
                            <div class="col-md-4">
                               <textarea class="form-control" rows="3" placeholder="Address" name='alamat' required>{{$user->alamat}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputZip" class="col-md-2 control-label">Kode Pos</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="inputZip" placeholder="Kode Pos" name='kodepos' value='{{$user->kodepos}}' required>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="inputUsername" class="col-md-2 control-label">Password Lama</label>
                            <div class="col-md-4">
                                <input type="password" class="form-control" name="oldpassword" id="inputUsername" placeholder="Password Lama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUsername" class="col-md-2 control-label">Password Baru</label>
                            <div class="col-md-4">
                                <input type="password" class="form-control" name="password" id="inputUsername" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-md-2 control-label">Ulang Password</label>
                            <div class="col-md-4">
                                <input type="password" class="form-control" name="password_confirmation" id="inputPassword" placeholder="Password">
                            </div>
                        </div>
                        <hr />
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button type="submit" class="btn btn-danger">Simpan</button>
                            </div>
                        </div>
                    {{Form::close()}}
               </div>
            </div>
            <div class="sep-bor"></div>
        </div>
    </div>