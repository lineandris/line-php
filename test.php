<?php
// démarrer la session
session_start();
$nom_c = '';
$nom_s = '';
if (isset($_COOKIE['nom'])) {
    $nom_c = $_COOKIE['nom'];


}
if (isset($_SESSION['nom'])) {
    $nom_s = $_COOKIE['nom'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Cookies et sessions</h1>
    <h2>Cookies</h2>
    <p>Nom : <?php echo $nom_c ?></p>
    <p>Nom : <?= $nom_c ?></p>
    <h2>Sessions</h2>
    <p>Nom : <?php echo $nom_s ?></p>
    <p>Nom : <?= $nom_s ?></p>

   <p>
    <a href="vider_session.php">
        vider la session
    </a>
   </p>

</body>
</html>