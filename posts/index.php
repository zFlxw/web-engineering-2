<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Recent Posts</h1>
  <ul>
    <?php
    $posts = json_decode(file_get_contents("posts.json"), true);
    if ($posts) {
      foreach ($posts as $post) {
        echo "<li>" . $post['title'] . ": " . $post['content'] . "</li>";
      }
    } else {
      echo "<li>No posts available.</li>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $newPost = [
        'title' => $_POST['title'],
        'content' => $_POST['content']
      ];

      $posts[] = $newPost;
      file_put_contents("posts.json", json_encode($posts));
      exit();
    }
    ?>
  </ul>

  <h2>Add a new post</h2>
  <form method="post">
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required>
    <br>
    <label for="content">Content:</label>
    <textarea name="content" id="content" required></textarea>
    <br>
    <input type="submit" value="Add Post">
  </form>
</body>

</html>