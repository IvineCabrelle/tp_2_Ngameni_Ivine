<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <link rel="stylesheet" type="text/css" href="./style css/style.css" />
  <body>
    <form method="post" action="./pages/formulaire.php">
      <h1>Connexion d'adresses</h1>
      <p class="choix_adresse">Combien d'adresses avez-vous?</p>
      <br />
      <div class="input">
        <label>Nombre d'adresses : </label>
        <input
          type="number"
          name="address"
          min="1"
          max="10"
          id="address"
          placeholder="veuillez saisir les informations sur le nombe d'adresses"
          required
        />
      </div>
      <br /><br />
      <div align="center">
        <button type="submit">Se connecter</button>
      </div>
    </form>
  </body>
</html>