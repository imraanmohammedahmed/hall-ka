<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="main.css">
</head>
<section class="logo-section">
  <div class="container">
    <h1 class="logo-text">Hoolka - Hall Hiring Made Easy</h1>
  </div>
</section>
<body>
<?php include_once "navbar.php"; ?>
<section id="contact">

        <h2>Contact Us</h2>
        <p>If you have any questions or feedback, please don't hesitate to contact us.</p>
        <form action="contact.php" method="post">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
          <label for="message">Message:</label>
          <textarea id="message" name="message" required></textarea>
          <button type="submit">Send</button>
        </form>
      </section>
</body>
</html>