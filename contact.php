<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact - JFORE Construction</title>
  <link rel="stylesheet" href="contact-style.css" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header style="position: fixed; top: 0; width: 100%; z-index: 1000; left: 0;">
    <div class="logo">JFORE</div>
    <nav>
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="services.php">Services</a>
    </nav>
  </header><br><br><br><br>

  <div class="container">
    <h1>Contact JFORE</h1>
    <p>We'd love to hear from you! Please fill out the form below or reach us through the contact details provided.</p>

    <div class="contact-box">
      <form action="http://formsubmit.co/ericknyakireri2803@gmail.com" method="POST">
        <input type="text" id="name" placeholder="Your Name" required />
        <input type="email" id="email" placeholder="Your Email" required />
        <textarea id="message" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
      </form>

      <div class="info">
        <h3>Contact Details</h3>
        <p><strong>Location:</strong> Madaba, Ruvuma</p>
        <p><strong>Phone:</strong> +255 749 684 552</p>
        <p><strong>Email:</strong> info@jfore.co.tz</p>
      </div>
    </div>
  </div>

  <script src="contact-script.js"></script>
</body>
</html>
