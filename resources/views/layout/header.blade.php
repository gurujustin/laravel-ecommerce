<!-- Header -->
<div class="header right border-bottom">
    <div class="container">
        <!-- Logo -->
        <div class="header-logo">
            <h3><a href="{{ route('home') }}">Refurbstore</a></h3>
            <!--
            <img class="logo-dark" src="{{asset('assets/images/your-logo-dark')}}.png" alt="">
            <img class="logo-light" src="{{asset('assets/images/your-logo-ligh')}}t.png" alt="">
            -->
        </div>
        <!-- Menu -->
        <div class="header-menu">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Account</a>
                </li>
            </ul>
        </div>
        <!-- Menu Extra -->
        <div class="header-menu-extra">
            <ul class="list-inline">
                <li><a href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i></a></li>
            </ul>
        </div>
        <!-- Menu Toggle -->
        <button class="header-toggle">
            <span></span>
        </button>
    </div><!-- end container -->
</div>
<!-- end Header -->
