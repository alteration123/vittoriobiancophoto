@include('javascript.class.block-html')
<script>

    class Block{
        //Variables
        /*
        position: posizione del blocco nella lista
        blockHtml: oggetto contenente l'interfaccia
        stats: contiene le statistiche dell'attore nel blocco e deve avere questa struttura:
        stats["name"] = "nome";
        stats["hit_points"] = 60;
        */
        stats = [];
        blockHtml;
        position;

        //Constructor
        constructor(){
            this.blockHtml = new BlockHtml();
        }

        //Functions
        /*
        Carica i dati dell'attore nel vettore stats della classe
        stats deve avere questa struttura:
        stats["name"] = "nome";
        stats["hit_points"] = 60;
        this.stats diventerà praticamente uguale a stats

        stats: vettore contenente le statistiche dell'attore
        position: indica la posizione del blocco nella lista
         */
        setBlock(stats, position){
            //alert("set block");
            for (let objIndex in stats) {
                this.stats[objIndex] = stats[objIndex];
            }
            this.position = position;
        }

        /*
        Inizializza l'interfaccia, ovvero inizia a creare la struttura
        del blocco come div, titolo, etc...
        Perché separare l'inizializzazione e draw? Perché così posso fare
        più cose parallelamente, precaricare, etc.. => Più flessibilità
        passo anche la posizione del blocco, servirà per settare i vari id
         */
        initializeInterface(father){
            this.blockHtml.initializeInterface(father);
        }

        /*
        Richiama la funzione dell'interfaccia che prende gli elementi già
        creati del blocco, li assembla e li rende visibili.

        father: elemento HTML del DOM al quale verrà aggregato il blocco
         */
        draw(){
        }

        updateBlockHtmlInners(){
            this.blockHtml.updateBlockHtmlInners(this.stats);
        }

        deleteBlockHtmlInners(){
            this.blockHtml.deleteBlockHtmlInners();
        }

        deleteBlockStats(){
            this.stats["name"] = "";
        }

        hide(){
            this.blockHtml.hide();
        }
        show(){
            this.blockHtml.show();
        }
    }

</script>