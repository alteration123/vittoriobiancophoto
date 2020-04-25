<script>
    /*
    Carica gli id degli attori che hanno nome simile
    a quello indicato
    */
    function loadActorsByFilter(criteria){
        let actors = [];
        $.ajax({
            type: 'POST', //
            url: '/ajaxLoadActorsByFilter',
            data: {criteria:criteria},
            cache: false,
            async: false,
            success: function(data){
                //alert(data.successo);
                //alert(data.actors[0]["id"]);
                actors = data.actors;
            },
            error: function(data){
                console.log(data);
                alert("fail" + ' ' + this.data)
            },
        });
        return actors;
    }

</script>