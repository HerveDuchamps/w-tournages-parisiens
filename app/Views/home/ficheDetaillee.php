<?php $this->layout('layout', ['title' => 'FicheDetaillee']) ?>

<?php $this->start('main_content') ?>

<div class="container">
            <div class="row">

                <!-- Titre du film-->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="titre">
                </div>

                <!-- Affiche du film-->
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" id="affiche">
                </div>
                
                <!-- Lien Youtube du film-->
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8" id="bandeAnnonce">
                </div>

                <!-- Synopsis -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="synopsis">
                </div>

                <!-- Photo du réalisateur -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="PhotoRealisateur">
                </div>

                <!-- Nom du réalisateur -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="realisateur">
                </div>

                 <!-- Punchline -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="punchline">
                </div>

                <!-- Genre -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="genres">
                </div>

                <!-- Langue -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="langue">
                </div>

                <!-- Date de sortie -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="dateDeSortie">
                </div>

            </div>
        </div>

<?php if(isset($nomFilm)):  ?>  
<script>
    var Mike = "<?= $nomFilm ?>"
</script>
<script src="<?= $this->assetUrl("js/scriptMovieDB.js"); ?>"></script>
    <?php endif; ?>

<?php $this->stop('main_content') ?>