<!-- Inclusione CSS -->
<link rel="stylesheet" href="{{ url('css/vbp/home/gallery.css') }}">

<!-- Code -->
<div class="home-gallery-preview gallery-preview carousel-global">
    <div id="carouselGalleryPreview" class="carousel slide" data-ride="carousel">

        <h1>Galleries Preview</h1>
        <div class="">
            <div class="carousel-inner">
                @foreach($galleriesJson as $gallery)
                    <div class="carousel-item {{ $gallery['classy'] }}">
                        <div class="row" >
                            <div class="col-sm-12 col-lg-1"></div>
                            <div class="col-sm-12 col-lg-10">
                                <div class="hovereffect">
                                    <div class="border border-black img-border"></div>
                                        <img class="img-fluid shadow bg-white" src="{{url('/images/gallery_preview/' . $gallery['file'])}}" alt="Slide {{ $gallery['index'] }}" alt="Card image cap">

                                        <div class="overlay">
                                        <h2>{{ $gallery['name'] }}</h2>
                                        <a class="info" href="#">Visita</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                    </div>
                @endforeach

                <a class="carousel-control-prev black-text" href="#carouselGalleryPreview" data-slide="prev"><i class="fas fa-angle-left fa-3x pr-3 carousel-arrow-color-green"></i></a>
                <a class="carousel-control-next black-text" href="#carouselGalleryPreview" data-slide="next"><i class="fas fa-angle-right fa-3x pl-3 carousel-arrow-color-green"></i></a>

            </div>
            <ol class="carousel-indicators">
                @foreach ($galleriesJson as $gallery)
                    <li class="{{ $gallery['classy'] }}" data-target="#carouselGalleryPreview" data-slide-to="{{ $gallery['index'] }}"></li>
                @endforeach
            </ol>
        </div>
    </div>
</div>