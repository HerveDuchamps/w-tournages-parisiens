<?php $this->layout('layout', ['title' => 'FicheDetaillee']) ?>

<?php $this->start('main_content') ?>
        <main>
            <div class="map" id="map"></div>
        </main>
       
        <p id="idfilm"></p>
        <p id="titre"></p>
        <p id="synopsis"></p>
        <p id="punchline"></p>
        <div>Genres : <p id="genres" style="display: inline;"></p></div></br>
        <p id="langue"></p>
        <p id="dateDeSortie"></p>
        <p id="PhotoRealisateur"></p>
        <p id="realisateur"></p>
        <p id="acteurs"></p>
        <p id="affiche"></p></br>
        <p>Acteurs : </p></br>
        <p id="photoActeurs"></p>
        <P id="bandeAnnonce"></p>

      <?php if(isset($nomFilm)):  ?>  
<script>
    var Mike = "<?= $nomFilm ?>"
</script><!--________________________ Traitement Pour la google Maps ________________________-->
        
    <script src="<?= $this->assetUrl("js/scriptMaps.js"); ?>"></script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_pQO55smx8954HCzgkMR0HiZoJ-BCXWc&callback=initMap"
    async defer></script>
    <script src="<?= $this->assetUrl("js/scriptMovieDB.js"); ?>"></script>
    <?php endif; ?>




<?php $this->stop('main_content') ?>