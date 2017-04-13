var map;
          var Mikeclose = 0;
          var markers = ["n"];
          function initMap() {// ! \\ on doit appeler cette fonction dans la balise <script> calback(voir la ligne 51)
            var myLatLng = {lat: 48.862908, lng: 2.33717}
            $.ajax({
                url: "http://localhost/tournages-parisiens/public/api/lieu",
                type: "POST",
                success: function (reponse){
                    TraitementMaps(reponse);//Une fois qu'il récupère les données => il va appelé le Traitement (Maps)
                }
            })
                     //Traitement Google Maps
            function TraitementMaps(reponse) {
              var resultat = reponse; //Transformer l'objet php en fichier json 

              map = new google.maps.Map(document.getElementById('map'),{
                center: myLatLng,
                zoom: 12
              });

             

                      
            var resultat = reponse; //Transformer l'objet php en fichier json 

             
               
              for(var i=0; i < resultat.length; i++){//boucle pour afficher tous les marquers
                if(i == 150)break;

                var res = resultat[i].geo_coordinates.split(",");
               

                /* ***Traitement pour la PopUp*** */
                var info = '<h1>'+resultat[i].Titre+'</h1>'+'<p>'+resultat[i].Realisateur+'</p>'+"<a href='ficheDetaillee?film="+resultat[i].Titre+"'>Voir la fiche détaillée</a>";
                var infowindow = new google.maps.InfoWindow({
                  //marker: marker[i],
                  placement: 'top',
                  content: info,
                  MikeTitre: resultat[i].Titre,
                  // maxWidth: 400,
                  // maxHeight: 200
                });

                 //création du marqueur
                var marker = new google.maps.Marker({ //Création d'objet pour les markeurs 
                  position: {lat: parseFloat(res[0]), lng: parseFloat(res[1])},//Parser les valeurs
                  animation: google.maps.Animation.DROP,
                  Mike: infowindow,
                  //draggable: true,
                  map: map,
                  visible: true
                });

                markers[i] = marker;//Stocker les marquers dans un array(tableau)

                //Création de l'evenement sur le marqueur
                google.maps.event.addListener(marker,'click' , function() {
                  if(Mikeclose != 0)//S'il y a une popup ouvert tu le fermer 
                    Mikeclose.close();
                  this.Mike.open(map, this);//Sinon tu ouvre la popup
                  Mikeclose = this.Mike;
                });              
              }
               
              
                
             // Add a marker clusterer to manage the markers.
              var markerCluster = new MarkerClusterer(map, markers,{imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
            /*
            *Création des clusters 
            *Ils prennent 3 paramètres la map(voir la ligne 26), markers(l'ensembles des marquers il s'agit     d'un tableau(voir la ligne 36)) et l'emplacemnt de l'image là il s'agit d'un lien des photos de    google. 
            */
            }
        }