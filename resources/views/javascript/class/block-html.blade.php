@include('javascript.class.sub-block-html')
<script>
    const blockStatsMain = ["hit_points", "initiative", "armor_class", "base_attack"];
    const blockStatsMainType = ["icon", "icon", "icon", "icon"];
    const blockStatsMainContent = [ "{{ URL::to('/') }}/images/hit_points.png", "{{ URL::to('/') }}/images/initiative.png", "{{ URL::to('/') }}/images/armor_class.png", "{{ URL::to('/') }}/images/base_attack.png" ];
    const blockStatsTitle = ["Health", "Initiative", "Armor Class", "Base Attack"];

    class BlockHtml{

        //Variables
        position;
        elements;

        //Constructor
        constructor(){
            this.elements = [];
        }

        //Functions
        initializeInterface(father){
            /* Struttura:
               Block - col-md-4
                     Nome
                     row
               Col1  Col2  Col3
               Port  Stat  Desc
            */

            /* Inizializzazione del blocco, ovvero della colonna
               che sta subito sotto la riga
             */
            this.elements["block"] = new SubBlockHtml();
            this.elements["block"].initializeSubBlockHtml("div");
            this.elements["block"].setClass("col-md-4");
            //this.elements["block"].setId("block-"+position);

            this.elements["mainContainer"] = new SubBlockHtml();
            this.elements["mainContainer"].initializeSubBlockHtml("div");
            this.elements["mainContainer"].setClass("container border border-dark bg-light text-dark text-center");
            //this.elements["block"].setId("block-"+position);

            /* Inizializzazione della prima riga interna del
               blocco
             */
            this.elements["internalRow"] = new SubBlockHtml();
            this.elements["internalRow"].initializeSubBlockHtml("div");
            this.elements["internalRow"].setClass("row");
            //this.elements["internalRow"].setId("block-" + position + "-row");

            /* Inizializzazione delle 3 colonne che compongono
               il blocco
             */
            this.elements["firstColumn"] = new SubBlockHtml();
            this.elements["firstColumn"].initializeSubBlockHtml("div");
            this.elements["firstColumn"].setClass("col-md-4 border-top border-dark");
            //this.elements["firstColumn"].setId("block-" + position + "-row" + "-col-1");

            this.elements["secondColumn"] = new SubBlockHtml();
            this.elements["secondColumn"].initializeSubBlockHtml("div");
            this.elements["secondColumn"].setClass("col-md-4 border-top border-left border-right border-dark text-left");
            //this.elements["secondColumn"].setId("block-" + position + "-row" + "-col-2");

            this.elements["thirdColumn"] = new SubBlockHtml();
            this.elements["thirdColumn"].initializeSubBlockHtml("div");
            this.elements["thirdColumn"].setClass("col-md-4 border-top border-dark text-left");
            //this.elements["thirdColumn"].setId("block-" + position + "-row" + "-col-3");

            /* Inizializzazione del titolo del blocco (nome dell'attore) */
            this.elements["blockTitle"] = new SubBlockHtml();
            this.elements["blockTitle"].initializeSubBlockHtml("h3");
            //this.elements["blockTitle"].setId("block-" + position + "-title");
            this.elements["blockTitle"].setInnerHtml("");

            for (let i=0;i<blockStatsMain.length;i++) {
                this.elements[blockStatsMain[i]] = new SubBlockHtml();
                this.elements[blockStatsMain[i]].initializeSubBlockHtml("h7");
                //this.elements[blockStatsMain[i]].setId("block-" + position + "-row-col-3-stat-" + blockStatsMain[i]);
                this.elements[blockStatsMain[i]].setInnerHtml("");
            }

            /* Inizializzazione del titolo del blocco (nome dell'attore) */
            this.elements["description"] = new SubBlockHtml();
            this.elements["description"].initializeSubBlockHtml("h7");
            //this.elements["description"].setId("block-" + position + "-row-col-3-description");
            this.elements["description"].setInnerHtml("");


            father.appendChild(this.elements["block"].html);

            //Il blocco contiene un container
            this.elements["block"].html.appendChild(this.elements["mainContainer"].html);

            //Il titolo va subito sotto
            this.elements["mainContainer"].html.appendChild(this.elements["blockTitle"].html);

            //Sotto al titolo va la riga interna che serve per dividere il blocco in 3 sezioni
            this.elements["mainContainer"].html.appendChild(this.elements["internalRow"].html);

            //Attacco le 3 colonne
            this.elements["internalRow"].html.appendChild(this.elements["firstColumn"].html);
            this.elements["internalRow"].html.appendChild(this.elements["secondColumn"].html);
            this.elements["internalRow"].html.appendChild(this.elements["thirdColumn"].html);

            //La sezione centrale viene riempita con le statistiche

            for (let i=0;i<blockStatsMain.length;i++) {
                this.elements["secondColumnRow"+i] = document.createElement("div");
                this.elements["secondColumnRow"+i].className = "container";

                if(blockStatsMainType[i]=="icon"){
                    this.elements["secondColumnRow"+i+"img"] = document.createElement("img");
                    this.elements["secondColumnRow"+i+"img"].src = blockStatsMainContent[i];
                    this.elements["secondColumnRow"+i+"img"].title = blockStatsTitle[i];
                    this.elements["secondColumnRow"+i+"img"].style.width = "24px";
                    this.elements["secondColumnRow"+i+"img"].style.height = "24px";
                    this.elements["secondColumnRow"+i].appendChild(this.elements["secondColumnRow"+i+"img"]);
                }

                this.elements["secondColumnRow"+i].appendChild(this.elements[blockStatsMain[i]].html);

                this.elements["secondColumn"].html.appendChild(this.elements["secondColumnRow"+i]);
            }


            //La terza colonna contiene la descrizione
            this.elements["thirdColumn"].html.appendChild(this.elements["description"].html);
        }

        draw(){
            /* Struttura:
               Block - col-md-4
                     Nome
                     row
               Col1  Col2  Col3
               Port  Stat  Desc
            */

            //Il blocco, ovvero col-md-4, viene attaccato alla riga

        }

        updateBlockHtmlInners(stats){
            this.elements["blockTitle"].setInnerHtml(stats["name"]);
            for (let i=0;i<blockStatsMain.length;i++) {

                let col = document.createElement("div");
                col.className = "col-md-12";

                this.elements[blockStatsMain[i]].setInnerHtml(stats[blockStatsMain[i]]);
            }
            this.elements["description"].setInnerHtml(stats["description"]);
        }

        deleteBlockHtmlInners(){
            this.elements["blockTitle"].setInnerHtml(stats[""]);
            for (let i=0;i<blockStatsMain.length;i++) {
                this.elements[blockStatsMain[i]].setInnerHtml("");
            }
            this.elements["description"].setInnerHtml(stats[""]);
        }

        hide(){
            this.elements["block"].hide();
        }

        show(){
            this.elements["block"].show();
        }
    }

</script>