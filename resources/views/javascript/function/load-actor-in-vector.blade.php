<script>

    /*
    Carica i dati di un attore in un vettore supponendo che
    la struttura di data_actor sia la seguente:
     data_actor[0]["id"] = 1;
     data_actor[1]["name"] = "Orc";
     data_actor[1]["id"] = 2;
     etc..
    L'output sarà
     actor["id"] = 1;
     actor["name"] = "Orc";
     etc..
    In pratica anche se l'input avrà più elementi (cosa che non
    dovrebbe accadere), ne restituisce solo 1
    */
    function loadActorInVector(actor,data_actor){
        for (let intIndex in data_actor) {
            for (let nameIndex in data_actor[intIndex]) {
                actor[nameIndex] = data_actor[intIndex][nameIndex];
            }
        }
    }

    /*
    Fa lo stesso ma il vettore d'uscita invece che
    venir passato tra i parametri viene returnato come output
     */
    function getActorFromData(data_actor){
        let actor = [];
        for (let intIndex in data_actor) {
            for (let nameIndex in data_actor[intIndex]) {
                actor[nameIndex] = data_actor[intIndex][nameIndex];
            }
        }
        return actor;
    }


</script>