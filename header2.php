<?php
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />


<link href="css/style.css" rel="stylesheet" />

<link href="css/responsive.css" rel="stylesheet" />
</head>
<body>
<div class="hero_bg_box">
      <img src="images\res.jpg" alt="">
    </div>
<header class="header_section">
      <div class="header_top">
        <div class="container-fluid header_top_container">

          <div class="contact_nav">
            <a href="https://maps.app.goo.gl/HKUEPpj8ZD7ntK3F8">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
            <a href="tel:+447909430418">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +447909430418
              </span>
            </a>
            <a href="mailto:oyinkansolagreatness@gmail.com">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                oyinkansolagreatness@gmail.com
              </span>
            </a>
          </div>
          <div class="social_box">
            <a href="https://www.facebook.com" target="_blank">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://twitter.com" target="_blank">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com" target="_blank">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand " href="index.php"> Brio Bistro </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  ">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php"> About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="recipes.php">Recipes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="chef.php"> Chef </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="upload_recipes.php">Upload</a>
                </li>
                  <a class="nav-item" href=""><?php if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']=='true'){
                echo 'welcome '.$_SESSION['username'];
            } 
            ?> </a>
            <?php if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!='true'){
                // echo 'Sign Up';
              echo  '<a class="nav-item" href="registration.php">Sign Up<a>';
            } 
            ?> </a>
            <?php if(!isset($_SESSION['loggedin']) ||$_SESSION['loggedin']!='true'){
                echo '<a class="nav-item" href="login.php">Sign In<a>';
            } 
            ?> </a>
            <?php if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']=='true'){
                echo '<a class="nav-item" href="logout.php">Log Out<a>';
            } 
            ?> </a>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="login.php">
                      <i class="fa fa-user" aria-hidden="true"></i>
                      <span>
                        Login
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="registration.php">
                      <i class="fa fa-user" aria-hidden="true"></i>
                      <span>
                        Sign Up
                      </span>
                    </a>
                  </li> -->
                  <form class="form-inline justify-content-center">
                    <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                  </form>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </header>
      <script src="javsc/jquery-3.4.1.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        
        <script src="javsc/bootstrap.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
        
        <script src="javsc/custom.js"></script>
        
        <script src="https://maps.app.goo.gl/HKUEPpj8ZD7ntK3F8"></script>
      
</body>
</html>

