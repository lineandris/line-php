
<?php

$usrname = "Doe";
if($_REQUEST['username'] != "") {
    $username = $_REQUEST['username'];
}

$civilite = "madame";
if(isset($_REQUEST['genre']) and $_REQUEST['genre'] == 'homme') {
   $civilite = "monsieur";
}


$username = $_REQUEST['username'];

$ville = $_REQUEST['ville'];


$age = $_REQUEST['age'];





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