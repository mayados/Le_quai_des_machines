<?php

/* Il faut avoir accès au tableau $_SESSION pour connaître les plats du jour */
session_start();


/* Construire les variables pour le menu de la semaine */
$menu1 = " Pavé de sandre au beurre blanc du Pays Nantais (riz ou pomme de terre)";
$menu2 = " Chaudrée de palourdes";
$menu3 = "canard de Challans plongé dans une mare de sauce au muscadet (Accompagnement légumes de saison)";
$menu4 = " Bardatte aux herbes fraîches sur un fondu de carotte et poireau primeur";
$menu5 = " Plateau de fruits de mer de l’Atlantique";
$menu6 = " Saucisse au Muscadet et sa robe de crêpe au sarrasin ";
$menu7 = " Carré de côtes de porc braisé";

$entree1 = " Salade ou velouté de mâche nantaise";
$entree2 = " Rillettes au lapin";
$entree3 = " Grenouilles des marais à la crème";
$entree4 = " Pâté de foie chaud";
$entree5 = " Poires tapées au vin";
$entree6 = " Truite fumée, crème ciboulette";
$entree7 = " Salade de Langouille";

$dessert1 = " Fondant baulois et fleur de glace Pêche de Vigne";
$dessert2 = " Fouace perdue aux fruits rouges";
$dessert3 = " Fouace perdue aux fruits rouges";
$dessert4 = " Fondue de curé Nantais gratinée et variante de poires";
$dessert5 = " Tourton du pays nantais et son Curé nantais";
$dessert6 = " Gâteau nantais et crémeux de yaourt";
$dessert7 = " Petit beurre sur lit de Confiture de Muroise du Pays Nantais";

$menuSemaine = 
[
'lundi'=> 
    [
     'entree'=>$entree1, 
     'plat'=>$menu1, 
     'dessert'=>$dessert1
    ],
'mardi'=> 
    [
     'entree'=>$entree2, 
     'plat'=>$menu2, 
     'dessert'=>$dessert2
    ], 
'mercredi'=> 
    [
     'entree'=>$entree3, 
     'plat'=>$menu3, 
     'dessert'=>$dessert3
    ], 
'jeudi'=> 
    [
     'entree'=>$entree4, 
     'plat'=>$menu4, 
     'dessert'=>$dessert4], 
'vendredi' => 
    [
     'entree'=>$entree5, 
     'plat'=>$menu5, 
     'dessert'=>$dessert5], 
'samedi' => 
    [
     'entree'=>$entree6, 
     'plat'=>$menu6, 
     'dessert'=>$dessert6],
'dimanche' => 
    [
     'entree'=>$entree7, 
     'plat'=>$menu7, 
     'dessert'=>$dessert7]
];

/* Il faut toujours mettre les éléments que l'on veut mettre dans $_SESSION dans une autre variable car il faut pouvoir l'appeler */
$_SESSION['menuSemaine'][] = $menuSemaine;
/* Affiche les menus de la semaine */
// foreach($_SESSION['menuSemaine'] as $index => $jour){
//     var_dump($jour);
// }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Restaurant Le Quai des Machines</title>
</head>
<body>
    <div class="container-page">
        <header>
            <nav id="menu-navigation" class="flex">
                <div id="logo-site">
                    <img id="img-logo" src="img/logo_resto.png" alt="Logo du restaurant">
                </div>
                <ul id="items-menu" class="flex">
                    <li class="item-menu"><a href="#">Accueil</a></li>
                    <span class="barre">|</span>
                    <li class="item-menu"><a href="#gallery">Galerie</a></li>
                    <span class="barre">|</span>
                    <li class="item-menu"><a href="#menu">Menu de la semaine</a></li>
                    <span class="barre">|</span>
                    <li class="item-menu"><a href="#evenements">Evènements</a></li>
                    <span class="barre">|</span>
                    <li class="item-menu"><a href="#formulaire">Contact</a></li>
                </ul>
                <!--Span dans class burger pour mettre les 3 barres par la suite-->
                <button class="burger">
                    <span class="bar-burger"></span>
                </button>
                <div class="dark-mode">
                    <input type="checkbox" class="checkbox" id="checkbox">
                  <label for="checkbox" id="label-darkmode">
                    <i class="fa-solid fa-moon"></i>
                    <i class='fas fa-sun'></i>
                    <div class='ball'>
                  </label>
                </div>
            </nav>
        </header>

       <div id="main">
            <section class="accueil">
                <div class="bg-container">
                    <div class="bg-accueil">
                        <h1>Le Quai des Machines</h1>
                    </div>
                </div>
                <div class="arrow-container">

                    <span id="fleche"></span>

                </div>
            </section>

            <section id="gallery">
                <div class="gallery-container">
                    <div class="row">
                        <div class="column">
                            <a target="_blank" href="./img/presentation-assiette-principale.png">
                                <img src="./img/presentation-assiette-principale.png" alt="présentation assiette principale">
                            </a>
                            <a target="_blank" href="img/cuisinier.png">
                            <img src="img/cuisinier.png" target="_blank" alt="cuisinier">
                            </a>
                        </div>
                        <div class="column">
                            <a target="_blank" href="img/presentation-restaurant.jpg">
                            <img src="img/presentation-restaurant.jpg" alt="presentation du restaurant">
                            </a>
                            <a target="_blank" href="img/presentation-dune-assiette-plat.jpg">
                            <img src="img/presentation-dune-assiette-plat.jpg" alt="assiette plat medaillon poulet">
                            </a>

                        </div>
                        <div class="column">
                            <a target="_blank" href="img/assiette-plat-homard.png">
                            <img src="img/assiette-plat-homard.png" alt="assiette plat homard">
                            </a>
                            <a target="_blank" href="img/restaurant-interieur.jpg">
                            <img src="img/restaurant-interieur.jpg" alt="restaurant interieur">
                            </a>
                        </div>
                        <div class="column">
                            <a target="_blank" href="img/presentation-des-vins.jpg">
                            <img src="img/presentation-des-vins.jpg" alt="presentation des vins">
                            </a>
                            <a target="_blank" href="img/dessert.jpg">
                            <img class="dessert" src="img/dessert.jpg" alt="dessert mangue et fondant au chocolat">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <h2 id="title-menu">Carte des Menus</h2> 
            <section id="menu">
 
                <div id="flex-menu">           
                        <ul class="ul-acordeon">
                            <li>
                                <a href="#menu1" class="button">Lundi</a>
                                <div id="menu1" class="content menu">
                                    <div class='entree'>
                                        <p>Entrée<br>
                                        <p><?php echo $entree1; ?></p>                                    
                                    </div>
                                    <div class='plat'>
                                        <p>Plat <br>
                                        <p><?php echo $menu1; ?></p>                                    
                                    </div>
                                    <div class='dessert'>
                                        <p>Dessert</p>
                                        <p><?php echo $dessert1; ?></p>                                    
                                    </div>
                                </div>  
                            </li>
                            <li>
                                <a href="#menu2" class="button">Mardi</a>
                                <div id="menu2" class="content menu">
                                    <div class='entree'>
                                        <p>Entrée<br>
                                        <p><?php echo $entree2; ?></p>                                    
                                    </div>
                                    <div class='plat'>
                                        <p>Plat</p>
                                        <p><?php echo $menu2; ?></p>                                    
                                    </div>
                                    <div class='dessert'>
                                        <p>Dessert</p>
                                        <p><?php echo $dessert2; ?></p>                                    
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#menu3" class="button">Mercredi</a>
                                <div id="menu3" class="content menu">
                                    <div class='entree'>
                                        <p>Entrée<br>
                                        <p><?php echo $entree3; ?></p>                                    
                                    </div>
                                    <div class='plat'>
                                        <p>Plat</p>
                                        <p><?php echo $menu3; ?></p>                                    
                                    </div>
                                    <div class='dessert'>
                                        <p>Dessert</p>
                                        <p><?php echo $dessert3; ?></p>                                    
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#menu4" class="button">Jeudi</a>
                                <div id="menu4" class="content menu">
                                    <div class="entree">
                                        <p>Entrée</p>
                                        <p><?php echo $entree4; ?></p>                                    
                                    </div>
                                    <div class="plat">
                                        <p>Plat</p>
                                        <p><?php echo $menu4; ?></p>                                    
                                    </div>
                                    <div class="dessert">
                                        <p>Dessert</p>
                                        <p><?php echo $dessert4; ?></p>                                      
                                    </div>
                                </div> 
                            </li>
                            <li>
                                <a href="#menu4" class="button">Vendredi</a>
                                <div id="menu4" class="content menu">
                                    <div class="entree">
                                        <p>Entrée</p>
                                        <p><?php echo $entree5; ?><p>                                    
                                    </div>
                                    <div class="plat">
                                        <p>Plat</p>
                                        <p><?php echo $menu5; ?></p>                                    
                                    </div>
                                    <div class="dessert">
                                        <p>Dessert</p>
                                        <p><?php echo $dessert5; ?></p>                                    
                                    </div>
                                </div> 
                            </li>
                            <li>
                                <a href="#menu4" class="button">Samedi</a>
                                <div id="menu4" class="content menu">
                                    <div class="entree">
                                        <p>Entrée</p>
                                        <p><?php echo $entree6; ?></p>                                    
                                    </div>
                                    <div class="plat">
                                        <p>Plat</p>
                                        <p><?php echo $menu6; ?></p>                                    
                                    </div>
                                    <div class="dessert">
                                        <p>Dessert</p>
                                        <p><?php echo $dessert6; ?></p>                                    
                                    </div>
                                </div> 
                            </li>
                            <li>
                                <a href="#menu4" class="button">Dimanche</a>
                                <div id="menu4" class="content menu">
                                    <div class="entree">
                                        <p>Entrée</p>
                                        <p><?php echo $entree7; ?></p>                                    
                                    </div>
                                    <div class="plat">
                                        <p>Plat</p>
                                        <p><?php echo $menu7; ?></p>                                    
                                    </div>
                                    <div class="dessert">
                                        <p>Dessert</p>
                                        <p><?php echo $dessert7; ?></p>                                
                                    </div>

                                </div> 
                            </li>
                            <div id="download-pdf">
                                <a href="./img/CarteMenu.pdf" download="Carte des menus" onclick="window.open('./img/CarteMenu.pdf')">Téléchargez le Menu</a>
                            </div>   
                        </ul>
                        <div class="video">
                            <iframe width="550" height="350" src="https://www.youtube.com/embed/1Rq6-gNwIUY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen></iframe>
                        </div>
                     </div>
                </div> 
            </section>

                                

                                

            <section id="evenements">
                <h2>Nos prochains évènements</h2>
                <section id="container-encarts">
                    <div class="encart">
                        <div class="encart-header">
                            <img src="img/concert.jpg" alt="Personne sur scene avec guitare">
                        </div>
                        <div class="encart-body">
                            <div class="titre">
                                <p>Concert</p>
                            </div>
                            <div class="date-heure">
                                <p>Mardi 20 Juin 2023 à 19H50</p>
                            </div>
                            <div class="descriptif">
                                <p>
                                    La scène du Quai des Machines accueille divers artistes locaux. Venez vous joindre à nous pour passer un bon moment, rencontrer des artistes locaux et échanger avec eux.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="encart">
                        <div class="encart-header">
                            <img src="img/scene_ouverte.jpg" alt="Micro">
                        </div>
                        <div class="encart-body">
                            <div class="titre">
                                <p>Scène ouverte</p>
                            </div>
                            <div class="date-heure">
                                <p>Samedi 24 Juin 2023 à 19H00</p>
                            </div>
                            <div class="descriptif">
                                <p>
                                    Envie de partager vos talents ? Le Quai des Machines vous soutient et vous invite à les partager sur scène. Poète, chanteur, musicien ? Peu importe, vous êtes les bienvenus ! 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="encart">
                        <div class="encart-header">
                            <img src="img/exposition.jpg" alt="Photo de tableaux">
                        </div>
                        <div class="encart-body">
                            <div class="titre">
                                <p>Exposition dans l'enceinte du restaurant</p>
                            </div>
                            <div class="date-heure">
                                <p>Lundi 26 Juin 2023 à 18H30</p>
                            </div>
                            <div class="descriptif">
                                <p>
                                    Envie de vous plonger dans les plus belles photos de nos chères  machines de l'île juste avant de déguster un bon repas ? N'hésitez plus, c'est par ici ! 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="encart">
                        <div class="encart-header">
                            <img src="img/degustation_grands_crus.jpg" alt="photo d'un verre de vin">
                        </div>
                        <div class="encart-body">
                            <div class="titre">
                                <p>Dégustation de grands crus</p>
                            </div>
                            <div class="date-heure">
                                <p>Jeudi 29 Juin 2023 à 20H00</p>
                            </div>
                            <div class="descriptif">
                                <p>
                                    Connaisseur agréé ou non, venez nous rejoindre pour notre soirée dégustation de grands crus. A l'honneur : des spécialités locales, mais pas seulement ! Venez faire un tour de France de vos grands crus préférés ! 
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
       </div>

        <section id="formulaire">
            <div class="formulaire-container">
                <div class="google-iframe">
                    <iframe width="100%" height="535" src="https://maps.google.com/maps?width=100%25&amp;height=475&amp;hl=en&amp;q=14%20boulevard%20L%C3%A9on%20Bureau%20+(Restaurant%20le%20Quai%20des%20Machines)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                    </iframe>
                </div>
                <div class="contact-container">
                    <form action="traitement.php?action=ajouterProduit" method="post">

                        <label for="nom">Nom :</label>
                        <input type="text" id="nom" name="nom" placeholder="Votre nom" required>

                        <label for="prenom">Prénom :</label>
                        <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required>

                        <label for="telephone">Numéro de téléphone :</label>
                        <input type="number" id="telephone" name="telephone" placeholder="Numéro de téléphone" required>

                        <label for="nombrePersonne">Nombre de personnes :</label>
                        <input type="number" id="nombrePersonne" name="nombrePersonne" placeholder="Nombre de personnes" required>

                        <div id="form-reservation">           

                                    <div>
                                    <label for="jour-select">Sélectionnez votre jour de réservation :</label>
                                        <select name="jour-reservation" id="jour-reservation">
                                            <option value="lundi" name="lundi">Lundi</option>
                                            <option value="mardi" name="mardi">Mardi</option>
                                            <option value="mercredi" name="mercredi">Mercredi</option>
                                            <option value="jeudi" name="jeudi">Jeudi</option>
                                            <option value="vendredi" name="vendredi">Vendredi</option>
                                            <option value="samedi" name="samedi">Samedi</option>
                                            <option value="dimanche" name="dimanche">Dimanche</option>
                                        </select>
                                    <label for="creneau-select">Sélectionnez votre créneau :</label>
                                        <select onchange="toggleCreneaux()"
                                        name="creneau-reservation" id="creneau-reservation" >
                                        <option class="midi" value="midi" id="creneau-heure-midi">Midi</option>
                                        <option class="soir" value="soir" id="creneau-heure-soir">Soir</option>
                                        </select>
                                        
                                    <label for="creneau-select">Heure choisie :</label>
                                        <select class="heures-midi" name="creneau-heure" id="H-midi">
                                            <option value="11h45">11h45</option>
                                            <option value="12h00">12h00</option>
                                            <option value="12h30">12h30</option>
                                            <option value="13h00">13h00</option>
                                            <option value="13h30">13h30</option>
                                            <option value="14h00">14h00</option>
                                        </select>
                                        <select class="hidden heures-soir" id="H-soir">
                                            <option value="18h00">18h00</option>
                                            <option value="18h30">18h30</option>
                                            <option value="19h00">19h00</option>
                                            <option value="19h30">19h30</option>
                                            <option value="20h00">20h00</option>
                                            <option value="20h30">20h30</option>
                                            <option value="21h00">21h00</option>
                                            <option value="21h30">21h30</option>
                                            <option value="22h00">22h00</option>
                                        </select>
                                    </div>  

                        </div>    

                        <label for="mail">Adresse mail :</label>
                        <!-- pattern ici permet de définir le format demandé pour une adresse mail (ici l'utilisateur doit saisir une valeur avec @ pour que ce soit valide) -->
                        <input type="text" id="mail" name="mail" placeholder="votre@adresse.mail" pattern=".+@.+" required>

                        <div id="btn-container">
                            <input name="submit" type="submit" value="Envoyer">
                            <div class="btn-reservation">
                                <i class="fa-solid fa-utensils">&nbsp;&nbsp;</i>
                                <a href="./panier.php">Réservations</a>                            
                            </div>                            
                        </div>



                    </form>
                </div>

            </div>
        </section>

        <footer>
            <div id="horaires">
                <p>Du lundi au vendredi : 11h45 - 14h et 18h - 22h</p>
                <p>Samedi : 11h30 – 14h et 19h – 23h  </p>
                <p> Dimanche : 12h – 15h</p>
            </div>
            <ul id="reseaux-sociaux">
                <li><a href="https://fr-fr.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="https://www.instagram.com/?hl=fr" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </footer>
        <div id="myScroll">
            <a href="#menu-navigation" onclick="topFunction()" id="myScroll"><i class="fa-sharp fa-solid fa-arrow-up"></i></a>
        </div>           
    </div>
    <script src ="./script.js"></script>
</body>
</html>