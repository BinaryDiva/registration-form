<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiTech Jobs</title>
    <link rel="stylesheet" href="styles.css">
   
</head>
<body>
<nav class="navigation-bar">
      <a href="#" class="logo">MiTech Inc.</a>
      <ul class="main-menu">
          <li class="menu-item"><a href="user-homepage.php">Home</a></li>
          <li class="menu-item has-submenu"><a tabindex="0">Articles</a>
            <ul class="submenu">
                <li class="submenu-item"><a href="#">Technology</a></li>
                <li class="submenu-item"><a href="#">Career</a></li>
                <li class="submenu-item"><a href="#">Marketing</a></li>
                <li class="submenu-item"><a href="#">Events</a></li>
            </ul>
          </li>
          <li class="menu-item has-submenu"><a tabindex="0">Services</a>
            <ul class="submenu">
                <li class="submenu-item"><a href="#">UX and UI Design</a></li>
                <li class="submenu-item"><a href="#">Web Development</a></li>
                <li class="submenu-item"><a href="#">Digital Marketing</a></li>
                <li class="submenu-item"><a href="#">Copywriting</a></li>
            </ul>
          </li>
          <li class="menu-item"><a href="user-aboutus.php">About Us</a></li>
          <li class="menu-item"><a href="user-contact.php">Contact Us</a></li>
      </ul>
      <span class="toggle-button" >&#9776;</span>
  </nav>

    
    
<div class="contact-container">
    <h2>Contact Us</h2>
    <form action="user-homepage.php" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your email" required>
        </div>
        <div class="form-group">
            <label for="subject">Subject:</label>
            <select id="subject" name="subject" required>
                <option value="">Select a subject</option>
                <option value="Inquiry">General Inquiry</option>
                <option value="Feedback">Feedback</option>
                <option value="Support">Support</option>
            </select>
        </div>
        <div class="form-group">
            <label>Interested in:</label><br>
            <input type="checkbox" id="product1" name="product[]" value="Product 1">
            <label for="product1">Jobs</label><br>
            <input type="checkbox" id="product2" name="product[]" value="Product 2">
            <label for="product2">Advertisement</label><br>
            <input type="checkbox" id="product3" name="product[]" value="Product 3">
            <label for="product3">Become an Employer</label>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Your message" required></textarea>
        </div>
        <div class="form-group">
            <label>How did you hear about us?</label><br>
            <input type="radio" id="heard-ad" name="heard" value="Advertisement">
            <label for="heard-ad">Advertisement</label><br>
            <input type="radio" id="heard-search" name="heard" value="Search Engine">
            <label for="heard-search">Search Engine</label><br>
            <input type="radio" id="heard-social" name="heard" value="Social Media">
            <label for="heard-social">Social Media</label>
        </div>
        <button type="submit" class="contact-btn">Submit</button>
    </form>
</div>
<footer class="footer">
  <p>&copy; 2024 MiTech Inc. All rights reserved.</p>
</footer>
</body>
</html>

