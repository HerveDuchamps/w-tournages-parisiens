/*_________________________Formulaire latéral qui slide_________________________*/

(function() {
	var $body = document.body, $menu_trigger = $body.getElementsByClassName('menu-trigger')[0];

	if ( typeof $menu_trigger !== 'undefined' ) {
		$menu_trigger.addEventListener('click', function() {
            console.log("toto")
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

}).call(this);

$( "nav#slide-menu>ul>li>a" ).click(function() { // Evénément "cliquer" menu slide
    var myElem = this; // Enregistrement de l'élément "cliquer"
    $( "nav#slide-menu>ul>li>a" ).each(function( index ) { // Boucle sur tout les éléments du menu
        if($( this ).text() == $(myElem).text()){ // Compare le texte de l'élément avec la liste
            var classe = $( this ).attr( "class" ); // Récupere la classe de l'élément de la liste
            if (!$("#"+classe).is(':visible') ) // Vérification que la classe est bien visible
                $("#"+classe).show(); // Afficher la classe
            else
                $("#"+classe).hide(); // Cache la classe
        }     console.log( index + ": " + $( this ).text() );
    });
});

/*_________________________ Fin du formulaire latéral qui slide_________________________*/