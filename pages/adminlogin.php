<?php
 include 'connect.php';
//  error_reporting(0); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../images/logo.png" type="image/icon type">
</head>
<body class="main-page">
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
<!-- Section One -->
<div class="container mb-5">
    <div class="row">
        <div class="section-one col-lg">
            <h2 class="header">Admin Login.</h2>
        </div>
    </div>
</div>
<!-- Admin Login Form -->
<div class="container my-5">
  <div class="row">
    <div class="col-lg"> <center>
      <form class="form-signin">
          <h1 class=" mb-3 text-center">Log in </h1>
            <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="temail">
            <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="tpass">
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
      <button class="btn btn-lg btn-primary btn-block sbut" type="submit">Log in</button>
      </form>
    </div> </center>
  </div>
</div>

<!-- PHP CODE FOR CHECKING THE INSERTED FORM IS CORRECT OR NOT THEN LOGGED IN -->
<?php
if(isset($_POST["submit"]))
{
  $temail=$_POST["temail"];
  $tpassword=$_POST["tpass"];
  
  $sq=mysqli_query($conn,"select * from teacher where tea_email='$temail' and tea_pass='$tpassword'");
  $check=mysqli_num_rows($sq);
  
if($check>0)
{
  $_SESSION["temail"] = $temail;  
  $_SESSION["tpass"] = $tpassword;  
 header("location: mainpage.php");

 echo '<script type="text/javascript">window.location = "../index.php"</script>';
} 
else
{
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "Wrong input" . $conn->error."');</script>";
}
}
?>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>  
</html>