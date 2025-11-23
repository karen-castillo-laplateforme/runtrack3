<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form id="form" name="form">
  <fieldset>
    <legend>Filtrer les données</legend>

    <label for="id">ID</label>
    <input type="text" id="id" name="id">

    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom">

    <label for="type">Type</label>
    <select name="type" id="type">
      <option value="">Choisir option</option>
    </select>

    <button type="button" id="filterBtn">Filtrer</button>
  </fieldset>
</form>

  <script src="script.js"></script>
</body>
</html>