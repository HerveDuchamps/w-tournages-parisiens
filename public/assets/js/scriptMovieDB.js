
            //Recupération de l'ID du film sur la base d'une recherche sur le titre du film
            var settings = {
                "async": true,
                "crossDomain": true,
                "url": "https://api.themoviedb.org/3/search/movie?api_key=e8a06e24fc3024fae50dfc6aa6e37d40&query="+Mike,
                "method": "GET",
                "headers": {},
                "data": "{}"
            }
            $.ajax(settings).done(function(response) {
                var idFilm = response.results[0].id;
                
                //Recherche des premières infos (Id film, titre, synopsis, punchline, budget, affiche, langhe et date de sortie)
                var settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": "https://api.themoviedb.org/3/movie/"+idFilm+"?language=FR&api_key=e8a06e24fc3024fae50dfc6aa6e37d40",
                    "method": "GET",
                    "headers": {},
                    "data": "{}"
                }

                $.ajax(settings).done(function(responseSupp) {
                    console.log(responseSupp);
                    $("#idfilm").append("ID : " + idFilm);              
                    $("#titre").append("Titre : " + responseSupp.original_title);
                    $("#synopsis").append("Synopsis : " + responseSupp.overview);
                    if(typeof responseSupp.tagline != "undefined"){
                        $("#punchline").append("Punch line : " + responseSupp.tagline);
                        }
                    $("#budget").append("Budget : " + responseSupp.budget);
                    $("#affiche").append("<img src=https://image.tmdb.org/t/p/w300_and_h450_bestv2/" + responseSupp.poster_path + ">");
                    for (var i in responseSupp.genres) {
                        $("#genres").append(" " + responseSupp.genres[i].name);
                    }
                    $("#langue").append("Langue originale : " + responseSupp.spoken_languages[0].name);
                    $("#dateDeSortie").append("Date de sortie : " + responseSupp.release_date);
                });

                // Recherche des noms et photos des cinq premiers acteurs ainsi que le réalisateur
                var settings = {
                "async": true,
                "crossDomain": true,
                "url": "https://api.themoviedb.org/3/movie/" + idFilm + "/credits?api_key=e8a06e24fc3024fae50dfc6aa6e37d40",
                "method": "GET",
                "headers": {},
                "data": "{}"
                }
                $.ajax(settings).done(function(responseActors) {
                    // Acteurs
                    for (i = 0; i<6; i++) {
                    $("#photoActeurs").append("<img src=https://image.tmdb.org/t/p/w132_and_h132_bestv2/"  + responseActors.cast[i].profile_path + " style='border-radius: 50%;'><em style='width: 140px;display: inline-block;'>" + responseActors.cast[i].name + " </em>");
                    }
                    // Réalisateur
                    for (var i in responseActors.crew) {
                            if(responseActors.crew[i].job == "Director"){
                            $("#realisateur").append("Réalisateur : " + responseActors.crew[i].name);
                            $("#PhotoRealisateur").append("<img src=https://image.tmdb.org/t/p/w132_and_h132_bestv2/"  + responseActors.crew[i].profile_path + " style='border-radius: 50%;'>");
                            }
                    }
                });
                // Recherche de la bande annonce
                var settings = {
                "async": true,
                "crossDomain": true,
                "url": "https://api.themoviedb.org/3/movie/" + idFilm + "/videos?language=FR&api_key=e8a06e24fc3024fae50dfc6aa6e37d40",
                "method": "GET",
                "headers": {},
                "data": "{}"
                }

                $.ajax(settings).done(function (responseBandeAnnonce) {
                    console.log(responseBandeAnnonce);
                    // Vérification si nous avons la bande annonce
                    if(typeof responseBandeAnnonce.results[0] != "undefined"){
                        var bandeAnnonce = responseBandeAnnonce.results[0].key;
                        $("#bandeAnnonce").append("<iframe width='560' height='315' src=https://www.youtube.com/embed/" + bandeAnnonce + " frameborder='0' allowfullscreen></iframe>");
                    }
                });
            });