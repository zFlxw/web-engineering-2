<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  Dein Grundumsatz:
  <?php
  $gender = $_POST["gender"];
  $age = $_POST["age"];
  $weight = $_POST["weight"];
  $height = $_POST["height"];

  if ($gender == "m") {
    echo 66.5 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
  } else {
    echo 655 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);
  }
  ?>
</body>

</html>