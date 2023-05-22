<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log In</title>
    <link rel="stylesheet" href="main.css">
</head>
<section class="logo-section">
  <div class="container">
    <h1 class="logo-text">Hoolka - Hall Hiring Made Easy</h1>
  </div>
</section>
<body>
<?php include_once "navbar.php"; ?>

<!-- Login form[username & password] -->
<form action="login.php" method="post">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>

  <button type="submit">Log in</button>
</form>
<h1>Login</h1>
</body>
</html>