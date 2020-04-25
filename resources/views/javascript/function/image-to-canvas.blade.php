<script>

    //Converte un'immagine in canvas, operazione necessaria per manipolarla
    function convertImageToCanvas(image) {
        var canvas = document.createElement("canvas");
        canvas.width = image.width;
        canvas.height = image.height;
        canvas.getContext("2d").drawImage(image, 0, 0);

        return canvas;
    }

</script>