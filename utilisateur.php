
<?php
//Démarer la session
session_start();

if (is_null($_SERVER['HTTP_REFERER']) or (!str_contains($_SERVER['HTTP_REFERER'], 'indexl.php') and !str_contains($_SERVER['HTTP_REFERER'], 'inscription.php'))) {
   header("location: indexl.php"); // redirection 
   exit(); // ne pas lire la suite

} 
   
 

//var_dump($_SERVER);
//  'REQUEST_METHOD' => string 'GET' (length=3)
//  'HTTP_REFERER' => string 'http://localhost/line-php/indexl.php' (length=36)

$usrname = "Doe";
if($_REQUEST['username'] != "") {
    $username = $_REQUEST['username'];
}

$civilite = "madame";
if(isset($_REQUEST['genre']) and $_REQUEST['genre'] == 'homme') {
   $civilite = "monsieur";
}


   

$ville = $_REQUEST['ville'];


$age = $_REQUEST['age'];
// ajouter un cookie
setcookie("nom", $username);
// ajouter des données dans la session
$_SESSION['nom'] = $username;

 
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
        <a href="test.php">Consulter les cookies</a>
 

    </p>
    
    




</body>
</html>