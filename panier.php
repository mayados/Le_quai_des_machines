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
    <title>Panier reservation</title>
</head>
<body>
<div id="container-page">
        <h1> Votre récapitulatif de commande </h1>            
        <div id="tableau">
            <?php 
                    /* Si la clé "products" du tableau session n'existe pas OU si elle existe mais ne contient auncune donnée, on affiche un message */
                    if(!isset($_SESSION['reservations']) || empty($_SESSION['reservations'])){
                        echo "<p> Auncun produit en session...</p>";
                    }
                    /* Au cas où la clé existe et contient quelque chose, on affiche nos produits dans un tableau HTML */
                    else{
                        echo "<table id='tableau-recap'>",
                            "<thead>",
                                "<tr>",
                                    "<th>Nom</th>",
                                    "<th>Prenom</th>",
                                    "<th>Telephone</th>",
                                    "<th>Nombre de personnes</th>",
                                    "<th>Adresse mail</th>",
                                    "<th>Sujet</th>",
                                    "<th>Jour de reservation</th>",
                                    "<th>Creneau</th>",
                                    "<th>Heure réservation</th>",
                                "</tr>",
                            "</thead>",
                            "<tbody>";
                        // $totalGeneral = 0;
                        // $nombreProduits = count($_SESSION['products']); 
                        /* Pour chaque element product du tableau products : products correspond à l'index*/
                        foreach($_SESSION['reservations'] as $index => $reservation){
                            $ref = $index;
                            // $quantiteProduit = $product['qtt'];
                            // $produit = $product['name'];
                            echo "<tr>",
                                    "<td>".$reservation['name']."</td>",
                                    "<td>".$reservation['name']."</td>",
                                    "<td>". $reservation['name'] ."</td>",
                                    "<td>".$reservation['name'] ."</td>",
                                    "<td>".$reservation['name'] . "</td>",
                                    "<td>".$reservation['name'] . "</td>",
                                "</tr>",

                            // $totalGeneral += $product['total'];
                        }
                    //     echo    "<tr id='general'>",
                    //                 /* Cellule fusionnée de 4 cellules = l'affichage des mots "total général" prend 4 celulles sur 5 */
                    //                 "<td colspan=4 id='total-g'>Total général : </td>",
                    //                 /* &nbsp; est un espace insécable */
                    //                 "<td><strong>".number_format($totalGeneral, 2, ",", "&nbsp;")."&nbsp;€</strong></td>",
                    //             "</tr>",
                    //             "<tr>",
                    //                 "<td id='nb-produits'colspan=4> Nombre de produits : </td>",
                    //                 "<td>".$nombreProduits."</td>",
                    //             "</tr>",
                    //             "<tr>",
                    //                 "<td id='supp-produits'><a href='traitement.php?action=viderPanier'>Supprimer tous les produits</a></td>",
                    //             "</tr>",
                            "</tbody>",
                            "</table>";
                    // }
                ?>
        </div>

            <a id="retour-index" href="index.php">
                <i class="fa-solid fa-rotate-left"></i>
                <p>Retour à l'index</p>
            </a>          

    </div>
</body>
</html>