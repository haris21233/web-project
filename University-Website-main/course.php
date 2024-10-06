<?php
include('connect.php');
$sql = "SELECT * FROM staff";
$result = $conn->query($sql);
?>
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
<!-- --------------COURSE----------------- -->
    <section class="course">
        <h1>Courses We Offer</h1>
        <p>"Explore our wide range of courses designed to enhance your skills, from beginner to advanced levels. <br> Whether you're looking to advance your career or pursue a new passion, we have something for everyone."</p>
        <div class="row">
        <div class="course-col">
            <h3>Department of <br>Information Technology</h3>
            <p>
              "The Department of Information Technology (IT) focuses on advancing digital solutions and innovation. We offer cutting-edge education and research to prepare students for the ever-evolving tech landscape.
            </p>
        </div>
        <div class="course-col">
            <h3>Dapartment of <br> Law</h3>
            <p>
              "The Department of Law provides a comprehensive legal education, blending theory with practical experience. <br> We prepare students to excel in various legal fields, fostering critical thinking and ethical practice."
            </p>
        </div>
        <div class="course-col">
            <h3>Business & Accounting</h3>
            <p>
              "The Department of Business & Accounting offers a dynamic curriculum that blends theory with real-world application. <br> We prepare students for leadership roles in finance, management, and entrepreneurship."
            </p>
        </div>
        <div class="course-col">
          <h3>Dapartment of <br> English</h3>
          <p>
            "The Department of English fosters a deep understanding of language, literature, and critical thinking.  We offer diverse programs that explore classic and contemporary texts, preparing students for careers in writing, teaching, and beyond."
          </p>
        </div>
        </div>
    </section>

    <!-- -----------------FACILITIES----------------- -->
    <section class="facilities">
        <h1>Our Facilities</h1>
        <p>
          
        </p>
        <div class="row">
          <div class="facilities-col">
            <img src="images/library (2).PNG" alt="library" />
            <h3>World Class Library</h3>
            <p>
              "Our facilities are designed to support a dynamic learning environment, featuring cutting-edge technology and resources. From spacious classrooms to collaborative workspaces, we provide everything students need to thrive."
            </p>
          </div>
          <!-- <div class="facilities-col">
            <img src="images/basketball.png" alt="library" />
            <h3>Largest Play Ground</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic
              aliquam, sed excepturi nobis amet eaque autem? Voluptate minus harum
              nihil.
            </p>
          </div> -->
          <div class="facilities-col">
            <img src="images/itdep.PNG" alt="library" />
            <h3>IT Lab</h3>
            <p>
              "The Department of Information Technology (IT) focuses on advancing digital solutions and innovation. We offer cutting-edge education and research to prepare students for the ever-evolving tech landscape
            </p>
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
    <?php
// Close connection
$conn->close();
?>
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
