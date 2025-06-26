<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
     <h1>page d'inscription</h1>

     <p>Bien venu dans notre application php</p>


    <form action="utilisateur.php" method=GET>
        <fieldset >
            <legend>Donnée de connexion</legend>
      <div>
          <label for="username">Nom d'utilisateur</label>
          <input type="text" id=username autocomplete=off name=username>
       </div>
       <div>
          <label for="password">Mot de passe</label>
          <input type="password" id=password name=password>
       </div>
     </fieldset>
       <div>
           <label for="age">Age</label>
          <input type="number" id=age min=0 max=150 name=age>
       </div>
       <div>
        <label for="ville">Ville</label >
        <select name="ville" id="ville">
            <option value="" selected desable>Merci de choisir une ville de residence</option>
            <option value="marseille">Marseille</option>
            <option value="lyon">Lyon</option>
            <option value="paris">Paris</option>
        </select>
        <div>
            <label for="remarque">Remarque</label name=remarque>
           <textarea id="remarque" col="50" row="150"></textarea>
        </div>
        <div>
          GENRE
            <input type="radio" name=genre value=homme>Homme
            <input type="radio" name=genre value="femme">Femme
        </div>
        <div>
            Sport préféré
            <input type="checkbox" name=sport1 value=football>Football
            <input type="checkbox" name=sport2  value=handball>Handball
            <input type="checkbox" name=sport3 value =tenis>Tenis
            
        </div>
        <button type="submit" value="s'inscrir" name="">s'inscrir</button>


       





     </form>

     
















   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>