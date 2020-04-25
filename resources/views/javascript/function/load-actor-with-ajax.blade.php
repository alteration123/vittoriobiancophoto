<script>
    /*
    Carica i dati di un attore conoscendo l'id
    */
    function loadActorWithAjax(actorId){
        let actor = [];

        $.ajax({
            type: 'POST', //
            url: '/ajaxLoadActorById',
            data: {actorId:actorId},
            cache: false,
            async: false,
            success: function(data){
                loadActorInVector(actor,data.actor);
            },
            error: function(data){
                console.log(data);
                alert("fail" + ' ' + this.data)
            },
        });
        return actor;
    }

</script>