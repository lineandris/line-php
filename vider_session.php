<?php
session_start();
// unset($_SESSION['nom']); //suprime la variable session nom
session_unset();  //suprime toutes les variables session
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <h1>Votre session est désormais vide</h1>

    
</body>
</html>