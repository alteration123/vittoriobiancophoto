<script>
    /*
    Carica gli id degli attori che hanno nome simile
    a quello indicato
    */
    function loadActorsIdsByName(actorName){
        let ids = [];

        $.ajax({
            type: 'POST', //
            url: '/ajaxLoadActorsIdsByName',
            data: {actorName:actorName},
            cache: false,
            async: false,
            success: function(data){
                ids = data.actors;
            },
            error: function(data){
                console.log(data);
                alert("fail" + ' ' + this.data)
            },
        });
        return ids;
    }

</script>