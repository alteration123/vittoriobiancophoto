<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    @include('vbp.global.section.navigation')
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('css/vbp/spacers.css') }}">
    <link rel="stylesheet" href="{{ url('css/vbp/testi.css') }}">
    <link rel="stylesheet" href="{{ url('css/vbp/imagehover.css') }}">



</head>

<style>
    .gallery {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3;
    }
    .gallery .pics {
        -webkit-transition: all 350ms ease;
        transition: all 350ms ease; }
    .gallery .animation {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1); }

    @media (max-width: 450px) {
        .gallery {
            -webkit-column-count: 1;
            -moz-column-count: 1;
            column-count: 1;
        }
    }

    @media (max-width: 400px) {
        .btn.filter {
            padding-left: 1.1rem;
            padding-right: 1.1rem;
        }
    }
</style>

<script>
    $(function() {
        var selectedClass = "";
        $(".filter").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#gallery").fadeTo(100, 0.1);
            $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
            setTimeout(function() {
                $("."+selectedClass).fadeIn().addClass('animation');
                $("#gallery").fadeTo(300, 1);
            }, 300);
        });
    });

    // MDB Lightbox Init
    $(function () {
        $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    });
</script>

<body>

<div class="spacer-150-100"></div>

<div class="container">
    <!-- Grid row -->
    <div class="gallery" id="gallery">

        <!-- Grid column -->
        <div class="mb-3 pics animation all 1 hovereffect">
            <img class="img-fluid" src="{{url('/images/galleria/3.webp')}}" alt="Card image cap">
            <div class="overlay">
                <h2>Hover effect 1</h2>
                <a class="info" href="#">link here</a>
            </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="{{url('/images/galleria/2.webp')}}" alt="Card image cap">
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="{{url('/images/galleria/1.webp')}}" alt="Card image cap">
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="{{url('/images/galleria/5.webp')}}" alt="Card image cap">
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="{{url('/images/galleria/4.webp')}}" alt="Card image cap">
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="{{url('/images/galleria/6.webp')}}" alt="Card image cap">
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="{{url('/images/galleria/7.webp')}}" alt="Card image cap">
        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->
</div>

<div class="spacer"></div>

@include('vbp.global.section.footer')

</body>

</html>