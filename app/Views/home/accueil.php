<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

    <!--________________________ Main content : Remplacer cette partie par la carte ________________________-->
        <main>
            <div class="map" id="map"></div>
        </main>


        <!--________________________ Début du carousel Bootstrap ________________________-->

        <!-- Début de la section -->
        <section class="hidden-xs">
            <h2>Propositions de parcours</h2>
            <div class="container">
                <div class="row">
                    <!-- Carousel Bootstrap -->
                    <div id="carousel" class="carousel slide">

                        <!-- Boutons de navigation / Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel" data-slide-to="1"></li>
                            <li data-target="#carousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Enveloppe pour les thumbnails -->
                        <div class="carousel-inner">

                            <!-- Rangée de fiches de films / thumnails -->
                            <div class="item active">
                                <div class="row">

                                    <!-- Fiche de film / thumbnail -->
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <div class="thumbnail">
                                            <img src="<?= $this->assetUrl("img/film2.jpg"); ?>" alt="...">
                                            <div class="caption hidden-sm hidden-xs">
                                                <h3>Intouchables</h3>
                                                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fiche de film / thumbnail -->
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <div class="thumbnail">
                                            <img src="<?= $this->assetUrl("img/film1.jpg"); ?>" alt="...">
                                            <div class="caption hidden-sm hidden-xs">
                                                <h3>Intouchables</h3>
                                                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fiche de film / thumbnail -->
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <div class="thumbnail">
                                            <img src="<?= $this->assetUrl("img/film3.jpg"); ?>" alt="...">
                                            <div class="caption hidden-sm hidden-xs">
                                                <h3>Intouchables</h3>
                                                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fiche de film / thumbnail -->
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <div class="thumbnail">
                                            <img src="<?= $this->assetUrl("img/film1.jpg"); ?>" alt="...">
                                            <div class="caption hidden-sm hidden-xs">
                                                <h3>Intouchables</h3>
                                                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. </p>
                                            </div>
                                        </div>
                                    </div>

                            <!-- Fin de la rangée de thumbnails -->
                                </div>
                            </div>

                            <!-- Rangée de fiches de films / thumnails -->
                            <div class="item">
                                <div class="row">

                                    <!-- Fiche de film / thumbnail -->
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <div class="thumbnail">
                                            <img src="<?= $this->assetUrl("img/film2.jpg"); ?>" alt="...">
                                            <div class="caption hidden-sm hidden-xs">
                                                <h3>Intouchables</h3>
                                                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fiche de film / thumbnail -->
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <div class="thumbnail">
                                            <img src="<?= $this->assetUrl("img/film3.jpg"); ?>" alt="...">
                                            <div class="caption hidden-sm hidden-xs">
                                                <h3>Intouchables</h3>
                                                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fiche de film / thumbnail -->
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <div class="thumbnail">
                                            <img src="<?= $this->assetUrl("img/film1.jpg"); ?>" alt="...">
                                            <div class="caption hidden-sm hidden-xs">
                                                <h3>Intouchables</h3>
                                                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fiche de film / thumbnail -->
                                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                        <div class="thumbnail">
                                            <img src="<?= $this->assetUrl("img/film1.jpg"); ?>" alt="...">
                                            <div class="caption hidden-sm hidden-xs">
                                                <h3>Intouchables</h3>
                                                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. </p>
                                            </div>
                                        </div>
                                    </div>

                            <!-- Fin de la rangée de thumbnails -->
                                </div>
                            </div>
                        <!-- Fin de l'enveloppe --> 
                        </div>
                    <!--Fin du carousel -->
                    </div>
                <!--Fin du row -->
                </div>
            <!--Fin du container -->
            </div>   
            <!--Fin de la section-->
        </section>

        <!--__________________Début du caroussel version mobile ________________________-->

         <!-- Début de la section -->
        <section class="hidden-sm hidden-md hidden-lg hidden-xl">
            <h2>Propositions de parcours</h2>
            <div class="container">
                <div class="row">
                    <!-- Carousel Bootstrap -->
                    <div id="carousel" class="carousel slide">

                        <!-- Boutons de navigation / Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel" data-slide-to="1"></li>
                            <li data-target="#carousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Enveloppe pour les thumbnails -->
                        <div class="carousel-inner">

                            <!-- Rangée de fiches de films / thumnails -->
                            <div class="item active">
                                <div class="row">

                                    <!-- Fiche de film / thumbnail -->
                                    <div class="col-sm-12">
                                        <div class="thumbnail">
                                            <img src="<?= $this->assetUrl("img/film2.jpg"); ?>" alt="...">
                                            <div class="caption hidden-sm hidden-xs">
                                                <h3>Intouchables</h3>
                                                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fiche de film / thumbnail -->
                                    <div class="col-sm-12">
                                        <div class="thumbnail">
                                            <img src="<?= $this->assetUrl("img/film1.jpg"); ?>" alt="...">
                                            <div class="caption hidden-sm hidden-xs">
                                                <h3>Intouchables</h3>
                                                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fiche de film / thumbnail -->
                                    <div class="col-sm-12">
                                        <div class="thumbnail">
                                            <img src="<?= $this->assetUrl("img/film3.jpg"); ?>" alt="...">
                                            <div class="caption hidden-sm hidden-xs">
                                                <h3>Intouchables</h3>
                                                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fiche de film / thumbnail -->
                                    <div class="col-sm-12">
                                        <div class="thumbnail">
                                            <img src="<?= $this->assetUrl("img/film1.jpg"); ?>" alt="...">
                                            <div class="caption hidden-sm hidden-xs">
                                                <h3>Intouchables</h3>
                                                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. </p>
                                            </div>
                                        </div>
                                    </div>

                            <!-- Fin de la rangée de thumbnails -->
                                </div>
                            </div>

                            <!-- Rangée de fiches de films / thumnails -->
                            <div class="item">
                                <div class="row">

                                    <!-- Fiche de film / thumbnail -->
                                    <div class="col-sm-12">
                                        <div class="thumbnail">
                                            <img src="<?= $this->assetUrl("img/film2.jpg"); ?>" alt="...">
                                            <div class="caption hidden-sm hidden-xs">
                                                <h3>Intouchables</h3>
                                                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fiche de film / thumbnail -->
                                    <div class="col-sm-12">
                                        <div class="thumbnail">
                                            <img src="<?= $this->assetUrl("img/film3.jpg"); ?>" alt="...">
                                            <div class="caption hidden-sm hidden-xs">
                                                <h3>Intouchables</h3>
                                                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fiche de film / thumbnail -->
                                    <div class="col-sm-12">
                                        <div class="thumbnail">
                                            <img src="<?= $this->assetUrl("img/film1.jpg"); ?>" alt="...">
                                            <div class="caption hidden-sm hidden-xs">
                                                <h3>Intouchables</h3>
                                                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fiche de film / thumbnail -->
                                    <div class="col-sm-12">
                                        <div class="thumbnail">
                                            <img src="<?= $this->assetUrl("img/film1.jpg"); ?>" alt="...">
                                            <div class="caption hidden-sm hidden-xs">
                                                <h3>Intouchables</h3>
                                                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. </p>
                                            </div>
                                        </div>
                                    </div>

                            <!-- Fin de la rangée de thumbnails -->
                                </div>
                            </div>
                        <!-- Fin de l'enveloppe --> 
                        </div>
                    <!--Fin du carousel -->
                    </div>
                <!--Fin du row -->
                </div>
            <!--Fin du container -->
            </div>   
            <!--Fin de la section-->
        </section>

        
        <!--_______________________________script pour le menu___________________________-->

        <script src="<?= $this->assetUrl("js/scriptMenu.js"); ?>"></script>
<script>
    var Mike = 0;

</script>
   <!--________________________ Traitement Pour la google Maps ________________________-->
        
    <script src="<?= $this->assetUrl("js/scriptMaps.js"); ?>"></script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_pQO55smx8954HCzgkMR0HiZoJ-BCXWc&callback=initMap"
    async defer></script>
<?php $this->stop('main_content') ?>