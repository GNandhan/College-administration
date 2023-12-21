<?php
 include './pages/connect.php';
//  error_reporting(0); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="4">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo.png" type="image/icon type">
    <title>Index page</title>
</head>
<body class="main-page">
    <!-- navbar -->
<div class="container">
    <div class="row">
      <div class="col-lg col-md col-sm">
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
          <img class="slogo" src="images/logo.png" alt="Synnefo Logo" class="d-inline-block align-top" alt="">
          <h1 class="logo">Harward University</h1>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse navbar-right" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link " href="#">Courses</a>
              </li>
              <li class="nav-item ">
              <a class="nav-link" href="#">Contact</a>
              </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li><a href="pages/registerfront.php">Sign Up</a></li>
              <li><a href="pages/loginfront.php">Login</a></li>
          </ul>
       </div>
       </nav> 
      </div>
    </div>
  </div>
  <!-- Section One -->
  <div class="container">
    <div class="row m">
    <section class="section-one">
      <h2 class="header">Learn. Build. Grow.</h2>
      <p class="section-one-paragraph">Harvard is at the frontier of academic and intellectual discovery.
         Those who venture here to learn, research, teach, work, and grow—join nearly four centuries of
          students and scholars in the pursuit of truth, knowledge, and a better world.</p>
      <a href="" class="learn-more-btn">Learn More </a> 
    </section>
    </div>
  </div>
  <br>
  
  <!-- Section Two -->
  <div class="container">
    <div class="row">
      <section class="section=two">
      <img src="images/img1.jpg" alt="image1">
      </section>
    </div>
  </div>
    
  <!-- Section Three -->
  <div class="container">
    <div class="row">
    <div class="section-three">
      <h3>Learn bleeding edge technologies with our expert trainers. We are delivering experience not just notes.</h3>
    </div>
  </div>
  </div>
  
  <!-- Section Four -->
  <div class="container">
    <div class="row">
    <section class="section-four">
    <div class="flex-group">
      <div>
        <img src="images/img2.jpg" alt="image2">
      </div>
      <div class="content-container">
        <h3>TRUSTED BY OVER 6000+ STUDENTS</h3>
        <p>We conduct free workshops with the goal that the student get a overall idea of the courses and how it will be useful. So as to provide high quality training we affiliated with many system administration and development based organization's.</p>
        <a href="" class="learn-more-btn section-four-btn">Learn More</a>
      </div>
    </div>
  </section>
    </div>
  </div>  

    <!-- Section Ten -->
    <div class="container">
      <div class="section-ten">
        <h3>If you love to be our partner</h3>
        <a href="#" class="learn-more-btn section-ten-btn">Get In Touch</a>
      </div>
    </div>

    <hr> <br><br>
    <!-- footer -->
<div class="container mb-5 pt-3">
  <div class="row">
      <div class="col-lg  col-md text-center">
        Copyright @2023 All rights reserved | This Website is made with skill and knowledge
      </div>
  </div>
</div>
    
 
  

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>