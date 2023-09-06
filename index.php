<?php
include 'config.php';
session_start();

if (isset($_POST['search'])) {
    $registrationNumber = mysqli_real_escape_string($conn, $_POST['search']);

    $select = mysqli_query($conn, "SELECT * FROM `user_form_4` WHERE registration_number = '$registrationNumber'") or die('Query failed');

    if (mysqli_num_rows($select) == 1) {
        $row = mysqli_fetch_assoc($select);
        $_SESSION['result'] = $row; // Store the result in session variable
        header('Location: profile.php'); // Redirect to the result page
        exit();
    } else {
        $_SESSION['result'] = null; // Set result to null in session variable
        header('Location: index.php'); // Redirect to the result page
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RRSDCE Students</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@300;900&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles\style.css" />
  </head>
  <body>
    <header>
      <div class="wrapper">
        <nav>
          <div class="logo">RRSDCE</div>

          <ul>
            <li>
              <a href="#">About</a>
            </li>

            

            
            <form class="example" action="" method="post">
              <input type="text" class="border rounded-5" name="search" placeholder="Enter Registration" style="padding: 7px 10px 7px 12px;"/>
              <button type="submit" name="submit" class="btn dark border rounded-5 px-3 py-2">Search</button>
            </form>
            
            

            
          </ul>
        </nav>

        <!-- End of desktop navigation menu -->

        <nav class="mobile-nav">
          <div class="logo">RRSDCE</div>
          <div class="menu-icon">
            <img src="images/menu-icon.svg" alt="" />
          </div>
        </nav>

        <div class="mobile-menu-container">
          <div class="close-icon">
            <img src="images/close-icon.svg" alt="" />
          </div>

          <ul>
            <li>
              <a href="#">About</a>
            </li>

            <form class="example" action="" method="post">
              <input type="text" class="border rounded-5" name="search" placeholder="Enter Registration" style="padding: 7px 10px 7px 12px;"/>
              <button type="submit" name="submit" class="btn dark border rounded-5 px-3 py-2">Search</button>
            </form>

            

            <li>
              <a href="#" class="btn dark">Enrol Now</a>
            </li>
          </ul>
        </div>

        <!-- End of mobile navigation menu -->

        <div class="hero-section">
          <div class="left">
            <h1>
            Showcasing Academic   <br />
            and  Professional Accomplishments
            </h1>

            <p>
             Experience excellence in engineering education at Rashtrakavi Ramdhari Singh Dinkar College of Engineering. 
             With renowned programs in CSE, Mechanical, Civil, Electrical, and Chemical Engineering, 
             we offer industry-oriented curriculum, cutting-edge facilities, and skilled faculty.
             Prepare for a rewarding engineering career with us and unleash your full potential. Join us today!
            </p>

            <a href="register.php" class="btn light enrol-icon">Register Here!</a>
          </div>

          <div class="right">
            <img src="images/img22.png" alt="" />
          </div>

          <div class="achievement-cards">
            <div class="achievement-card students-enrolled">
              <div class="content">
                <div>
                  <h3>2K+</h3>
                </div>
                <p>Students in RRSDCE</p>
              </div>

              <div class="bg"></div>
            </div>

            <div class="achievement-card overall-rating">
              <div class="content">
                <div>
                  <h3>4.7</h3>
                  <img src="images/start-icon.svg" alt="" />
                </div>
                <p>Overall Rating</p>
              </div>

              <div class="bg"></div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- End of the header section -->

    <div class="wrapper">
      <section class="testimonials-section">
        <div class="left">
          <div class="testimonial-card">
            <div class="content">
            "Impressive platform for showcasing student profiles."
            </div>

            <div class="info">
              <h4>Aparna Kumari</h4>
              <p class="company">CSE, 2019-2023</p>
            </div>
            

            <img src="images\Aparna.jpeg" alt="" />
          </div>

          <div class="testimonial-card">
            <div class="content">"Efficient and effective way to discover student achievements."</div>

            <div class="info">
              <h4>Nilesh Kishore</h4>
              <p class="company">CSE, 2019-2023</p>
            </div>

            <img src="images\Nilesh.jpg" alt="" />
          </div>

          <div class="testimonial-card">
            <div class="content">"A valuable resource for exploring student accomplishments." 
            </div>

            <div class="info">
              <h4>Priyadarshini</h4>
              <p class="company">CSE, 2019-2023</p>
            </div>
            

            <img src="images\priya.jpeg" alt="" />
          </div>

          <div class="testimonial-card">
            <div class="content">"User-friendly interface and informative student profiles."</div>

            <div class="info">
              <h4>Shivam Kumar</h4>
              <p class="company">CSE, 2019-2023</p>
            </div>

            <img src="images\shivam.jpeg" alt="" />
          </div>
          <div class="testimonial-card">
            <div class="content">"Engaging and comprehensive platform for student profiles."</div>

            <div class="info">
              <h4>Anubhav Kumar Jha</h4>
              <p class="company">CSE, 2019-2023</p>
            </div>

            <img src="uploaded_photos\1643370720408.jpg" alt="" />
          </div>
        </div>
        

        <div class="right">
          <h2>Our Mentor</h2>

          <img src="images\testimonial-2.png" alt/>

          <div class="features">
            <p>
            Discover limitless possibilities at our esteemed college, where knowledge meets innovation, and dreams take flight.
            </p>
              <p>
              Experience a transformative learning journey at our college, where passion meets purpose and students become trailblazers in their fields of study.
            
              </p>
              <p>
              Join us in shaping the future of engineering education, where excellence, creativity, and growth are nurtured every step of the way.
            </p>

            <p>
              You will also have access to a private Discord channel where you
              can discuss your doubts.
            </p>
          </div>

          

          <a href="#" class="btn light desktop-btn">Learn More</a>
        </div>

        <a href="#" class="btn light mobile-btn">Learn More</a>
      </section>
    </div>





    <!-- End of the app section -->

    <footer>
      <div class="wrapper">
        <div class="links-container">
          <div class="links">
            <h3>Quick Links</h3>

            <ul>
              <li>
                <a href="#">About Us</a>
              </li>

              <li>
                <a href="#">Contact Us</a>
              </li>

              
            </ul>
          </div>

        <div></div>
          <div class="links">
            <h3>Log In</h3>

            <ul>
              <li>contact@gmail.com</li>
            </ul>

            <div class="social">
              <a href="#">
                <img src="images/facebook-logo.svg" alt="" />
              </a>

              <a href="#">
                <img src="images/instagram-logo.svg" alt="" />
              </a>
            </div>

            <form action="#">
              <input type="text" placeholder="Email Address" />
              <button class="submit-btn">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>
