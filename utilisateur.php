
<?php

$usrname = "Doe";
if($_GET['username'] != "") {
    $username = $_GET['username'];
}

$civilite = "madame";
if(isset($_GET['genre']) and $_GET['genre'] == 'homme') {
   $civilite = "monsieur";
}


$username = $_GET['username'];

$ville = $_GET['ville'];


$age = $_GET['age'];





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Gestion utilisateur</h1>

    <p>
        Bonjour
        <?php
        echo "$username, vous avez $age ans et etes de $ville";
        ?>
    </p>
 

    




</body>
</html>