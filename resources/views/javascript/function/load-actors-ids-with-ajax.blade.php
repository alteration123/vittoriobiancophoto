<script>
    /*
    Carica gli id degli attori che hanno nome simile
    a quello indicato
    */
    function loadActorsIds(){
        let ids = [];

        $.ajax({
            type: 'POST', //
            url: '/ajaxLoadActorsIds',
            data: {actorsQuantity:10},
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