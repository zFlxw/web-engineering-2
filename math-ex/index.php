<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php
$randNumOne = mt_rand(0, 100);
$randNumTwo = mt_rand(0, 100);
?>

<body>
  <form action="math-ex.php" method="post">
    <input type="hidden" id="number1" name="number1" value="<?php echo $randNumOne ?>" required>
    <input type="hidden" id="number2" name="number2" value="<?php echo $randNumTwo ?>" required>

    <label for="result">Was ist <?php echo $randNumOne ?> + <?php echo $randNumTwo ?>?</label>
    <input type="number" id="result" name="result" required> 
    <input type="submit" value="Berechnen">
  </form>
</body>

</html>