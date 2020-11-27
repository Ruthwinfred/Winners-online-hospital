<!DOCTYPE Html>
<html>
<head>
  <title>The Winners online hospital</title>
  <link rel="stylesheet" type="text/css" href="Styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!-- Top nav starts here -->
<nav class="top-nav">
<i class="fa fa-phone" id="fa" aria-hidden="true">&nbsp;&nbsp;+254706048874</i>
<i class="fa fa-phone" id="fa" aria-hidden="true">&nbsp;&nbsp;+254706044980</i>
<i class="fa fa-envelope-o" id="fa">&nbsp;&nbsp;reuwinn@yahoo.com</i>
<a href="https://www.facebook.com/ruth.winfred.35"><img src="img/fbb.png" id="img1"></a>
<a href="https://twitter.com/Truthwinners"><img src="img/wt.png" id="img1"></a>
<img src="img/wect.png" id="img1">
<a href="https://studio.youtube.com/channel/UC5zI55p27zYcJ8YyRfZ_sUA/editing/images"><img src="img/ytb.png" id="img1"></a>
<img src="img/inst.jpg" id="img1">
<a href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile"><img src="img/link.jpg" id="img1"></a>
</nav>
<!-- Top nav ends here -->

  <!-- Header starts here -->
<header id="head">
  <img src="img/wns.png" id="img2">
  <button class="btn"><a href="Login.php">Dashboard</a></button>
  <button class="btn"><a href="Appointment.php">Book appointment</a></button>
  <button class="btn"><a href="Consult.php">Consultation request</a></button>
  <button class="btn"><a href="Contact.php">Contact us</a></button>
  <button class="btn"><a href="service.php">Services</a></button>
  <button class="btn"><a href="About.php">About us</a></button>
  <button class="btn"><a href="index.php">Home</a></button>
</header>
<!-- Header ends here -->

<div class="row">
<div class="col-6">
<div class="container">  
  <form id="contact" action="" method="post">
    <h3>The Winners online hospital</h3>  
    <h4>Admin registration</h4>
    <fieldset>
      <input placeholder="User name" type="text"  name="username" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Email" type="email" name="email" required>
    </fieldset>
    <fieldset>
      <input placeholder="Password" type="password" name="password" required>
    </fieldset>
     <fieldset>
      <button type="submit" id="contact-submit" name="sub" value="Submit">Register</button>
    </fieldset>
  </form>
</div>   
</div>
</div>

<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($conn,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($conn,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($conn,$password);
 $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<div class='form'>
<h3>Your registration was successful.You can now <a id='a1' href='Admin.php'>login</a> </h3>
</div>";
        }
    }else{
        $conn->close();
    }
?>
<!-- Footer starts here -->
<footer>
    <div class="col-4">
    <img src="img/wns.png" id="img3"><br><br>
        <h id="hz"> The online doctor consultation and appointment is a system that is meant to connect patients to health specialists through hospitals of their 
         choice. Unlike other madical apps, it is owned by a hospital and not an individual doctor to avoid fraud and accountability in case of any
         problem.</h>
</div>
<div class="col-4">
         <h id="hy"><b>CONTACT US</b></h><br>
        <h id="hz">Location:<br>Parklands Nairobi lane<br>reuwinn@yahoo.com<br>rruwinn@yahoo.com<br>thywinners@gmail.com.<br> <i class="fa fa-phone" 
        id="f" aria-hidden="true">&nbsp;&nbsp;+254706048874</i><br><i class="fa fa-phone" id="f" aria-hidden="true">&nbsp;&nbsp;+254706044980</i><br>
      </h>
</div>
<div class="col-4">
       <h id="hy"><b>QUICK LINKS</b></h><br><h id="hz"><a href="index.php">Home</a><br><a href="About.php">About us</a><br><a href="Service.php">Services</a>
       <br><a href="Contact.php">Contact us</a><br><a href="Appointment.php">Book appointment</a><br><a href="Consult.php">Consultation</a>
       <br><a href="Login.php">Dashboard</a></h><br>
        <a href="https://www.facebook.com/ruth.winfred.35"><img src="img/fb.png" id="img1"></a>
<a href="https://twitter.com/Truthwinners"><img src="img/twit.jpg" id="img1"></a>
<a href=""><img src="img/wect.png" id="img1"></a>
<a href="https://studio.youtube.com/channel/UC5zI55p27zYcJ8YyRfZ_sUA/editing/images"><img src="img/ytb.png" id="img1"></a>
<a href=""><img src="img/inst.jpg" id="img1"></a>
<a href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile"><img src="img/link.jpg" id="img1"></a>
</div>
</footer>
  <!-- Footer ends here -->

  <!-- Copyright starts here  -->
  <div class=col-12 id="c">
  <b><p> &#169; Copyright 2020. reuwinnWinnieWinners.</p>
</div>
  <!-- Copyright ends here  -->

</body>
</html>