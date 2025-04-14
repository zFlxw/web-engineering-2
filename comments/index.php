<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>



<body>
  <h1>Something cool</h1>
  <p>
    Velit incididunt et labore nulla. Ad consectetur irure reprehenderit et duis exercitation. Ad culpa magna cillum
    quis exercitation exercitation veniam magna dolor labore proident. Veniam ea cillum culpa et sit fugiat in pariatur
    proident. Sunt ad ut incididunt exercitation commodo.
  </p>



  <h2>Comments</h2>
  <ul>
    <?php
    $file = file("comments.txt");

    foreach ($file as $line) {
      echo "<li>" . htmlspecialchars($line) . "</li>";
    }
    ?>
  </ul>

  <hr />
  <form method="post">
    <label for="comment">Comment:</label>
    <textarea name="comment" id="comment" rows="4" required></textarea>
    <br>
    <input type="submit" value="Submit">
  </form>

  <?php
  $comment = isset($_POST["comment"]) ? $_POST["comment"] : null;
  if ($comment) {
    $file = file_get_contents("comments.txt");
    file_put_contents("comments.txt", $comment . "\n" . $file);
  }
  ?>
</body>

</html>