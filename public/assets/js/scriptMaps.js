          var map;
          var Mikeclose = 0;
          var markers = ["n"];
          var Bouchra = 0;
          function initMap() {// ! \\ on doit appeler cette fonction dans la balise <script> calback(voir la ligne 51)
            var myLatLng = {lat: 48.862908, lng: 2.33717}
            var myUrl = (Mike != 0)?"http://localhost/tournages-parisiens/public/api/lieu/film" : "http://localhost/tournages-parisiens/public/api/lieu";
           var MikeData = (Mike != 0)? "film="+Mike:"";
            $.ajax({
                //url: "http://localhost/tournages-parisiens/public/api/lieu",
                url: myUrl,
                type: "POST",
                data: MikeData,
                success: function (reponse){
                    TraitementMaps(reponse);//Une fois qu'il récupère les données => il va appelé le Traitement (Maps)
                    TraitementGeoloc(reponse);
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
                if(i == 200)break;

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
          
          //Traitement pour la goélocalisation:
          function TraitementGeoloc(reponse) {

            var infoWindow = new google.maps.InfoWindow({map: map});

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(function(position) {
              var pos = {
                  lat: position.coords.latitude,
                  lng: position.coords.longitude
                };

                infoWindow.setPosition(pos);
                infoWindow.setContent('Location found.');
                map.setCenter(pos);
              }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
              });
            } else {
              // Browser doesn't support Geolocation
              handleLocationError(false, infoWindow, map.getCenter());
            }
        
          function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                  'Error: The Geolocation service failed.' :
                  'Error: Your browser doesn\'t support geolocation.');
            }
          }
        }