{{-- 
    HEADER
--}}

<header>
    <a href="/" class="brand"> 
        <img src="{{asset('img/logo.png') }}" alt="La Molisana Logo">
    </a>
    <!-- Only LG --->
    <nav>
        <li>
            <a href="{{route('home')}}">Home</a>
        </li>
        <li> 
            <a href="\">Prodotti</a>
        </li>
        <li>
            <a href="{{route('news')}}">News</a>
        </li>
    </nav>
    <!-- Mediaquery --->
    <a href=""><i class="fas fa-bars"></i>  </a>
</header>