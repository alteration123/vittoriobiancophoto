@include('javascript.class.block')
@include('javascript.class.filter')
<script>

    class List{
        //Variables
        /*
        blocks: vettore contenente i blocchi
        */
        blocks = [];
        numberOfBlocks;
        elements = [];
        numberOfActors;
        states = [];
        filter;

        //Constructor
        constructor(){
            this.states["initializedListStructure"] = false;
            this.filter = new Filter();
        }

        //Functions
        /*
        Inizializza i blocchi
         */
        initializeListStructure(numberOfBlocks,father){

            this.filter.initializeFilterStructure(father);
            let list = this; //non posso usare this nell'event listener, quindi uso una variabile
            this.filter.elements["searchNameTextBox"].addEventListener("change", function(){
                list.updateBlocks(list);
                } );

            if (this.states["initializedListStructure"] == false){
                for (let i=0;i<numberOfBlocks;i++){
                    this.blocks[i] = new Block();
                }
                this.numberOfBlocks = numberOfBlocks;

                this.elements["mainContainer"] = document.createElement("div");
                this.elements["mainContainer"].className = "container";
                father.appendChild(this.elements["mainContainer"]);

                let numberOfRows = Math.ceil(this.numberOfBlocks/3);

                for(let row=0;row<numberOfRows;row++){
                    this.elements["row"+row] = document.createElement("div");
                    this.elements["row"+row].className = "row pb-4";
                    this.elements["mainContainer"].appendChild(this.elements["row"+row]);
                    for(let column=0;column<3;column++){
                        this.blocks[column+(row*3)].initializeInterface(this.elements["row"+row]);
                    }
                }

                this.loadBlocks([numberOfBlocks, 0, "actors", "name"]);
                this.buildList();

                this.states["initializedListStructure"] = true;
            }
            else{
                alert("Lista già inizializzata!");
            }
        }

        setBlockWithAjax(positionOfBlock,actorId){
            this.blocks[positionOfBlock].setBlock(loadActorWithAjax(actorId), positionOfBlock);
        }

        /*
        Carica i blocchi avendo scelto un certo criterio

        Struttura di criteria:
        criteria[0]: numero massimo di elementi da prelevare
        criteria[1]: numero di filtri presenti
        criteria[2]: colonna 1 del filtro 1
        criteria[3]: colonna 2 del filtro 1
        criteria[4]: colonna 3 del filtro 1
        etc
         */
        loadBlocks(criteria){
            let ids = loadActorsByFilter(criteria);
            this.numberOfActors = ids.length;
            for (let i=0;i<this.numberOfActors;i++){
                this.setBlockWithAjax(i,ids[i]["id"]);
            }

            for (let i=this.numberOfActors;i<this.numberOfBlocks;i++){
                //alert(i);
                this.blocks[i].deleteBlockStats();
            }

        }

        /*
        I blocchi sono già tutti istanziati, la funzione semplicemente li aggiorna
        e nasconde quelli in eccesso
         */
        buildList(){
            for (let i=0;i<this.numberOfActors;i++){
                this.blocks[i].show();
                this.blocks[i].updateBlockHtmlInners();
            }

            for (let i=this.numberOfActors;i<this.numberOfBlocks;i++){
                this.blocks[i].hide();
            }
        }

        updateBlocks(list){
            let criteria = [];
            criteria[0] = list.numberOfBlocks;
            criteria[1] = 1;
            criteria[2] = "actors";
            criteria[3] = "name";
            criteria[4] = "LIKE";
            let se = list.filter.elements["searchNameTextBox"].value;
            if (se==null) se="";
            criteria[5] = "%"+se+"%";

            list.loadBlocks(criteria);
            list.buildList();
        }
    }

</script>