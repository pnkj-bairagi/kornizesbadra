<header id="site-header">
    <div class="header-wrapper">
        <header class="header">
            <div class="logo-wrapper">
                <span class="logo">
                    <a href="{{url('/')}}">
                        <img src="{{asset('assets/frontend')}}/images/template/logo/logo.png" alt="" />
                    </a>
                </span>
            </div>
            <div id="menu-toggle">
                <a class="click-target" onclick="void(0)"> <i class="fas fa-bars" aria-hidden="true"></i><i class="fas fa-times" aria-hidden="true"></i> </a>
            </div>
            <div class="header-button cart">
                <a href="{{url('/cart')}}"> <i class="fas fa-shopping-cart" title="Items in Cart: 0"></i><span class="badge cart-item-count">0</span> </a>
            </div>
        </header>
        <nav id="main-menu">
            <ul class="header-buttons">
                <li class="header-button build-your-frame">
                    <a href="{{url('/')}}">Design Frame</a>
                </li>
                <li class="header-button dropdown frame-styles" onclick="void(0)">
                    <a href="{{url('framestyles')}}">Frames </a>
                </li>
                <li class="header-button dropdown resources" onclick="void(0)">
                    <a href="{{url('about')}}">About </a>
                </li>
                <li class="header-button dropdown for-business" onclick="void(0)">
                    <a href="{{url('help')}}">Help </a>
                </li>
                <li class="header-button help">
                    <a href="{{url('contact')}}">Contact Us</a>
                </li>
                <li class="header-button phone-number" onclick="void(0)">
                    <a href="tel:+00-123-456-7890"> <a class="button btn-sky read-more" href="#">+00-123-456-7890</a> </a>
                </li>
                <li class="header-button account">
                    <a class="account" href="{{url('account')}}"><i class="fas fa-user-alt"></i><span> Account</span></a>
                </li>
            </ul>
        </nav>
    </div>
</header>