<?php
 include 'connect.php';
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../images/logo.png" type="image/icon type">

    <title>LOGIN</title>
</head>
<body>
    <!-- navbar -->
    <div class="container">
        <div class="row">
          <div class="col-lg col-md col-sm">
            <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
              <img class="slogo" src="../images/logo.png" alt="Synnefo Logo" class="d-inline-block align-top" alt="">
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
                  <li><a href="../pages/registerfront.php">Sign Up</a></li>
                  <li><a href="../pages/loginfront.php">Login</a></li>
              </ul>
           </div>
           </nav> 
          </div>
        </div>
      </div>

    <div class="container">
        <div class="row">
            <div class="col-lg" style="margin-top: 200px;">
                <h1><center>LOGIN</center></h1> <hr>
            </div>
        </div>
    </div>

    <div class="container s1">
        <div class="row">
            <div class="col-lg"><center>
                <a type="button" class="btn btn-primary btn-lg" href="adminlogin.php">ADMIN LOGIN</a><br>
                <a type="button" class="btn btn-secondary btn-lg" href="hodlogin.php">HOD LOGIN</a><br>
                <a type="button" class="btn btn-primary btn-lg" href="teachlogin.php">TEACHER LOGIN</a><br>
                <a type="button" class="btn btn-secondary btn-lg" href="studlogin.php">STUDENT LOGIN</a><br></center>
            </div>
        </div>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>