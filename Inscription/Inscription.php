<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
  </head>
  <body>
    <form class=" " action="" method="post" name="formulaire" autocomplete="on">
      <div>
        <label for="nom">Nom d'utilisateur:</label><input type="text" id="nom" name="nom" required>
      </div>
      </div>
        <label for="mail">E-mail:</label><input type="email" name="EMAIL">
      </div>
      <div>
        <label for="MDP">Mot de passe:</label><input type="password" name="MDP" required ><br>
      </div>
      <div>
        <label for="MDP2">Confirmez votre mot de passe:</label><input type="password" name="MDP2" required>
      </div>
      <div>
        <label>J'ai lu les <a href="condition.php" target="_blank">condition d'utilisateur</a></label><input type="checkbox" name="condition" required>
        <input type="submit" name="" value="Entrez">
      </div>
    </form>
  </body>
</html>
