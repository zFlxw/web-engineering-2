<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post">
    <label for="brutto">Brutto:</label>
    <input type="number" name="brutto" required>

    <input type="submit" value="Berechnen">
  </form>

  <?php
    if (isset($_POST["brutto"])) {
      $brutto = $_POST["brutto"];
      $netto = $brutto / 1.19;
      $mwst = $brutto - $netto;

      echo "<p>Brutto: " . number_format($brutto, 2) . " €</p>";
      echo "<p>Netto: " . number_format($netto, 2) . " €</p>";
      echo "<p>Mehrwertsteuer: " . number_format($mwst, 2) . " €</p>";
    }
  ?>
</body>
</html>