<script>

    //Converte un canvas in immagine, operazione necessaria per salvarla
    function convertCanvasToImage(canvas) {
        var image = new Image();
        image.src = canvas.toDataURL("image/png");
        return image;
    }

</script>