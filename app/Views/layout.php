<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Recommandation Bootstrap : The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Accueil</title>
       
        <!--________________________ Liens ________________________-->

        <!-- Bootstrap CDN -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Custom CSS-->
        <link rel="stylesheet" href="<?= $this->assetUrl('css/custom.css') ?>">

        <!-- Favicon -->
       <link rel="icon" type="image/png" href="<?= $this->assetUrl('img/favicon.png') ?>"/>
	   
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!--________________________ JQuery pour Bootstrap ________________________-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--________________________ Javascript pour Bootstrap ________________________-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!--_______________________________script pour le menu___________________________-->

        <script src="<?= $this->assetUrl("js/scriptMenu.js"); ?>"></script>



    </head>
<body>
	<div class="container">
		<header>
			 <!--________________________ Navbar principal ________________________-->

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img alt="Tournages-Parisiens" src="<?= $this->assetUrl('img/petitLogo.png') ?>">
                    </a>

                    <!-- Bouton pour faire apparaître le formulaire --> 
                    <!-- Standard button -->
                    <button onclick="openNav()" type="button" class="btn btn-default navbar-btn pull-right">Recherche</button>
                </div>
            </div>
    
        <!-- Navbar pour le slogan -->
            <nav class="custom-nav">
                    <h1>Découvrez Paris sous l’angle du cinéma !</h1>
            </nav>
		</header>

        <!-- BreadCrumb-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Fiche détaillée</a></li>
            <li class="breadcrumb-item"><a href="#">Parcours</a></li>
        </ol>

        <!--_______________________________ Menu slide ________________________________________________-->
        
        <div id="mySidenav" class="sidenav">
            
        <!-- Début du formulaire -->
            <form action="/ma-page-de-traitement" method="post">

                <a href="javascript:void(0)" class="glyphicon glyphicon-remove" onclick="closeNav()"></a>

                <div class="button">
                    <button type="button" class="btn btn btn-info btn-sm btn-block"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Autour de moi</button>
                </div>

                <div class="button">
                    <button type="button" class="btn btn btn-info btn-sm btn-block"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Parcours</button>
                </div>

                <hr/>
        
                <div class="form-group">
                    <label for="cp">Entrez un code postal</label>
                    <input type="number" value="75001" min="75001" max="75020" class="form-control input-sm" id="cp">
                </div>
                    
                <div class="form-group">
                    <label for="titre">Entrez un titre de film</label>
                    <input type="text" name="titre" placeholder="Titre de film" class="form-control input-sm" id="titre">
                </div>

                <div class="form-group">
                    <label for="realisateur">Entrez un nom de réalisateur</label>
                    <input type="text" name="realisateur" placeholder="Nom de réalisateur" class="form-control input-sm" id="realisateur">
                </div>

                <div class="button">
                    <button type="button" class="btn btn-primary btn-sm btn-block">Envoyer</button>
                </div>
                    
            <!-- Fin du formulaire -->
            </form>
        <!-- Fin du sidenav -->
        </div>

        <!--____________________________ Fin Menu slide ________________________________-->

		<section>
			<?= $this->section('main_content') ?>
		</section>

        <!--________________________ Footer customisé pour crédits ________________________-->
        <footer class="footer">
            <div class="container-fluid">
                <h4>&copy; 2017 Geeks team</h4>
            </div>
        </footer>
	</div>

    
    
</body>
</html>