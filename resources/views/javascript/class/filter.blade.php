<script>

    class Filter{
        //Variables
        /*
        blocks: vettore contenente i blocchi
        */
        elements = [];
        states = [];
        tease;

        //Constructor
        constructor(){
            this.states["initializedFilterStructure"] = false;
            this.tease = "te";
        }

        initializeFilterStructure(father){
            if (this.states["initializedFilterStructure"] == false){
                this.elements["mainContainer"] = document.createElement("div");
                this.elements["mainContainer"].className = "container";
                father.appendChild(this.elements["mainContainer"]);

                this.elements["mainRow"] = document.createElement("div");
                this.elements["mainRow"].className = "row";
                this.elements["mainRow"].className = "text-center mb-3";
                this.elements["mainContainer"].appendChild(this.elements["mainRow"]);

                this.elements["searchNameTextBox"] = document.createElement("input");
                this.elements["searchNameTextBox"].type = "text";
                this.elements["mainRow"].appendChild(this.elements["searchNameTextBox"]);

                this.states["initializedFilterStructure"] = true;
            }
            else{
                alert("Filtro già inizializzato!");
            }
        }
    }

</script>