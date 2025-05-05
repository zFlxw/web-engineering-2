<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Chess Board:</h1>
  <table style="border-collapse: collapse; border: 1px solid black;">
    <?php
    $size = 8;
    for ($row = 0; $row < $size; $row++) {
      echo "<tr>";
      for ($col = 0; $col < $size; $col++) {
        $color = ($row + $col) % 2 == 0 ? "white" : "black";
        echo "<td style='width: 50px; height: 50px; background-color: $color;'></td>";
      }
      echo "</tr>";
    }
    ?>
  </table>
</body>

</html>