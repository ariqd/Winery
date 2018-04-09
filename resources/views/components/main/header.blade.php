<nav class="navbar navbar-expand-lg navbar-light px-5">
    <a class="navbar-brand ml-md-5 ml-sm-0 ml-xs-0" href="{{ url('/') }}">
        <img src="{{ asset("img/logo-icon.png") }}" alt="winery-icon" class="img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse mt-4 mr-5" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('about') }}">ABOUT US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('kartu-kredit') }}">KARTU KREDIT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">PINJAMAN (KTA)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('promosi') }}">PROMOSI</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('artikel') }}">ARTIKEL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('login') }}">SIGN IN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-search"></i></a>
            </li>
        </ul>
    </div>
</nav>
