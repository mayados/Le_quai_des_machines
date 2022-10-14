<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/message.css">
    <title>Document</title>
</head>
<body>
<?php

/* Produit supprimé */
function showMessage(){

    if(isset($_SESSION['message'])){
        $message = $_SESSION['message'];        
        echo $message;  
        unset($_SESSION['message']);
        header("Refresh:3");     
    } 
}




?>
</body>
</html>