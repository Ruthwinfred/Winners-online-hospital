<!DOCTYPE Html>
<html>
<head>
  <title>Consultation form-The Winners online hospital</title>
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

<div class="container">  
  <form id="contact" action="" method="post">
    <h3>The Winners online hospital</h3>  
    <h4>Doctor consultation Form</h4>
    <fieldset>
      <input placeholder="Patient name" type="text"  name="Name" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Age" type="text" name="Age" required>
    </fieldset>
    <fieldset>
      Gender:&nbsp;&nbsp;<input type="radio" name="Gender" value="male" required> Male&nbsp;&nbsp;
      <input type="radio" name="Gender" value="female" required> Female&nbsp;&nbsp;
      <input type="radio" name="Gender" value="other" required> Other
    </fieldset>
    <fieldset>
    Problem:
  <select name="Problem" required>
    <option value="volvo">Marriege counseling. </option>
    <option value="saab">Anger management.</option>
    <option value="opel">Depression.</option>
    <option value="audi">Online consultations.</option>
    <option value="volvo">At home monitoring.</option>
    <option value="saab">Video conferencing.</option>
    <option value="opel">Medication management.</option>
    <option value="audi">Food allergy.</option>
    <option value="volvo">Anorexia.</option>
    <option value="saab">Neotanal ambulance services.</option>
    <option value="opel">Advanced ambulance services.</option>
    <option value="audi">Air ambulance services.</option>
  </select>
    </fieldset>
    <fieldset>
      <textarea placeholder="Briefly explain your health history...."  name="HealthHistory" required></textarea>
    </fieldset>
    <fieldset>
      <textarea placeholder="List any habits or addictions here...."  name="Habits" required></textarea>
    </fieldset>
     <fieldset>
      <textarea placeholder="Have any other issue?...."  name="AOB" required></textarea>
    </fieldset>
    <fieldset>
      <input placeholder="Appointment notice via...(Provide phone number or email)" type="text"  name="Feedback" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Appointment via...(Video,Audio or Text?)" type="text"  name="Appointment"  required autofocus>
    </fieldset>
   <fieldset>
      <input placeholder="Date and time" type="datetime-local"  name="Date"  required autofocus>
    </fieldset>
    <fieldset>
      <button type="submit" id="contact-submit" name="sub" value="Submit">Send request</button>
    </fieldset>
  </form>
</div>
<?php
	if (isset($_POST['sub'])) {
		$nm = $_POST['Name'];
 $age = $_POST['Age'];
 $gnd = $_POST['Gender'];
 $prob = $_POST['Problem'];
 $hab = $_POST['Habits'];
 $aob = $_POST['AOB'];
 $fb = $_POST['Feedback'];
 $app = $_POST['Appointment'];
 $dt = $_POST['Date'];




 //db credentials
$servername = 'localhost';
$dbusername = "root";
$dbpassword = "";
$dbname = "register";

//connecting to the database
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

//checking errors
if ($conn->connect_error) {
	die("Connection error".$conn->connect_error);
}

//insert values into db
	$sql = "INSERT INTO patients(Name,Age,Gender,Problem,HealthHistory,Habits,AOB,Feedback,Appointment)
   VALUES('$nm','$age','$gnd','$prob','$hab' ,'$aob' ,'$fb' ,'$app' ,'$dt')";

	//execute the query
	if ($conn->query($sql) === TRUE) {
        echo  "<p  class='cents'>Dear  ".$nm. ",  your request has been submitted <br>successfully. You will receive our feedback <br>notice shortly through "
        .$fb." .</p>";;
	}else{
		echo "Failled to register";
	}

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