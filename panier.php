<!-- Pour cette page, nous avons besoin de parcourir le tableau session. Il faut donc d'abord récupérer la session de l'utilisateur  -->
<?php
    session_start();
    require('function.php');
    showMessage();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/panier.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>reservation</title>
</head>
<body>
    <div id="container-page">
            <div id="title">
                <h1> Le Quai des Machines </h1>    
                <h3>14 Bd Léon Bureau 44200 Nantes</h3>
            </div>
            <?php 
              if(isset($_SESSION['reservations']) || !empty($_SESSION['reservations'])){
               echo
                "<div class='confirmation-reservation'>",
                    "<p class='confirmation-reservation-p'>Votre réservation est confirmée !</p>",
                    "<img class='validate' src='./img/validate.png' alt='validate icone' width='auto' height='60px'>",
                    "<p class='confirmation-reservation-p'>Merci pour votre réservation</p>",
                "</div>",
                "<div class='container-lien'>",
                    "<a class='lien' href='index.php#formulaire'>",
                        "<p id='test'>Réserver une autre table</p>",
                    "</a>",
                "</div>";
            } ?>
            <div id="container-reservation">
                <?php 
                        /* Si la clé "reservations" du tableau session n'existe pas OU si elle existe mais ne contient auncune donnée, on affiche un message */
                        if(!isset($_SESSION['reservations']) || empty($_SESSION['reservations'])){
                            echo "<div id='container-no'><p id='no'> Aucune réservation effectuée...</p></div>";
                        }
                        /* Au cas où la clé existe et contient quelque chose, on affiche nos produits dans un tableau HTML */
                        else{
                            foreach($_SESSION['reservations'] as $index => $reservation){
                                switch($reservation['jourReservation']) {
                                    case 'lundi':
                                        $_SESSION['Entree'] = $_SESSION['menuSemaine'][0]['lundi']['entree'];
                                        $_SESSION['Plat'] = $_SESSION['menuSemaine'][0]['lundi']['plat'];
                                        $_SESSION['Dessert'] = $_SESSION['menuSemaine'][0]['lundi']['dessert'];
                                        break;
                                    case 'mardi':
                                        $_SESSION['Entree'] = $_SESSION['menuSemaine'][0]['mardi']['entree'];
                                        $_SESSION['Plat'] = $_SESSION['menuSemaine'][0]['mardi']['plat'];
                                        $_SESSION['Dessert'] = $_SESSION['menuSemaine'][0]['mardi']['dessert'];
                                        break;
                                    case 'mercredi':
                                        $_SESSION['Entree'] = $_SESSION['menuSemaine'][0]['mercredi']['entree'];
                                        $_SESSION['Plat'] = $_SESSION['menuSemaine'][0]['mercredi']['plat'];
                                        $_SESSION['Dessert'] = $_SESSION['menuSemaine'][0]['mercredi']['dessert'];
                                        break;
                                    case 'jeudi':
                                        $_SESSION['Entree'] = $_SESSION['menuSemaine'][0]['jeudi']['entree'];
                                        $_SESSION['Plat'] = $_SESSION['menuSemaine'][0]['jeudi']['plat'];
                                        $_SESSION['Dessert'] = $_SESSION['menuSemaine'][0]['jeudi']['dessert'];
                                        break;
                                    case 'vendredi':
                                        $_SESSION['Entree'] = $_SESSION['menuSemaine'][0]['vendredi']['entree'];
                                        $_SESSION['Plat'] = $_SESSION['menuSemaine'][0]['vendredi']['plat'];
                                        $_SESSION['Dessert'] = $_SESSION['menuSemaine'][0]['vendredi']['dessert'];
                                        break;
                                    case 'samedi':
                                        $_SESSION['Entree'] = $_SESSION['menuSemaine'][0]['samedi']['entree'];
                                        $_SESSION['Plat'] = $_SESSION['menuSemaine'][0]['samedi']['plat'];
                                        $_SESSION['Dessert'] = $_SESSION['menuSemaine'][0]['samedi']['dessert'];
                                        break;
                                    case 'dimanche':
                                        $_SESSION['Entree'] = $_SESSION['menuSemaine'][0]['dimanche']['entree'];
                                        $_SESSION['Plat'] = $_SESSION['menuSemaine'][0]['dimanche']['plat'];
                                        $_SESSION['Dessert'] = $_SESSION['menuSemaine'][0]['dimanche']['dessert'];
                                        break;
                                }

                                $ref=$index;
                                echo "<div class='reservation'>",
                                            "<div class='donnees'>",
                                                "<div class='jour donnee'>",
                                                    /* Ici on a recréé un formulaire avec un submit -> on renvoie vers traitement php pour que les données soient traitées, et on revoie vers l'action changerJour (l'action à effectuer dans notre cas), et on récupère le jour voulu (grâce à ref) */
                                                    "<form action='traitement.php?action=changerJour&ref=$index'method='post'>",
                                                        "<select name='jour-reservation' id='jour-reservation'>",
                                                            "<option selected class='jour-semaine' style='display : none' id='jourReservation'value=`{$reservation['jourReservation']}` name='`{$reservation['jourReservation']}`'>" . ucwords($reservation['jourReservation']) ."</option>",
                                                            "<option class='jour-semaine' value='lundi' name='lundi'>Lundi</option>",
                                                            "<option class='jour-semaine' value='mardi' name='mardi'>Mardi</option>",
                                                            "<option class='jour-semaine' value='mercredi' name='mercredi'>Mercredi</option>",
                                                            "<option class='jour-semaine' value='jeudi' name='jeudi'>Jeudi</option>",
                                                            "<option class='jour-semaine' value='vendredi' name='vendredi'>Vendredi</option>",
                                                            "<option class='jour-semaine' value='samedi' name='samedi'>Samedi</option>",
                                                            "<option class='jour-semaine' value='dimanche' name='dimanche' id='dimanche'>Dimanche</option>",
                                                        "</select>",
                                                        "<input id='valider-jour' name='submit' type='submit' value='valider'>",
                                                    "</form>",
                                                "</div>",
                                                "<div class='personnes donnee'>",
                                                "<a href='traitement.php?action=baisserNombrePersonne&ref=$index'>",
                                                "<i class='fa-solid fa-minus'></i>",
                                                "</a>".$reservation['nombrePersonne'].
                                                "<a href='traitement.php?action=augmenterNombrePersonnes&ref=$index'><i class='fa-solid fa-plus'></i></a><p>personne(s)</p></div>",
                                                "<div class='creneau donnee'><p>".$reservation['creneauReservation'] . "</p></div>",
                                                "<div class='heure donnee'><p>".$reservation['heureReservation'] . "</p></div>",
                                             "</div>",
                                            "<div class='menu-jour'>",
                                                "<h4 id='menu'>Votre menu du jour</h4>",
                                                "<div class='elements-menu'>",
                                                    "<h5 class='title-menu'>Entrée :</h5>",
                                                        "<p class='content-menu'>".$_SESSION['Entree']."<p>",
                                                    "<h5 class='title-menu'>Plat : </h5>",
                                                        "<p class='content-menu'>".$_SESSION['Plat']."</p>",
                                                    "<h5 class='title-menu'>Dessert :</h5>",
                                                    "<p class='content-menu'>".$_SESSION['Dessert']."</p>",
                                            "</div>",
                                      "</div>",
                                          "<a class='sup-reservation' href='traitement.php?action=suppprimerReservation&ref=$index'><p>Supprimer la réservation</p></a>",
                                    "</div>";
                            }
                            echo 
                                    "<a href='traitement.php?action=viderPanier'>Supprimer l'ensemble des réservations</a>";                             
                        }
                    ?>
            </div>
            <div class="container-lien">
                <a class='lien' href="index.php">
                    <p>Retourner à la page d'accueil</p>
                </a>                 
            </div>

    </div>
   <script src ="./reservation.js"></script>
</body>
</html>
