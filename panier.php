<!-- Pour cette page, nous avons besoin de parcourir le tableau session. Il faut donc d'abord récupérer la session de l'utilisateur  -->
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/panier.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Panier reservation</title>
</head>
<body>
    <div id="container-page">
            <h1> Le Quai des Machines </h1>    
            <h3>14 Bd Léon Bureau 44200 Nantes</h3>        
            <div id="container-reservation">
                <?php 
                        /* Si la clé "reservations" du tableau session n'existe pas OU si elle existe mais ne contient auncune donnée, on affiche un message */
                        if(!isset($_SESSION['reservations']) || empty($_SESSION['reservations'])){
                            echo "<p> Auncune réservation effectuée...</p>";
                        }
                        /* Au cas où la clé existe et contient quelque chose, on affiche nos produits dans un tableau HTML */
                        else{
                            foreach($_SESSION['reservations'] as $index => $reservation){
                                $ref=$index;
                                var_dump($ref);
                                echo "<div class='reservation'>",
                                            "<div class='personnes donnee'<p>".$reservation['jourReservation'] ."</p></div>",
                                            "<div class='donnees'>",
                                            "<div class='jour donnee'><a href='traitement.php?action=baisserNombrePersonne'><i class='fa-solid fa-minus'></i></a>" 
                                            . $reservation['nombrePersonne'] .
                                            "<i class='fa-solid fa-plus'></i><p>personne(s)</p></div>",
                                            "<div class='creneau donnee'><p>".$reservation['creneauReservation'] . "</p></div>",
                                            "<div class='heure donnee'><p>".$reservation['heureReservation'] . "</p></div>",
                                        "</div>",
                                        "<div class='menu-jour'>",
                                            "<h4>Votre menu du jour</h4>",
                                            "<div class='elements-menu'>",
                                                "<h5>Entrée</h5>",
                                                "<h5>Plat</h5>",
                                                "<h5>Dessert</h5>",
                                            "</div>",
                                        "</div>",
                                        "<a class='sup-reservation' href='#'><p>Supprimer la réservation</p></a>",
                                    "</div>";
                            }
                            echo "
                                    <p>Merci pour votre réservation !</p>
                                    <p>Un e-mail de confirmation vous a été envoyé</p>
                                    <a id='retour-index' href='index.php'>
                                        <i class='fa-solid fa-rotate-left'></i>
                                        <p>Réserver une autre table</p>
                                    </a>";                             
                        }
                    ?>
            </div>
    
            <a id="retour-index" href="index.php">
                <i class="fa-solid fa-rotate-left"></i>
                <p>Retourner à la page d'accueil</p>
            </a>                

    </div>
</body>
</html>

</a>&nbsp;&nbsp;<a href='traitement.php?action=diminuerProduit&id=$index'><i class='cursor-pointer fa-solid fa-minus text-sm'></i></a>