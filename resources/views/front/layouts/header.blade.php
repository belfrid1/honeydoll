<!-------------------------------------  Menu start-------------------------------------->
<header class="hdr-wrap">
    <div class="hdr-content hdr-content-sticky">
        <div class="container">
            <div class="row">
                      <div class="col-auto show-mobile">
                    <div class="menu-toggle"> <a href="#" class="mobilemenu-toggle"><i class="icon-menu"></i></a> </div>
                </div>
                <!-------------------------------------  Logo at the top  start -------------------------------------->
                <div class="col-auto hdr-logo">
                    <!-- Logo-->
                    <a href="{{route("front.home")}}" class="logo"><img src="{{ asset("public/assets/front/images/logo/logo2.jpg") }}" alt="Logo"></a>
                </div>
                <!-------------------------------------  Logo at the top  end-------------------------------------->
                <div class="hdr-nav hide-mobile nav-holder-s">
                </div>
                <div class="hdr-links-wrap col-auto ml-auto">
                    <div class="hdr-inline-link">
                        <div class="search_container_desktop">
                            <div class="dropdn dropdn_search dropdn_fullwidth">
                                <a href="#" class="dropdn-link  js-dropdn-link only-icon"><i class="icon-search"></i><span class="dropdn-link-txt">Search</span></a>
                                <div class="dropdn-content">
                                    <div class="container">
                                        <form method="get" action="#" class="search search-off-popular">
                                            <input name="search" type="text" class="search-input input-empty" placeholder="What are you looking for?">
                                            <button type="submit" class="search-button"><i class="icon-search"></i></button>
                                            <a href="#" class="search-close js-dropdn-close"><i class="icon-close-thin"></i></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="dropdn dropdn_wishlist">
                            <a href="account-wishlist.html" class="dropdn-link only-icon wishlist-link ">
                                <i class="icon-heart"></i><span class="dropdn-link-txt">Wishlist</span><span class="wishlist-qty">3</span>
                            </a>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hdr">
        <div class="hdr-topline hdr-topline--dark js-hdr-top">
            <div class="container">

                <!-------------------------------------   logout   end -------------------------------------->
                @if (auth()->guest())
                   <!-------------------------------------   Login button  start -------------------------------------->
                    {{-- <div class="row flex-nowrap">
                        <div class="col hdr-topline-right hide-mobile">
                            <div class="hdr-inline-link">
                                <div class="hdr_container_desktop">
                                    <div class="dropdn dropdn_account dropdn_fullheight">
                                        <a href="#" class="dropdn-link js-dropdn-link" data-panel="#dropdnAccount"><i class="icon-user"></i><span class="dropdn-link-txt">Account</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <!-------------------------------------   Login button  end -------------------------------------->
                @else
                <!-------------------------------------   Login button  start -------------------------------------->
                <div class="row flex-nowrap">
                    <div class="col hdr-topline-right hide-mobile">
                        <div class="hdr-inline-link">
                            <div class="hdr_container_desktop">
                                <div class="dropdn dropdn_account dropdn_fullheight">
                                    <a href="{{ route('logout') }}" class="dropdn-link js-dropdn-link"  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" ><i class="icon-user"></i><span class="dropdn-link-txt">lOGOUT</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                @endif
                <!-------------------------------------   logout  end -------------------------------------->

            </div>
        </div>
        <div class="hdr-content">
            <div class="container">
                <div class="row">
                    <!-------------------------------------   Menu bar. Including product, accessories, toys, underwear, shops  start -------------------------------------->
                    <div class="col-auto show-mobile">
                        <div class="menu-toggle"> <a href="#" class="mobilemenu-toggle"><i class="icon-menu"></i></a> </div>
                    </div>
                    <div class="col-auto hdr-logo">
                        <a href="{{route("front.home")}}" class="logo"><img src="{{ asset("public/assets/front/images/logo/logo2.jpg") }}" alt="Logo"></a>
                    </div>
                    <div class="hdr-nav hide-mobile nav-holder justify-content-center px-4">
                        <ul class="mmenu mmenu-js">
                            <li><a href="{{ route('front.home') }}" class="{{ request()->is('sex-doll') ? 'active' : '' }}">Sex dolls</a></li>
                            <!---------------------------- Accessories Menu Start --------------------------------->
                            <li><a href="{{ route('front.accessories') }}" class="{{ request()->is('sex-doll/accessories') ? 'active' : '' }}">Accessories</a></li>
                            <!---------------------------- Accessories Menu End --------------------------------->
                            <li><a href="{{ route('front.toys') }}" class="{{ request()->is('sex-doll/toys') ? 'active' : '' }}">Sextoys</a></li>
                            <li><a href="{{ route('front.underwears') }}" class="{{ request()->is('sex-doll/underwears') ? 'active' : '' }}">Underwears</a></li>
                            <li><a href="{{ route('front.shops') }}" class="{{ request()->is('sex-doll/shops') ? 'active' : '' }}">Shops</a></li>

                        </ul>
                    </div>
                    <!-------------------------------------   Menu bar. Including products, accessories, underwear, shops  end -------------------------------------->
                    <div class="hdr-links-wrap col-auto ml-auto">
                        <div class="hdr-inline-link">
                            <div class="search_container_desktop">
                                <div class="dropdn dropdn_search dropdn_fullwidth">
                                    <a href="#" class="dropdn-link  js-dropdn-link only-icon"><i class="icon-search"></i><span class="dropdn-link-txt">Search</span></a>
                                    <div class="dropdn-content">
                                        <div class="container">
                                            <form method="get" action="#" class="search search-off-popular">
                                                <input name="search" type="text" class="search-input input-empty" placeholder="What are you looking for?">
                                                <button type="submit" class="search-button"><i class="icon-search"></i></button>
                                                <a href="#" class="search-close js-dropdn-close"><i class="icon-close-thin"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
<!--------------------------------   Favourite button at the top of the page start ---------------------------------->
                            {{-- <div class="dropdn dropdn_wishlist">
                                <a href="{{ url ('/wishlist')}}"  class="dropdn-link only-icon wishlist-link ">
                                    <i class="icon-heart"></i><span class="dropdn-link-txt">Wishlist</span><span class="wishlist-qty">5</span>
                                </a>
                            </div> --}}
                            {{-- <div class="hdr_container_mobile show-mobile">
                                <div class="dropdn dropdn_account dropdn_fullheight">
                                    <a href="#" class="dropdn-link js-dropdn-link" data-panel="#dropdnAccount"><i class="icon-user"></i><span class="dropdn-link-txt">Account</span></a>
                                </div>
                            </div> --}}
<!-----------------------------------   Favourite button at the top of the page end ---------------------------------->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="header-side-panel">
    <div class="mobilemenu js-push-mbmenu">
        <div class="mobilemenu-content">
            <div class="mobilemenu-close mobilemenu-toggle">Close</div>
            <div class="mobilemenu-scroll">
                <div class="mobilemenu-search"></div>
                <div class="nav-wrapper show-menu">
                    <div class="nav-toggle">
                        <span class="nav-back"><i class="icon-angle-left"></i></span>
                        <span class="nav-title"></span>
                        <a href="#" class="nav-viewall">view all</a>
                    </div>
                    <ul class="nav nav-level-1">
                        <li><a href="{{ route('front.home')}}">Sex Dolls</a>

                        </li>
                        <li><a href="{{ route('front.accessories')}}">Accessories</a>

                        </li>
                        <li><a href="{{ route('front.toys')}}">Toys</a>

                        </li>
                        <li><a href="{{ route('front.underwears')}}">Underwears</a></li>
                        <li><a href="{{ route('front.shops')}}">Shop</a></li>
                    </ul>
                </div>
                {{-- <div class="mobilemenu-bottom">
                    <div class="mobilemenu-currency">
                        <div class="dropdn_currency">
                            <div class="dropdn dropdn_caret">
                                <a href="#" class="dropdn-link js-dropdn-link">US dollars<i class="icon-angle-down"></i></a>
                                <div class="dropdn-content">
                                    <ul>
                                        <li class="active"><a href="#"><span>US dollars</span></a></li>
                                        <li><a href="#"><span>Euro</span></a></li>
                                        <li><a href="#"><span>UK pounds</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobilemenu-language">
                        <div class="dropdn_language">
                            <div class="dropdn dropdn_language dropdn_language--noimg dropdn_caret">
                                <a href="#" class="dropdn-link js-dropdn-link"><span class="js-dropdn-select-current">English</span><i class="icon-angle-down"></i></a>
                                <div class="dropdn-content">
                                    <ul>
                                        <li class="active"><a href="#"><img src="{{ asset("public/assets/front") }}/images/flags/en.html" alt="">English</a></li>
                                        <li><a href="#"><img src="{{ asset("public/assets/front") }}/images/flags/sp.html" alt="">Spanish</a></li>
                                        <li><a href="#"><img src="{{ asset("public/assets/front") }}/images/flags/de.html" alt="">German</a></li>
                                        <li><a href="#"><img src="{{ asset("public/assets/front") }}/images/flags/fr.html" alt="">French</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="dropdn-content account-drop" id="dropdnAccount">
        <div class="dropdn-content-block">
            <div class="dropdn-close"><span class="js-dropdn-close">Close</span></div>
            <ul>
                <li><a href="{{ route("login") }}"><span>Log In</span><i class="icon-login"></i></a></li>
                <li><a href="{{ route("register") }}"><span>Register</span><i class="icon-user2"></i></a></li>

            </ul>
            <div class="dropdn-form-wrapper">
                <h5>Quick Login</h5>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email" class="form-control form-control--sm is-invalid" placeholder="Enter your e-mail">
                        <div class="invalid-feedback">Can't be blank</div>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control--sm" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn">Enter</button>
                </form>
            </div>
        </div>
        <div class="drop-overlay js-dropdn-close"></div>
    </div>

</div>
<!------------------------------------- Menu end-------------------------------------->
