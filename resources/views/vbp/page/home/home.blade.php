<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('css/vbp/testi.css') }}">
</head>

<body>

<!-- Navigation -->
@include('vbp.global.section.navigation')

<!-- Header -->
@include('vbp.page.home.section.content.header')

<!-- Debug -->
@include('vbp.page.home.debug.debug-gallery')

<!-- Body -->
@include('vbp.page.home.section.content.content')

<!-- Footer -->
@include('vbp.global.section.footer')

</body>

</html>