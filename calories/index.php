<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="calories.php" method="post">
    <label for="gender">Geschlecht</label>
    <select name="gender" id="gender">
      <option value="m">männlich</option>
      <option value="f">weiblich</option>
    </select>

    <label for="age">Alter (in Jahre)</label>
    <input type="number" name="age" id="age" required>

    <label for="weight">Gewicht (in kg)</label>
    <input type="number" name="weight" id="weight" required>

    <label for="weight">Größe (in cm)</label>
    <input type="number" name="height" id="height" required>

    <input type="submit" value="Berechnen">
  </form>
</body>
</html>