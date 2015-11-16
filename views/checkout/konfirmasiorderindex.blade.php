<div class="page-title">
    <div class="container center">
        <h2 class="align-left"><i class="icon-shopping-cart color"></i> Konfirmasi Pembayaran</h2>
        <hr />
        <h5>Terima kasih telah membeli di {{ Theme::place('title') }}.</h5>
        <div class="sep-bor"></div>
        @if($checkouttype==2)
            <p>Silakan Hubungi Pihak Toko untuk Mengkonfirmasi Order Anda</p>
        @else
            <p>Silakan masukkan kode order yang mau anda cari!</p>
            @if($checkouttype==1)
            {{-- */ $konfirmasi = 'konfirmasiorder' /* --}}
            @endif
            @if($checkouttype==3)
            {{-- */ $konfirmasi = 'konfirmasipreorder' /* --}}
            @endif
            {{Form::open(array('url'=>$konfirmasi,'method'=>'post','class'=>'form-inline'))}}
        @endif
        <div class="form-group">
            <input type="text" class="form-control" id="search" placeholder="Kode Order" name='kodeorder' required>
        </div>
        <button type="submit" class="btn btn-info">Cari</button>
        {{Form::close()}}
        <!--
        <div class="link-list">
            <h4><strong>Take a look around our site</strong></h5>
            <a href="{{url('/')}}">Home</a>
            <a href="{{url('halaman/about-us')}}">Tentang Kami</a>
            <a href="{{url('kontak')}}">Hubungi Kami</a>
            <a href="{{url('service')}}">Service</a>
        </div>
        -->
        <div class="sep-bor"></div>
    </div>
</div>