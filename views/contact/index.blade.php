<div class="contactus ">
    <div class="gmap">
        @if($kontak->lat!='0' || $kontak->lng!='0')
        <iframe width="565" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
        @else
        <iframe width="565" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{str_replace(' ','+',$kontak->alamat)}}&amp;aq=0&amp;oq={{str_replace(' ','+',$kontak->alamat)}}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;hq=&amp;hnear={{str_replace(' ','+',$kontak->alamat)}}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
        @endif
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7">
                <div class="cwell">
                    <h5>Hubungi Kami</h5>
                    <form method="post" action="{{url('kontak')}}" role="form">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name='namaKontak' id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="emailKontak" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pesan</label>
                            <textarea class="form-control" name="messageKontak" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-info">Kirim</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-sm-5">
                <div class="cwell">
                    <h5>Alamat Kami</h5>
                    <div class="address">
                        <address>
                            <h6>{{ Theme::place('title') }}.</h6>
                            {{$kontak->alamat}}<br>
                            <abbr title="Phone">P:</abbr> {{$kontak->telepon}}.
                        </address>
                        <address>
                            <h6>Email kami:</h6>
                            <a href="mailto:{{$kontak->email}}">{{$kontak->email}}</a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>