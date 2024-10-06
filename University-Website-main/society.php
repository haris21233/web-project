<?php
  include('connect.php'); // Missing semicolon added here
  $sql = "SELECT society_name, society_url FROM societies";
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
  <style>

    /* Container for the main content */
    #main-container {
        background-color: #2f3640; /* Darker container background */
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); /* Soft shadow */
        max-width: 1120px;
        text-align: center;
    }

    /* Styling for the heading */
    .header-title {
        font-size: 28px;
        margin-bottom: 20px;
        color: #fbc531; /* Yellowish header */
    }

    /* Styling for the paragraph text */
    .intro-text {
        font-size: 16px;
        margin-bottom: 30px;
        color: #dcdde1;
    }

    /* Unordered list styling */
    .society-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    /* List items */
    .society-item {
        margin: 12px 0;
    }

    /* Link styling */
    .society-link {
        text-decoration: none;
        font-size: 18px;
        color: #f5f6fa;
        padding: 10px 15px;
        display: inline-block;
        border-radius: 8px;
        background: linear-gradient(45deg, #8e44ad, #3498db);
        background-size: 200% 200%;
        transition: background-position 0.4s ease, transform 0.3s ease;
    }

    /* Hover effects for links */
    .society-link:hover {
        background-position: right center;
        transform: scale(1.1);
    }

    /* Adding arrow symbol before link text */
    .society-link::before {
        content: '→ ';
        color: #fbc531;
    }
</style>
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

    <!-- <! -----------------COURSE---------------   --- >     -->
    <section class="course">
      <h1 style="margin-bottom: 25px;">Society</h1>
      <div id="main-container">
        <h1 class="header-title">Student Societies</h1>
        <p class="intro-text">
            The Director General has been pleased to formulate the following student societies to promote co-curricular activities at University of the Punjab Gujranwala Campus:
        </p>
        <ul class="society-list">
    <?php
    if ($result->num_rows > 0) {
        // Output data of each society
        while($row = $result->fetch_assoc()) {
            echo '<li class="society-item">';
            echo '<a href="' . $row["society_url"] . '" target="_blank" class="society-link">' . $row["society_name"] . '</a>';
            echo '</li>';
        }
    } else {
        echo "<li>No societies available</li>";
    }
    ?>
</ul>
        <!-- <ul class="society-list">
            <li class="society-item"><a href="./Department/event-management.html" target="_blank" class="society-link">Event Management Society</a></li>
            <li class="society-item"><a href="./Department/sports-society.php" target="_blank" class="society-link">Sports Society</a></li>
            <li class="society-item"><a href="./Department/literary-debating.html" target="_blank" class="society-link">Literary & Debating Society</a></li>
            <li class="society-item"><a href="./Department/alumni-club.html" target="_blank" class="society-link">Alumni Association Club</a></li>
            <li class="society-item"><a href="./Department/blood-donor.html" target="_blank" class="society-link">Blood Donor Society</a></li>
            <li class="society-item"><a href="./Department/qirat-naat.html" target="_blank" class="society-link">Qirat & Naat Society</a></li>
            <li class="society-item"><a href="./Department/social-media.html"  target="_blank" class="society-link">Social Media Team</a></li>
            <li class="society-item"><a href="./Department/performing-art.html" target="_blank" class="society-link">Performing Art Society</a></li>
            <li class="society-item"><a href="./Department/environment-protection.html" target="_blank" class="society-link">Environment Protection & CSR Society</a></li>
            <li class="society-item"><a href="./Department/research-society.php" target="_blank" class="society-link">Research Society</a></li>
            <li class="society-item"><a href="./Department/monthly-magazine.html" target="_blank" class="society-link">Monthly Magazine/Gazette Society</a></li>
            <li class="society-item"><a href="./Department/entrepreneurship-incubation.html" target="_blank" class="society-link">Entrepreneurship & Incubation Club</a></li>
            <li class="society-item"><a href="./Department/career-counseling.html" target="_blank" class="society-link">Career Counseling & Placement Cell</a></li>
        </ul> -->
    </div>
    </section>

    <!-- ----------CAMPUS---------  -->


    <!-- -------------TESTIMONIALS-------------- 
    <section class="testimonials">
      <h1>What Our Student Says</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, nam?
      </p>

      <div class="row">
        <div class="testimonial-col">
          <img src="images/user1.jpg" alt="student1" />
          <div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore
              sapiente unde obcaecati libero recusandae ab eligendi, nobis sint
              reprehenderit quo?
            </p>
            <h3>Khushi Pandey</h3>
            <i class="fa fa-star"></i> -->
            <!-- <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
        </div>
        <div class="testimonial-col">
          <img src="images/user2.jpg" alt="student2" />
          <div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore
              sapiente unde obcaecati libero recusandae ab eligendi, nobis sint
              reprehenderit quo?
            </p>
            <h3>Harsh Shavarn</h3>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
        </div>
      </div>
    </section> -->

    <!-- ----------CALL TO ACTION----------  -->

 

    <!-- -----------FOOTER----------  -->
    <section class="footer">
      <h4>About Us</h4>
      <p>
        "Punjab University Gujranwala Campus offers a vibrant academic environment with modern facilities and a diverse range of programs. Dedicated to fostering innovation and critical thinking, we prepare students to excel in their chosen fields."
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
