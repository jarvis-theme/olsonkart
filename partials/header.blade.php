<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4" id="title-head">
                <div class="logo"><h1><a href="{{URL::to('/')}}">{{ shortText(Theme::place('title'),26) }}</a></h1></div>
            </div>
            <div class="col-sm-5 col-md-4" id="url-head">
                <div class="kart-links">
                    @if ( ! is_login() )
                    <a href="{{URL::to('member')}}">Login</a>
                    <a href="{{URL::to('member/create')}}">Register</a>
                    @else
                    <a href="{{URL::to('member')}}">My Account</a>
                    <a href="{{URL::to('logout')}}" >Logout</a>
                    @endif
                    <span id='shoppingcartplace'>{{shopping_cart()}}</span>
                </div>
            </div>
           
            <div class="col-sm-3 col-md-4 topmenu">
                <div class="navi">
                    <div id="ddtopmenubar" class="mattblackmenu">
                        <ul>
                        @foreach(main_menu()->link as $key=>$link)
                            @if($key < 4)
                            <li><a href="{{menu_url($link)}}">{{$link->nama}}</a></li>
                            @endif
                        @endforeach
                        </ul>
                    </div>
                </div>
                <div class="navis"></div>
            </div>
        </div>
    </div>
</div>