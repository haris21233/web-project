<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PUGC</title>
    <link rel="icon" href="file:///C:/Users/Hp/OneDrive/Desktop/University-Website-main/images/pu.logo.png" type="image/gif">

    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <!-- -------------HEADER------------   -->
    <section class="header">
      <nav>
        <!-- <a href="index.html"><img src="images/logo1.png" alt="logo" /></a> -->
         <a href="index.html"><img src="images/pu.logo.png" style="width: 60px"  alt=""></a>
         <h1 style="color:  white;">Punjab University</h1>
        <div class="nav-links" id="navLinks">
          <i class="fa fa-times" onclick="hideMenu()"></i>
          <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="course.php">DEPARTMENT</a></li>
            <li><a href="blog.php">Faculty</a></li>
            <li><a href="contact.html">CONTACT</a></li>
            <li><a href="notice-board.html">Notice Board</a></li>
            <li><a href="society.php">Society</a></li>
          </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>
      <div class="text-box">
        <h1>Punjab University Gujranwala Campus</h1>
        <p>
          The great aim of education at PUGC is not just to gain knowledge, but to put it into action.
        </p>
        <a href="about.php" class="hero-btn">Visit Us TO Know More</a>
      </div>
    </section>

    <!-- ----------ABOUT US CONTENT------------ -->
    <section class="about-us">
      <div class="row">
        <div class="about-col">
          <h1>Punjab University Gujranwala Campus</h1>
          <p>
            
            Punjab University Gujranwala Campus provides a dynamic and enriching educational experience, blending academic rigor with modern facilities. With a diverse array of programs, the campus is dedicated to fostering critical thinking, innovation, and personal growth among its students. Our experienced faculty members are committed to delivering high-quality education and supporting students in their academic and professional pursuits. The campus promotes a vibrant community, encouraging collaboration and engagement both inside and outside the classroom, ensuring that students are well-prepared to excel in their future careers.
            </p>
            <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
        </div>
        <div class="about-col">
            <img src="images/aboutus.jfif" alt="">
        </div>
      </div>
    </section>

    <!-- -----------FOOTER----------  -->
    <section class="footer">
      <h4>About Us</h4>
      <p>
        "Punjab University Gujranwala Campus offers a vibrant academic environment with modern facilities and a diverse range of programs. Dedicated to fostering innovation and critical thinking, we prepare students to excel in their chosen fields."
        fugiat excepturi molestiae! Doloremque asperiores eaque quos quo
      </p>
      <div class="icons">
        <a href="https://www.facebook.com/PUGujranwala"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/pugc.confession?igsh=MWlmaTU4Z3k2dW02aw=="><i class="fa fa-instagram"></i></a>
        <a href="https://www.facebook.com/PUGujranwala"><i class="fa fa-twitter"></i></a>
        <!-- <i class="fa fa-linkedin"></i> -->
      </div>
      <p>Made With <i class="fa fa-heart-o"></i> by Haris</p>
    </section>

    <!-- <! ---------JavaScript for Toggle Menu ---------  > -->
    <script>
      var navLinks = document.getElementById("navLinks");

      function showMenu() {
        navLinks.style.right = "0";
      }
      function hideMenu() {
        navLinks.style.right = "-200px";
      }
    </script>
  </body>
</html>
