<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $result = $_POST["result"];
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    if ($result == $number1 + $number2) {
      echo "Dein Ergebnis ist richtig!";
    } else {
      echo "Dein Ergebnis ist falsch. Die richtige Antwort lautet: " . ($number1 + $number2);
    }
  ?>
</body>
</html>