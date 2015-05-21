<div class="header">
 <div class="container">
    <div class="row">
       <div class="col-md-2 col-sm-2" style="width: auto;">
          <!-- Logo -->
          <div class="logo">
             <h1><a href="{{URL::to('/')}}">{{ shortText(Theme::place('title'),26) }}</a></h1>
          </div>
       </div>
       
       <div class="col-md-4 col-sm-5" style="float: right;">
          <div class="kart-links">
            @if ( ! is_login())
                <a href="{{URL::to('member')}}">Login</a>
                <a href="{{URL::to('member/create')}}">Register</a>
            @else
                <a href="{{URL::to('member')}}">My Account</a>
                <a href="{{URL::to('logout')}}" >Logout</a>
            @endif
             <span id='shoppingcartplace'>{{$ShoppingCart}}</span>
          </div>
       </div>
       
        <div class="col-md-6 col-sm-5" style="width: auto;float:right;">
          <!-- Navigation menu -->
                <div class="navi">
                    <div id="ddtopmenubar" class="mattblackmenu">
                        <ul>
                            @foreach($mainMenu as $key=>$link)
                              @if($link->halaman=='1')
                                <li><a href={{"'".URL::to("halaman/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a></li>
                              @elseif($link->halaman=='2')
                                <li><a href={{"'".URL::to("blog/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a></li>
                              @elseif($link->url=='1')
                                <li><a href={{"'".URL::to('http://'.strtolower($link->linkTo))."'"}}>{{$link->nama}}</a></li>
                              @else
                                <li><a href={{"'".URL::to(strtolower($link->linkTo))."'"}}>{{$link->nama}}</a></li>
                              @endif
                            @endforeach

                        </ul>
                    </div>
                </div>

                <!-- Dropdown NavBar -->
          <div class="navis" style="width: 100%;"></div>                  
          
       </div>
    </div>
 </div>
</div>

