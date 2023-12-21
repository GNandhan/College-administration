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
    <title>Admin-Registration</title>
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
<!-- Registration form (bootstrap) -->
<div class="container mt-5 reg-form"> 
    <div class="row justify-content-center"> 
        <h2>REGISTER</h2> 
    </div> 
        <form method="post"> 
            <div class="form-group"> 
                <label for="name">Name:</label> 
                <input type="text" class="form-control" id="name" placeholder="Enter Name" required autofocus name="name"> 
            </div> 
            <div class="form-row mb-4"> 
                <div class="col-lg-6 pt-2"> 
                    <label for="gender">Gender :</label> 
                <div class="form-check form-check-inline"> 
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"  value="Male"> 
                    <label class="form-check-label" for="inlineRadio1">Male</label> 
                </div> 
                <div class="form-check form-check-inline"> 
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female"> 
                    <label class="form-check-label" for="inlineRadio2">Female</label> 
                </div> 
                <div class="form-check form-check-inline"> 
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Other"> 
                    <label class="form-check-label" for="inlineRadio2">Other</label> 
                </div> 
                </div> 
                <div class="col-2 al pt-2"> 
                    <label for="dob">Date of Birth:</label> 
                    </div> 
                    <div class="col-lg-4    "> 
                    <input type="date" class=" form-control" id="dob" name="dob"> 
                </div> 
            </div>
            <div class="form-group"> 
              <label for="address">Address:</label> 
              <input type="text" class="form-control" id="name" placeholder="Enter Address" required autofocus name="address"> 
            </div> 
            <div class="form-group"> 
              <label for="pincode">Pincode:</label> 
              <input type="tel" class="form-control" id="pin" placeholder="Enter Pincode" required autofocus name="pin"> 
          </div> 

          <div class="form-group"> 
            <label>Course:</label> 
            <select class="form-control" id="name" name="course"> 
            <option value="" >--Choose course--</option>
           
            </select> 
          </div> 
          <div class="form-group"> 
            <label>Batch:</label> 
            <select class="form-control" id="name" name="batch"> 
            <option value="" >--Choose batch--</option>
           
            </select> 
          </div>
          <div class="form-group">
            <label>Semester:</label> 
            <select class="form-control" id="name" name="sem"> 
            <option value="" >--Choose Semester--</option>
           
            </select> 
          </div>

          <div class="form-group"> 
            <label for="phone">Phone no:</label> 
            <input type="text" class="form-control" id="name" placeholder="Enter number" required autofocus name="number"> 
          </div> 
            <div class="form-group">
                <label for="address">Email:</label> 
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email">
            </div> 
            <div class="form-group"> 
                <label for="password">Password:</label> 
                <input type="text" class="form-control" id="pass" placeholder="Enter Password" required autofocus name="pass"> 
            </div> 
                <div class="row"> 
                  <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg btn-block"> 
                </div> 
        </form>
    </div>

    
<!-- PHP CODE FOR INSERTING THE DATA -->
<?php
    if(isset($_POST["submit"]))
    {
    $cname= $_POST["name"];
    $cgender= $_POST["gender"];
    $cdob= $_POST["dob"];
    $caddress= $_POST["address"];
    $cpin= $_POST["pin"];
    $ccourse=  $_POST["course"];
    $cbatch= $_POST["batch"];
    $csem= $_POST["sem"];
    $cphone= $_POST["number"];
    $cemail=$_POST["email"];
    $cpass=$_POST["password"];

$sql = mysqli_query($conn,"INSERT INTO student(stud_name, stud_gender, stud_dob, stud_address, stud_pin, stud_course, stud_batch, stud_sem, stud_phone, stud_email, stud_pass)
 VALUES ('$cname','$cgender','$cdob',' $caddress','$cpin','$ccourse','$cbatch','$csem','$cphone','$cemail','$cpass')");

if ($sql == TRUE)
{
// echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
echo '<script type="text/javascript">
window.location = "registration.php"
</script>';
} 
else
{
// echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";  
echo 'wrong username or password'; 
}
}
?>


<!-- <script>
    $(".toggle-password").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>  
</html>