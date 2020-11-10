<html>

  <head>
    <title>The online hospital</title>
    <link rel="stylesheet" type="text/css" href="rec.css">
    
 </head>

<body>
 <!-- Header starts here -->
 <header id="head">
  <button class="btn">Home</button>
  <button class="btn"><a href="about.html">About us</a></button>
  <button class="btn"><a href="service.php">Services</a></button>
  <div class="dropdown">
    <button class="dropbtn">Contact us
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="row">
        <div class="column">
          <h3>Social media platforms</h3>
          <img src="img/fb.png" id="img2" title="Facebook">
          <img src="img/inst.jpg" id="img2" title="Instagram"><br>
          <img src="img/link.jpg" id="img2" title="LinkedIn">
          <img src="img/twit.jpg" id="img2" title="Twiter"><br>
          <img src="img/wect.png" id="img2" title="Wechat">
          <img src="img/ytb.png" id="img2" title="Youtube">
        </div>
        <div class="column">
          <h3>Emails</h3>
          reuwinn@yahoo.com<br>
          ruwinn@yahoo.com<br>
          thywinners@gmail.com
        </div>
        <div class="column">
        <span>&#9742;</span> +254706044980
      </div>
     </div>
    </div>
  </div>
</header>
<!-- Header ends here -->



<div class="container">  
  <form id="contact" action="" method="post">
    <h3>The Winners online hospital</h3>  
    <h4>Patient consultation Form</h4>
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
      <textarea placeholder="State your problem here...." name="Problem" required></textarea>
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
      <button type="submit" id="contact-submit" name="sub" value="Submit">Submit</button>
    </fieldset>
    <p class="copyright">&copy;2020 Ruwinn Winners</p>
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
        echo  "<p>Dear  ".$nm. ",  your request has been submitted <br>successfully. You will receive an appointment <br>notice shortly through "
        .$fb." .</p>";;
	}else{
		echo "Failled to register";
	}

	$conn->close();
	}
?>
</body>
</html>