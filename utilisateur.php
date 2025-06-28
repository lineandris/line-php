
<?php

$usrname = "Doe";
if($_POST['username'] != "") {
    $username = $_POST['username'];
}

$civilite = "madame";
if(isset($_POST['genre']) and $_POST['genre'] == 'homme') {
   $civilite = "monsieur";
}


$username = $_POST['username'];

$ville = $_POST['ville'];


$age = $_POST['age'];





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
        echo " $civilite $username, vous avez $age ans et etes de $ville";
        ?>
    </p>
 

    




</body>
</html>