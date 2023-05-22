<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hoolka</title>
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <section class="logo-section">
    <div class="container">
      <h1 class="logo-text">Hoolka - Hall Hiring Made Easy</h1>
    </div>
  </section>

  <?php include_once "navbar.php"; ?>  

  <div class="container">
    <!-- Your page content goes here -->
  </div>

  <main>
    <section class="hero">
      <h2>Find the Perfect Hall for Your Event</h2>
      <form action="search.php" method="get">
        <input type="text" name="location" placeholder="Enter Location ">
        <button type="submit">Search</button>
      </form>
    </section>

    <section id="halls">
  <div id="hall-cards">
    <div class="hall-card" data-location="Nairobi">
      <img src="hall-1.jpg" alt="Hall image">
      <div class="details">
        <h3>Amana Hall</h3>
        <p>Located in the bustling city center of Nairobi, 
          <br>our Nairobi hall is the perfect venue for your next event. With modern amenities,</br> 
          versatile event spaces, and a convenient location, this hall is sure to meet all your 
          needs and exceed your expectations.</p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <div class="price">
          <span>Ksh 10,000</span> per day
        </div>
      </div>
    </div>
    <div class="hall-card" data-location="Nakuru">
      <img src="hall-2.jpg" alt="Hall image">
      <div class="details">
        <h3>Memon Conference Facility</h3>
        <p>Nestled in the scenic countryside of Nakuru, our Nakuru hall offers a serene and picturesque setting for any event. 
          <br>With spacious outdoor areas, elegant event spaces, and top-notch catering options,</br> this hall is the perfect choice for your next event in Nakuru.</p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas far fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <div class="price">
          <span>Ksh 8,000 </span> per day
        </div>
      </div>
    </div>
    <div class="hall-card" data-location="Naivasha">
      <img src="hall-3.jpg" alt="Hall image">
      <div class="details">
        <h3>Rajput Hall </h3>
        <p>Our Naivasha hall is a hidden gem located in the heart of the Great Rift Valley. 
          <br>With stunning views of Lake Naivasha, a world-class golf course, and luxurious accommodations,</br>
          this hall offers a unique and unforgettable setting for any event.</p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <div class="price">
          <span>Ksh 12,000</span> per day
        </div>
      </div>
    </div>
  </div>
</section>

    <section id="about">
      <h2>About Us</h2>
      <p>Book My Hall is the premier online destination for finding and booking event spaces. We make it easy and convenient to find the perfect hall for your wedding, party, conference, or other special event.</p>
    </section>

    <section id="services">
      <h2>Our Services</h2>
      <ul>
        <li>Search and compare halls based on location, price, capacity, and amenities</li>
        <li>View photos, floorplans, and reviews of each hall</li>
        <li>Book and pay for your reservation online</li>
        <li>Get help from our customer support team 24/7</li>
      </ul>
    </section>

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

    <section id="social">
      <h2>Connect With Us</h2>
      <ul>
        <li><a href="https://www.facebook.com/bookmyhall"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/bookmyhall"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.instagram.com/bookmyhall/"><i class=".fa fa-instagram"></i></a></li>
        <li><a href="https://www.linkedin.com/company/bookmyhall"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </section>
  </main>

  <footer>
    <p>&copy; 2023 Book My Hall. All rights reserved.</p>
  </footer>

</body>
</html>