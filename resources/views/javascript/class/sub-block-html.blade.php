<script>

    class SubBlockHtml{
        //Variables
        visible;
        html;

        //Constructor
        constructor() {
            this.visible = true;
        }

        initializeSubBlockHtml(elementType){
            this.html = document.createElement(elementType);
        }

        setClass(elementClass){
            this.html.className = elementClass;
        }

        addClass(elementClass){
            let oldClass = this.html.className;
            oldClass += " " + elementClass;
            this.html.className = oldClass;
        }

        setId(elementId){
            this.html.id = elementId;
        }

        setInnerHtml(text){
            this.html.innerHTML = text;
        }

        hide(){
            this.html.style.display = "none";
            this.visible = false;
        }

        show(){
            this.html.style.display = "block";
            this.visible = true;
        }

        draw(){
            if (this.visible == true){
                this.show();
            }
            else{
                this.hide();
            }
        }
    }

</script>