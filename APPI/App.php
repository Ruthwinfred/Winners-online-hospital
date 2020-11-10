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
  <button class="btn"><a href="">Book appointment</a></button>
</header>
<!-- Header ends here -->



<div class="container">  
  <form id="contact" action="" method="post">
    <h3>The Winners online hospital</h3>  
    <h4>Appointment Form</h4>
    <fieldset>
    <input type="text" name="PName" placeholder="Patient name" title="The official names of the patient; the one to be treated" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Age" type="text" name="Age" required>
    </fieldset>
    <fieldset>
    Gender:<input type="radio" name="Gender" value="male" required>Male
    <input type="radio" name="Gender" value="female" required>Female
    <input type="radio" name="Gender" value="other" required>Other
    </fieldset>
    <fieldset>
    <textarea rows="4" cols="50" title="Why do you want to see the doctor?" placeholder="state your problem here" name="Problem" required></textarea>
    </fieldset>
    <fieldset>
    Appointment via:<select name="Appointment">
	<option required>Video call</option>
	<option required>Audio call</option>
	<option required>Text chat</option>
    </select>
    </fieldset>
    <fieldset>
    <input type="datetime-local" name="Date" placeholder="Date and time" title="The exact date and time the transaction was made" required>
    </fieldset>
    <fieldset>
      <button type="submit" id="contact-submit" name="sub" value="Submit">Submit</button>
    </fieldset>
    <p class="copyright">&copy;2020 Ruwinn Winners</p>
  </form>
</div>
<?php
	if (isset($_POST['sub'])) {
		$pname = $_POST['PName'];
		$age = $_POST['Age'];
		$gnder = $_POST['Gender'];
		$prob = $_POST['Problem'];
		$fbk = $_POST['Fdback'];
		$app = $_POST['Appointment'];
		$dte = $_POST['Date'];
		

 // echo $usr;
 // echo $em;
 // echo $pwd;

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
	$sql = "INSERT INTO appointment(PName,Age,Gender,Problem,Fdback,Appointment,Date) VALUES('$pname','$age','$gnder','$prob','$fbk','$app','$dte')";

	//execute the query
	if ($conn->query($sql) === TRUE) {
		echo "<left>Dear  ".$pname. ",  your request has been submitted successfully. You can now <a href='logout.php'>end the session</a> or <a href='Grid.html'>go back</a> 
		as you await for your appointment notice that will be send to you shortly through ".$fbk." .</left>";
	}else{
		echo "Failled to register. Try again or <a href='Grid.html'>go back.</a>";
	}

	$conn->close();
	}
?>

</body>
</html>