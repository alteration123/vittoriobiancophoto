<!-- functions -->
@include('javascript.function.load-actor-in-vector')
@include('javascript.function.alertTest') <!-- Inizializzo alertTest, funzione che mi servirà per fare debug -->
@include('javascript.function.ajax-init') <!-- Inizializzo ajax, servirà per passare i dati al server -->
@include('javascript.function.image-to-canvas') <!-- Le immagini che verranno caricate dovranno essere ridimensionate, meglio fare con canvas -->
@include('javascript.function.canvas-to-image') <!-- Una volta manipolati i canvas, questi dovranno tornare ad essere immagini per essere salvate -->
@include('javascript.function.load-actor-with-ajax') <!--  -->
@include('javascript.function.load-actors-with-ajax-by-name') <!--  -->
@include('javascript.function.load-actors-ids-with-ajax') <!--  -->
@include('javascript.function.load-actors-with-ajax-by-filter') <!--  -->

<!-- classes -->
@include('javascript.class.list')