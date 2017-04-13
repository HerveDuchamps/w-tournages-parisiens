<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Recommandation Bootstrap : The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Accueil</title>
       
        <!--________________________ Liens <________________________--></________________________-->
        <!-- Bootstrap CDN -->
        
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Custom CSS-->
        <link rel="stylesheet" href="<?= $this->assetUrl('css/custom.css') ?>">

        <!-- Favicon -->
       <link rel="icon" type="image/png" href="<?= $this->assetUrl('img/favicon.png') ?>"/>
	   
        

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
                    <button type="button" class="btn btn-default navbar-btn pull-right">
                    <span class="glyphicon glyphicon-menu-hamburger"></span>
                    </button>
                </div>
            </div>
    
        <!-- Navbar pour le slogan -->
            <nav class="custom-nav">
                    <h1>Découvrez Paris sous l’angle du cinéma !</h1>
            </nav>
		</header>

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