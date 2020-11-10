<!Doctype html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="cons.css">
</head>
<body>

<h2>Form on Hero Image</h2>
<div class="bg-img">
  <form action="/action_page.php" class="container">
  <img src="img/omcf.jpg" width="100%" height="100px"><br>
    <br>
    We will ensure that you get the best treatment care that you deserve.<br>
    Please fill up the form.
    <hr>

    <input type="text" placeholder="Patient name" name="patient" required>

    Gender:&nbsp;&nbsp;<input type="radio" name="Gender" value="male" required> Male&nbsp;&nbsp;
      <input type="radio" name="Gender" value="female" required> Female&nbsp;&nbsp;
      <input type="radio" name="Gender" value="other" required> Other

      <input type="text" placeholder="Patient's age" name="age" required>

      
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
  </form>
</div>
</body>
</html>