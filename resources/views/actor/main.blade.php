<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    @include('actor.script.functions') <!-- Carica le funzioni in javascript -->
</head>

<body>

@include('actor.section.header')

@section('list')
    <div class="container" id="list">

    </div>

    </div>
@endsection

@yield('list')

<input type="text" id="demo" onmouseover="loadActorWithAjax(2)">

<script>
    document.addEventListener("DOMContentLoaded", function(){
        lista = new List();
        lista.initializeListStructure(9,document.getElementById("list"));
        let criteria = [];

        /*
        criteria[0] = 9;
        criteria[1] = 1;
        criteria[2] = 1;
        criteria[3] = "table_name";
        criteria[4] = "LIKE";
        criteria[5] = "%"+"Orc"+"%";
        criteria[6] = "hit_points";
        criteria[7] = ">";
        criteria[8] = 30;
        lista.loadBlocks(criteria);
        lista.buildList();
        */



        /*

*/
    });

</script>

</body>
</html>
