<!DOCTYPE Html>
<html>
<head>
  <title>The online hospital</title>
  <link rel="stylesheet" type="text/css" href="ind.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!-- Top nav starts here -->
<nav class="top-nav">
<i class="fa fa-phone" id="fa" aria-hidden="true">&nbsp;&nbsp;+254706048874</i>
<i class="fa fa-phone" id="fa" aria-hidden="true">&nbsp;&nbsp;+254706044980</i>
<i class="fa fa-envelope-o" id="fa">&nbsp;&nbsp;reuwinn@yahoo.com</i>
<img src="img/fbb.png" id="img1">
<img src="img/wt.png" id="img1">
<img src="img/wect.png" id="img1">
<img src="img/ytb.png" id="img1">
<img src="img/inst.jpg" id="img1">
<img src="img/link.jpg" id="img1">
<a href="" class="bttn" id="fa">Register</a>
</nav>
<!-- Top nav ends here -->

  <!-- Header starts here -->
<header id="head">
  <img src="img/wns.png" id="img2">
  <button class="btn">Book appointment</button>
  <button class="btn">Consultation request</button>
  <button class="btn"><a href="Contact.php">Contact us</a></button>
  <button class="btn"><a href="service.php">Services</a></button>
  <button class="btn"><a href="About.php">About us</a></button>
  <button class="btn"><a href="index.php">Home</a></button>
</header>
<!-- Header ends here -->


<!-- MAIN (Center website) -->
<div class="main">

<center>ONLINE PATIENT CONSULTATION AND APPOINTMENT</center>
<hr>
<div id="myBtnContainer">
  <button class="btn1 active" onclick="filterSelection('all')">All services</button>
  <button class="btn1" onclick="filterSelection('head')">Mental healthcare</button>
  <button class="btn1" onclick="filterSelection('kids')"> Prenatal care</button>
  <button class="btn1" onclick="filterSelection('food')">Nutritional support</button>
  <button class="btn1" onclick="filterSelection('van')">Ambulance services</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row1">
  <!-- 1st row -->
  <div class="column1 head">
    <div class="content1">
      <img src="img/mc.jpg" alt="Mountains" style="width:100%">
      <h4>Marriege counseling.</h4>
    </div>
  </div>
  
  <div class="column1 head">
    <div class="content">
    <img src="img/amm.jpg" alt="Lights" style="width:100%">
      <h4>Anger management</h4>
    </div>
  </div>
  <div class="column1 head">
    <div class="content1">
    <img src="img/dep.jpg" alt="Nature" style="width:100%">
      <h4>Depression</h4>
    </div>
  </div>
  
  <!-- 2nd row -->
  <div class="column1 kids">
    <div class="content1">
      <img src="img/onlc.jpg" alt="Car" style="width:100%">
      <h4>Online consultations</h4>
    </div>
  </div>

  <div class="column1 kids">
    <div class="content1">
    <img src="img/atm.jpg" alt="Car" style="width:100%">
      <h4>At home monitoring</h4>
    </div>
  </div>

  <div class="column1 kids">
    <div class="content1">
    <img src="img/pccc.jpg" alt="Car" style="width:100%">
      <h4>Video conferencing</h4>
    </div>
  </div>

  <!-- 3rd row -->
  <div class="column1 food">
    <div class="content1">
      <img src="img/mm.jpg" alt="Car" style="width:100%">
      <h4>Medication management</h4>
    </div>
  </div>

  <div class="column1 food">
    <div class="content1">
    <img src="img/fa.jpg" alt="Car" style="width:100%">
      <h4>Food allergy</h4>
    </div>
  </div>

  <div class="column1 food">
    <div class="content1">
    <img src="img/ed.jpg" alt="Car" style="width:100%">
      <h4>Anorexia.</h4>
    </div>
  </div>

  <!-- 4th row -->
  <div class="column1 van">
    <div class="content1">
      <img src="img/ka.jpg" alt="Car" style="width:100%">
      <h4>Neotanal ambulance services.</h4>
    </div>
  </div>

  <div class="column1 van">
    <div class="content1">
    <img src="img/ada.jpg" alt="Car" style="width:100%">
      <h4>Advanced ambulance services.</h4>
    </div>
  </div>

  <div class="column1 van">
    <div class="content1">
    <img src="img/aa.png" alt="Car" style="width:100%">
      <h4>Air ambulance services.</h4>
    </div>
  </div>

  
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column1");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show1");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show1");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn1");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>



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
        <h id="hz"> <i class="fa fa-phone" id="f" aria-hidden="true">&nbsp;&nbsp;+254706048874</i>
        <i class="fa fa-phone" id="f" aria-hidden="true">&nbsp;&nbsp;+254706044980</i><br>
        Location:<br>Parklands Nairobi lane</h>
</div>
<div class="col-4">
       <h id="hy"><b>QUICK LINKS</b></h><br><h id="hz"><a href="about.html">About us</a><br><a href="Service.php">Services</a><br><a href="cons.php">Book appointment</a><br>
        <a href="">Consultation</a></h><br>
        <a href="https://www.facebook.com/ruth.winfred.35"><img src="img/fb.png" id="img1"></a>
<img src="img/twit.jpg" id="img1">
<img src="img/wect.png" id="img1">
<img src="img/ytb.png" id="img1">
<img src="img/inst.jpg" id="img1">
<img src="img/link.jpg" id="img1">
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