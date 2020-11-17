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
<a href="" class="bttn" id="fa">Register</a>
</nav>
<!-- Top nav ends here -->

  <!-- Header starts here -->
<header id="head">
  <img src="img/wns.png" id="img2">
  <button class="btn"><a href="Appointment.php">Book appointment</a></button>
  <button class="btn"><a href="Consult.php">Consultation request</a></button>
  <button class="btn"><a href="Contact.php">Contact us</a></button>
  <button class="btn"><a href="service.php">Services</a></button>
  <button class="btn"><a href="About.php">About us</a></button>
  <button class="btn"><a href="index.php">Home</a></button>
</header>
<!-- Header ends here -->

  <!-- Home image start here -->
  <section>
      <div class="col-12">
    <div class="slideshow-container">
<div class="mySlides fade">
  <img src="img/wos.jpg" id="img4">
  <div class="cent">Welcome to The Winners Online Doctors<br> Appointment and Consultation System.<br> (ODACS)</div>
</div>

<div class="mySlides fade">
  <img src="img/cuts.jpg" id="img4">
  <div class="centers">Reach us Anytime.</div>
  <a href="Contact.php" class="at">Contact us.</a>
</div>

<div class="mySlides fade">
  <img src="img/oncs.jpg" id="img4">
  <div class="centers">Online consultations.</div>
  <a href="Service.php" class="at">Our services.</a>
</div>

<div class="mySlides fade">
  <img src="img/docs.jpg" id="img4">
  <div class="centers">Meet our qualified staff.</div>
  <a href="About.php" class="at">About us.</a>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
</div>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 3 seconds
}
</script>
      </div>
  </section>
  <!-- Home image ends here -->

  <!-- 1st Section begin here -->
  <div class="row home-para">
   <center><h id="hy"><b>WHY CHOOSE US</b></h></center>
   <h id="hz">At Winners ODACS, we guaranteed you quick feedback and our services are offered 24/7. We have a team of qualified proffessionals that are dedicated to giving you quality healthcare. </h>
</div>
  <!-- 1st section ends here -->

  <!-- Partner section begin here -->
      <div class="row home-para">
        <div class="col-6">
       <h id="hy"><b>THE ONLINE PATIENT CONSULTATION AND APPOINTMENT SYSTEM.</b></h><hr><br><h id="hz">We've created this system to bridge the gap between 
        patients and hospitals. We want to ensure that distance or time is not an obstacle for you to access the health institution of your choice.At this
        time on earth when the world is facing a major crisis;The covid-19 pandemic, you don't need to worry about your health services any more. Do your 
        appointments and consultations online, have your drugs delivered at your doorsteps and have time for your other tasks. Remember to stay safe as you 
        observe the covid-19 rules.</h>
</div>
<div class="col-6">
      <img src="img/onh.jpg">
</div>
</div>
  <!-- Partner section end here -->

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
       <br><a href="Contact.php">Contact us</a><br><a href="Appointment.php">Book appointment</a><br><a href="Consult.php">Consultation</a></h><br>
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