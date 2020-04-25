<!-- Inclusione CSS -->
<link rel="stylesheet" href="{{ url('css/vbp/home/gallery.css') }}">

<style>
    .div-img {
        background-origin: border-box;
        background-repeat: round;
    }

    .div-img img {
        width: 100%;
        visibility: hidden
    }
</style>

<!-- Code -->
<div class="home-gallery-preview gallery-preview carousel-global">
    <div id="carouselGalleryPreview" class="carousel slide" data-ride="carousel">

        <h1>Galleries Preview</h1>
        <div class="">
            <div class="carousel-inner">
                @foreach($galleriesJson as $gallery)
                    <div class="carousel-item {{ $gallery['classy'] }}">
                        <div class="row" >
                            <div class="col-lg-1"></div>
                            <div class="col-sm-12 col-lg-10">
                                <div class="hovereffect">
                                    <div class="div-img img-fluid img-div border border-black" style="background-image: url({{ asset('/images/gallery_preview/' . $gallery['file']) }})" alt="Slide {{ $gallery['index'] }}" alt="Card image cap">
                                        <img src="{{url('/images/gallery_preview/' . $gallery['file'])}}">
                                    </div>

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