<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiTech Jobs</title>
    <link rel="stylesheet" href="../styles.css">
    <style>

    </style>
   
</head>
<body>
<nav class="navigation-bar">
      <a href="#" class="logo">MiTech Inc.</a>
      <ul class="main-menu">
          <li class="menu-item"><a href="admin-homepage.php">Home</a></li>
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
          <li class="menu-item"><a href="../user-aboutus.php">About Us</a></li>
          <li class="menu-item"><a href="../user-contact.php">Contact Us</a></li>
      </ul>
      <span class="toggle-button" >&#9776;</span>
  </nav>
<!-- section styling -->
  <section class="content">
  <div class="box">
    <h4>Software Engineer at Tech Innovations Inc.</h4>
    <p class="job">
    Responsibilities: Design, develop, and test software solutions, 
    collaborate with cross-functional teams to define requirements, and troubleshoot issues
    </p>
    <p class="qualify">
    Qualifications: Bachelor's 
    degree in Computer Science or related field, proficiency in programming languages like Java or Python, and experience with Agile development methodologies.
    </p>
    <p class="sal">
    Salary Range: $80,000 - $120,000 per year
    </p>
    <button class="contact-btn"> Add a new job</button>
  </div>
  <div class="box">
    <h4>Customer Service Representative at Global Solutions Inc.</h4>
    <p class="job">
    Responsibilities: Respond to customer inquiries,
     resolve issues, process orders, and maintain customer records.
    </p>
    <p class="qualify">
    Qualifications: High school diploma or equivalent, excellent communication skills, and experience in customer service.
    </p>
    <p class="sal">
    Salary Range: $30,000 - $40,000 per year
    </p>
    <button class="contact-btn"> Add a new job</button>
  </div>
  <div class="box">
    <h4>Marketing Manager at BrightSpark Marketing Solutions.</h4>
    <p class="job">
    Responsibilities: Develop and implement marketing strategies, manage advertising campaigns, 
    analyze market trends, and oversee social media presence.
    </p>
    <p class="qualify">
    Qualifications: Bachelor degree in Marketing or a related field, 
    strong communication skills, experience with marketing tools and analytics platforms.
    <p class="sal">
    Salary Range:$60,000 - $90,000 per year
    </p>
    <button class="contact-btn"> Apply now</button>
  </div>
  <div class="box">
    <h4>Graphic Designer at CreativeWorks Studios</h4>
    <p class="job">
    Responsibilities: Create visual concepts, develop design solutions, 
    and collaborate with clients to understand their needs.
    </p>
    <p class="qualify">
    Bachelor's degree in Graphic Design or a related field, proficiency in design software like Adobe Creative Suite, and a strong portfolio.
    </p>
    <p class="sal">
    Salary Range: $45,000 - $70,000 per year
    </p>
    <button class="contact-btn"> Add a new job</button>
  </div>
  <div class="box">
    <h4>Data Analyst at Insight Analytics Solutions</h4>
    <p class="job">
    Responsibilities:  Collect and analyze data, identify trends, prepare reports, and present findings 
    to stakeholders.

    </p>
    <p class="qualify">
    Qualifications: Bachelor's degree in Statistics, Mathematics, Computer Science, 
    or a related field, proficiency in data analysis tools like SQL and Excel, and attention to detail.
    </p>
    <p class="sal">
    Salary Range: $55,000 - $90,000 per year
    </p>
    <button class="contact-btn"> Add a new job</button>
  </div>
</section>
<footer class="footer">
  <p>&copy; 2024 Your Company. All rights reserved.</p>
</footer>


 <script>
        const toggleButton = document.querySelector(".toggle-button");
const mainMenu = document.querySelector(".main-menu");
console.log(toggleButton);
toggleButton.addEventListener('click', function () {
    // Toggles the active class
    mainMenu.classList.toggle('active');
        if (mainMenu.classList.contains("active")) {              
            // Adds the close (x) icon 
            toggleButton.innerHTML = "&#215;";
        } else {          
            // Adds the hamburger icon 
            toggleButton.innerHTML = "&#9776;";
        }
});

/* Adding Dropdowns to the Submenu */
const menuItems = document.querySelectorAll(".menu-item");
/* Activate Submenu */
function toggleItem() {
  if (this.classList.contains("submenu-active")) {
    this.classList.remove("submenu-active");
  } else if (mainMenu.querySelector(".submenu-active")) {
    mainMenu.querySelector(".submenu-active").classList.remove("submenu-active");
    this.classList.add("submenu-active");
  } else {
    this.classList.add("submenu-active");
  }
}
/* Event Listeners */
for (let menuItem of menuItems) {
    if (menuItem.querySelector(".submenu")) {
        menuItem.addEventListener("click", toggleItem, false);
        menuItem.addEventListener("keypress", toggleItem, false);
    }   
}
/* Close Submenu From Anywhere */
function closeSubmenu(e) {
    if (mainMenu.querySelector(".submenu-active")) {
      let isClickInside = mainMenu.querySelector(".submenu-active").contains(e.target);
      if (!isClickInside && mainMenu.querySelector(".submenu-active")) {
        mainMenu.querySelector(".submenu-active").classList.remove("submenu-active");
      }
    }
  }
/* Event listener */
  document.addEventListener("click", closeSubmenu, false);



    </script>

</body>
</html>
  