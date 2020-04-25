<!-- Inclusione CSS -->
<link rel="stylesheet" href="{{ url('css/vbp/home/random-photos-carousel.css') }}">
<link rel="stylesheet" href="{{ url('css/vbp/zoom.css') }}">

<style>



</style>

@include('vbp.page.home.debug.debug-random-photos-carousel')

<div id="multi-item-example" class="random-photo-carousel carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel" style="text-align: center">

    <!--Controls-->
    <div class="controls">
        <div class="controls-top visible">
            <a class="black-text" href="#multi-item-example" data-slide="prev"><i class="fas fa-angle-left fa-3x pr-3 carousel-arrow-color-green"></i></a>
            <h1>Random Photos</h1>
            <a class="black-text" href="#multi-item-example" data-slide="next"><i class="fas fa-angle-right fa-3x pl-3 carousel-arrow-color-green"></i></a>
        </div>
    </div>
    <!--/.Controls-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        @foreach($randomPhotos as $randomFourKey=>$randomFour)
            <div class="carousel-item {{ $randomFourActive[$randomFourKey] }}">
                @foreach($randomFour as $randomPhoto)
                    <!--Slide-->
                            <div class="col-md-3 mb-3">
                                <div class="carousel-custom-card">
                                    <img class="zoom img-fluid carousel-custom-image" src="{{url('/images/galleria/' . $randomPhoto['file'])}}" alt="Card image cap">
                                </div>
                            </div>
                    <!--/.Slide-->
                @endforeach
            </div>
        @endforeach

    </div>
    <!--/.Slides-->

</div>