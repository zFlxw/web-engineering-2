<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="post">
    <label for="protocol">Protokoll:</label>
    <select name="protocol" id="protocol">
      <option value="https">HTTPS</option>
      <option value="sftp">SFTP</option>
      <option value="wss">WSS</option>
    </select>

    <label for="domain">Domain:</label>
    <input type="text" name="domain" id="domain" required>

    <label for="path">Pfad:</label>
    <input type="text" name="path" id="path" required>

    <label for="query">Query:</label>
    <input type="text" name="query" id="query">

    <label for="fragment">Fragment:</label>
    <input type="text" name="fragment" id="fragment">

    <input type="submit" value="Berechnen">

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $protocol = $_POST["protocol"];
        $domain = $_POST["domain"];
        $path = $_POST["path"];
        $query = isset($_POST["query"]) ? "?" . $_POST["query"] : "";
        $fragment = isset($_POST["fragment"]) ? "#" . $_POST["fragment"] : "";

        $url = $protocol . "://" . $domain . "/" . $path . $query . $fragment;

        echo "<p>Generierte URL: <a href='" . $url . "'>" . htmlspecialchars($url) . "</a></p>";
      }
    ?>
</body>

</html>