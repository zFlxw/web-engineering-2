<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="post">
    <label for="portions">Portionen:</label>
    <input type="number" min="1" max="100" name="portions" required>

    <input type="submit" value="Berechnen">
  </form>

  <?php
  if (isset($_POST["portions"])) {
    $portions = $_POST["portions"];
    $nudeln = 250 * $portions;
    $sauce = 100 * $portions;

    echo "<h2>Rezept für $portions Portionen</h2>";
    echo "<h3>Zutaten:</h3>";
    echo "<ul>";
    echo "<li>$nudeln g Nudeln</li>";
    echo "<li>$sauce g Sauce</li>";
    echo "</ul>";
  }
  ?>
</body>

</html>