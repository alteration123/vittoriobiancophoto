<script>

    //Inizializza ajax
    $.ajaxSetup({
        headers: {
            'X-XSRF-TOKEN': decodeURIComponent(/XSRF-Token=([^;]*)/ig.exec(document.cookie)[1])
        }
    });

</script>