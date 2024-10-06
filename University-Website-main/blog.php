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
    .centr{
      margin-top: 20px;
    }
    .staff{
    max-width: 800px;
    padding: 16px;
    margin: 8px auto;
    border: 4px solid gray;
    }
    ul{
      list-style: none;
    }
    .staff img {
      border-radius: 8px;
      width: 600px;
      height: 400px;
      object-fit: contain;
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
        <h1>Punjab University Gujranwala CampuOur</h1>
        <p>
          The great aim of education at PUGC is not just to gain knowledge, but to put it into action.
        </p>
        <a href="about.php" class="hero-btn">Visit Us TO Know More</a>
      </div>
    </section>

    <?php
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<div class="centr">';
            echo '<div class="staff">';
            echo '<div><img src="' . $row["image_url"] . '" style="width: 200px;" alt=""></div>';
            echo '<ul class="fh5co-social">';
            echo '<li><a href="' . $row["facebook_url"] . '"><i class="icon-facebook2"></i></a></li>';
            echo '</ul>';
            echo '<span>' . $row["title"] . '</span>';
            echo '<h3><a href="' . $row["facebook_url"] . '">' . $row["name"] . '</a></h3>';
            echo '<p>' . $row["description"] . '</p>';
            if ($row["email"] != NULL) {
                echo '<p>Email: ' . $row["email"] . '</p>';
            }
            if ($row["phone_number"] != NULL) {
                echo '<p>Phone: ' . $row["phone_number"] . '</p>';
            }
            echo '</div></div>';
        }
    } else {
        echo "0 results";
    }
    
    $conn->close();
    ?>
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
      <p>Made With <i class="fa fa-heart-o"></i> by Harsh Raj</p>
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
