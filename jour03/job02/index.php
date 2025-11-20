<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <button>Mélange</button>
  <div>
    <?php for ($i = 1; $i <= 6; $i++): ?>
    <img src="<?="assets/images/arc{$i}.png"?>">
    <?php endfor ?>
  </div>
  <p></p>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="script.js"></script> 
</body>
</html>