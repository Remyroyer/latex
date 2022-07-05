<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LATEX_NEW</title>
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
        <script src="script.js" async></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo.png">
    
</head>
    <body>
       <header>

       </header>
        
       <div class="container-flex">
        <div class="row h-100 justify-content-end align-items-center no-gutters" id="bg_left">
            <div class="col-3 flex-row">
                <section class="">
                    <h1>The La... Tex... Game</h1>
                    <div class="curve"></div>
                  </section>
            </div>
                <div class="col-8 bg-info" id="id_border">
                    <div class="row-6" id="id_soustitre"><h2>Jeu du pendu</h2></div>
                        <div class="row-6 p-2 rounded-top offset-2" id="id_welcome"><h2>Bonjour & Bienvenue,</h2></div>
                        <div class="row-5 rounded-left" id="id_line_1">
                            <div class="row-6 rounded-left p-3" id="id_line_2"></div>
                                <input type="text" class="form-control col-8 offset-2" placeholder="Votre nom" aria-label="Username" required>
                                <div class="col-9 p-4">

                                    <div class="container offset-1">
                                        <div class="card"><!--style="width: 15rem;"-->
                                            <div class="card-header text-center">
                                                Définissez le sexe de votre avatar!
                                            </div>
                                            <div class="card-body">
                                                <div class="form-check offset-3">
                                                    <input class="form-check-input" type="radio" name="Féminin" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                      Féminin
                                                    </label>
                                                  </div>
                                                <div class="form-check offset-3">
                                                    <input class="form-check-input" type="radio" name="Féminin" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                      Masculin
                                                    </label>
                                                </div>

                                            </div>
                                           
                                        </div>
                                    </div>  
                                      
                                </div>
                                <div class="row-6 rounded-top p-3" id="id_line_3"></div>
                        </div>
                        <div class="offset-1 col-10 row-6 rounded-top justify-content-center lead" id="id_lead">
                            Sébastien et Rémy ont l'honneur de vous présenter un jeu style ''pendu'' !
                            Vous devrez effectivement trouver et écrire des mots afin d'éviter de dénuder votre avatar !
                            Mais puisque nous sommes quand même sympa, et qu'on veux vous laisser un chance, nous vous donnons quelques
                            régles a respecter pour avoir une chance de gagner !
                        </div>
                        <div class="row-6 p-3" id="id_line_4"></div>
                        <div class="row-6" id="id_line_5">
                            <ul class="list-group offset-1 col-9">
                            <li class="list-group-item" aria-current="true">
                                
                                <a class="btn"  id="id_butt_1" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="true" aria-controls="collapse1"><h3>Les régles</h3></a></ul>
                                <div class="collapse hide" id="collapse1">
                                    <li class="list-group-item list-group-item-action offset-2 col-7">Vous avez " + nb_mots + " mots à trouver en " + parseInt(departMinutes*60) + " secondes,</li>
                                    <li class="list-group-item list-group-item-action offset-2 col-7">Tout mot recherché devra contenir les lettres TEX!</li>
                                    <li class="list-group-item list-group-item-action offset-2 col-7">Ecrivez tout en minuscule et sans accents,</li>
                                    <li class="list-group-item list-group-item-action offset-2 col-7">Vous avez le droit à 5 erreurs avant que, votre avatar vous le fasse payer!</li>
                                    <li class="list-group-item list-group-item-action offset-2 col-7">Vous serez chronometré et classé suivant votre vitesse.</li>
                                </ul> 
                                </div>
                                
                        </div>
                        <div class="row-6 p-2"  id="id_line_5"></div>
                        <div class="row-6 p-2 rounded-bottom"  id="id_line_6"><button type="button" class="btn" id="id_butt_2" onclick="continu()">Continuer</button></div>
                        <div class="container text-md-center">
                            <div class="btn-group" role="group" aria-label="">
                                <button type="button" class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">CGU</button>
                                <button type="button" class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">A Propos</button>
                                <button type="button" class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">Adam & Dev</button>
                                <button type="button" class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">Plan du site</button>
                            </div>
                        </div>
                </div>
            <div class="col-1"></div>
        </div>
    </div>
       

        
        <footer>
            <div class="container-fluid text-center bg-light">Powered by Sébastien</div>

            <div class="container" id="id_cards">
                <div class="">
                            <!--Début de toutes les cards-->

                            <!--Début Card CGU collapse2-->
                            <div class="collapse hide" id="collapse2">
                    <div class="card text-center col-9 offset-3">
                <div class="card text-center"><h1>CGU</h1></div>
                <div class="card text-center">
                    <img src="img/1920px-Exécution_de_Louis_Capet,_le_21_janvier_1793.jpg" class="card-img-top img-fluid" alt="Exécution de Louis XVI">
                    <div class="card-body">
                        <h3 class="card-subtitle">Conditions d'utilisation du site</h3>
                        <p class="card-text">Vous devez prendre connaissances des CGU avant d'utiliser le site.<br>
                            Les 11 articles des CGU, sont disponibles via le lien vers le fichier :</p>
                        <a href="media/CGU_220622_Adam_Dev.pdf" download='CGU_Adam_Dev' target='_blank' class="btn" id="id_butt_3">CGU_220622_Adam_Dev.pdf</a>
                    </div>
                    <a href="#" class="btn btn-dark" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Haut de page</a>
                </div>
                    </div>
                            </div>
                            <!--Fin Card CGU collapse2-->

                            <!--Début Card A Propos collapse3-->
                            <div class="collapse hide" id="collapse3">
                                <div class="card text-center col-9 offset-3">
                            <div class="card text-center"><h1>A Propos</h1></div>
                            <div class="card text-center">
                                <img src="img/mbe-4025_motif-papeterie-antique-histoire-vieux-papier-elegant_6.jpg" class="card-img-top img-fluid" alt="....">
                                <div class="card-body">
                                    <h3 class="card-subtitle">-</h3>
                                    <p class="card-text">The La...Tex...Game est un jeu du pendu autour du mot Tex.<br><br>Ce jeu a été développé
                                        dans le cadre d'un exercice de collabaration de deux Dev. web en formation.</p>
                                </div>
                                <a href="#" class="btn btn-dark" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Haut de page</a>
                            </div>
                                </div>
                            </div>

                            <!--Fin Card A Propos collapse3-->

                            <!--Début Card Adam & Dev collapse4-->
                            <div class="collapse hide" id="collapse4">
                                <div class="card text-center col-9 offset-3">
                            <div class="card text-center"><h1>Adam & Dev</h1></div>
                            <div class="card text-center">
                                <img src="img/5ccc9b9a240000130a548248.webp" class="card-img-top img-fluid" alt="....">
                                <div class="card-body">
                                    <h3 class="card-subtitle">« Le jardin d'ADAM & DEV », l'histoire d'une genése.</h3>
                                    <p class="card-text">Rémy et Sébastien, ou l'association du fût et de la bierre...<br><br>Pour votre plus grand
                                        plaisir et le notre, <br>nous étudions toutes les demandes de réalisation de sites internet!<br><br>
                                        Même ceux des plus fous... comme nous.</p>
                                </div>
                                <a href="#" class="btn btn-dark" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">Haut de page</a>
                            </div>
                                </div>
                            </div>
                            <!--Fin Card Adam & Dev collapse4-->

                            <!--Début Card Plan du site collapse5-->
                            <div class="collapse hide" id="collapse5">
                                <div class="card text-center col-9 offset-3">
                            <div class="card text-center"><h1>Plan du site</h1></div>
                            <div class="card text-center">
                                <img src="img/csm_EM_10_mosaique_a7aae5b153.jpg" class="card-img-top img-fluid" alt="....">
                                <div class="card-body">
                                    <h3 class="card-subtitle">-</h3>
                                    <p class="card-text">
                                        <ul class='ul_bottom'>
                                            <li class="list-group-item list-group-item-action offset-1 col-9">Accueil du jeu</li>
                                            <li class="list-group-item list-group-item-action offset-1 col-9">CGU</li>
                                            <li class="list-group-item list-group-item-action offset-1 col-9">A propos</li>
                                            <li class="list-group-item list-group-item-action offset-1 col-9">Adam & Dev</li>
                                            <li class="list-group-item list-group-item-action offset-1 col-9">Plan du site</li>
                                            <li class="list-group-item list-group-item-action offset-1 col-9">Tableau des scores</li>
                                        </ul>
                                    </p>
                                </div>
                                <a href="#" class="btn btn-dark" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">Haut de page</a>
                            </div>
                                </div>
                            </div>
                            <!--Fin Card Plan du site collapse5-->

                            <!--Fin de toutes les cards-->
                </div>
            </div>

        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>