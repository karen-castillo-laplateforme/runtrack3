<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
  <form id="formulaireInscription">

    <input type="text" id="lastname" name="lastname" placeholder="Nom" required>

    <input type="text" id="firstname" name="firstname" placeholder="Prénom" required>

    <input type="email" id="email" name="email" placeholder="Email" required>

    <input type="password" id="password" name="password" placeholder="Mot de passe" required>

    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirmation mot de passe" required>

    <input type="submit" value="S'inscrire" id="signUpButton">

  </form>
<script src="../controller/script.js"></script>  
</body>
</html>