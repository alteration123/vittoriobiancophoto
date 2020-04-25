@include('js.ajax.initalize-ajax')

<!-- Inclusione CSS -->
<link rel="stylesheet" href="{{ url('css/vbp/spacers.css') }}">
<link rel="stylesheet" href="{{ url('css/vbp/home/testi.css') }}">
<link rel="stylesheet" href="{{ url('css/vbp/imagehover.css') }}">

<div class="spacer"></div>

@include('vbp.page.home.section.content.subcontent.artist')

<div class="spacer"></div>

@include('vbp.page.home.section.content.subcontent.gallery')

<div class="spacer"></div>

@include('vbp.page.home.section.content.subcontent.random-photos-carousel');

<div class="spacer"></div>

<div class="spacer"></div>