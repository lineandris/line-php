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


    <form action="utilisateur.php" method=POST>
        <fieldset >
            <legend>Donnée de connexion</legend>
      <div class="mb-3 row">
          <label class="col-sm-2 col-form-label" for="username">Nom d'utilisateur</label>
          <div class="col-sm-10">
          <input class="form-control" type="text" id=username autocomplete=off name=username>
          </div>
       </div>
       <div class="mb-3 row">
          <label class="col-sm-2 col-form-label" for="password">Mot de passe</label>
          <div class="col-sm-10">
          <input class="form-control" type="password" id=password name=password>
          </div>
       </div>
     </fieldset>
       <div class="mb-3 row">
           <label class="col-sm-2 col-form-label" for="age">Age</label>
           <div class="col-sm-10">
          <input class="form-control" type="number" id=age min=0 max=150 name=age>
           </div>
       </div>
       <div class="mb-3 row">
        <label class="col-sm-2 col-form-label" for="ville">Ville</label >
    <div class="col-sm-10">
        <select name="ville" id="ville" class="form-select">
            <option selected desabled>Merci de choisir une ville de residence</option>
            <option value="marseille">Marseille</option>
            <option value="lyon">Lyon</option>
            <option value="paris">Paris</option>
        </select>
     </div>
        </div>
        <div>
            <label class="col-sm-2 col-form-label" for="remarque">Remarque</label name=remarque>
           <textarea id="remarque" col="50" row="150"></textarea>
        </div>
        <div>
          GENRE
            <input type="radio" name=genre value=homme>Homme
            <input type="radio" name=genre value="femme">Femme
        </div>
        <div>
            Sport préféré
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="football" id="sport1">
                <label class="form-check-label" for="sport1">
                     Default checkbox
               </label>




            <input type="checkbox" name=sport1 value=football>Football
            <input type="checkbox" name=sport2  value=handball>Handball
            <input type="checkbox" name=sport3 value =tenis>Tenis
            
        </div>
        <button type="submit" value="s'inscrir" name="">s'inscrir</button>


       





     </form>

     
















   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>