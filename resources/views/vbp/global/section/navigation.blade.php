<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow" style="background-color: rgba(245, 245, 245, 0.6);">
    <div class="container">
        <a class="navbar-brand" style="background-color: transparent; font-size: 20px" href="#">Vittorio Bianco Photo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" >
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ $actives['home'] }}">
                    <a class="nav-link font-weight-bold" href="{{ url('vbphome') }}">Home
                    </a>
                </li>
                <li class="nav-item {{ $actives['gallery'] }}">
                    <a class="nav-link font-weight-bold" href="{{ url('gallery') }}">Galleria
                    </a>
                </li>
                <li class="nav-item {{ $actives['artist'] }}">
                    <a class="nav-link font-weight-bold" href="#">L'Artista</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

