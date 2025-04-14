<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<?php
$cfg = file_get_contents("cfg.txt") ?: "#ffffff";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $cfg = $_POST["color"];
  file_put_contents("cfg.txt", $cfg);
}
?>

<body style="background-color: <?php echo $cfg; ?>;">
  <h1>Pick your new background color:</h1>
  <form method="post">
    <label for="color">Color:</label>
    <input type="color" name="color" id="color" required>
    <br>
    <input type="submit" value="Set Background Color">
  </form>
</body>

</html>