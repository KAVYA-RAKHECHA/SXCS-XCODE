<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['E-mail'];
    $que=$_POST['Que'];      
  
      $servername="localhost";
      $username="root";
      $password="";
      $database="sxcs";
      $conn=mysqli_connect($servername,$username,$password,$database);
      $sql="INSERT INTO `contact_us`(`Name`, `E-mail`, `Query`) VALUES ('$name','$email','$que')";
      $result= mysqli_query($conn,$sql);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="icon-font.css">
<link rel="shortcut icon" type="image/png" href="img/favicon.png">
<title>Eduverse | Contact US</title>
</head>
<body>
<div class="navigation">
<input type="checkbox" class="navigation__checkbox" id="navi-toggle">
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">


<label for="navi-toggle" class="navigation__button">
<span class="navigation__icon">&nbsp;</span>
</label>


<div class="navigation__background">&nbsp;</div>


<nav class="navigation__nav">
<ul class="navigation__list">
<li class="navigation__item"><a href="main.php" class="navigation__link">Home</a></li>
<li class="navigation__item"><a href="Courses.php" class="navigation__link">Discover All Courses</a></li>
<li class="navigation__item"><a href="Experience.php" class="navigation__link">Student Experiences</a></li>
<li class="navigation__item"><a href="Question.php" class="navigation__link">Have a query?</a></li>
<li class="navigation__item"><a href="Contact_us" class="navigation__link">Contact Us</a></li>
<li class="navigation__item"><a href="Log_in.php" class="navigation__link">Login Now</a></li>
<li class="navigation__item"><a href="Sign_up.php" class="navigation__link">Sign Up</a></li>
<li class="navigation__item"><a href="Log_out.php" class="navigation__link">Log Out</a></li>
</ul>
</nav>
</div>
<section class="login">
<div class="row">
<div class="book">
<div class="book__form">
<div class="u-margin-bottom-medium">
<h2 class="heading-secondary">
Contact US
</h2>
</div>
<form action="/SXCS CODING/Contact_us.php" method="POST">

<div class="form__group">
<input type="text" class="form__input" name="name" placeholder="Full name" id="name" required>
<label for="name" class="form__label">Full name</label>
</div>


<div class="form__group">
<input type="email" class="form__input" name="E-mail"  placeholder="Email address" id="email" required>
<label for="email" class="form__label">Email address</label>
</div>


<div class="form__group">
<input type="text" class="form__input" name="Que" placeholder="Query" id="query" required>
<label for="query" class="form__label">Query</label>
</div>


<div class="form__group">

 <input type="submit" class="btn btn--green" value="Contact us &rarr;">
</div>
</form>
</div>
</div>
</div>
</section>
</body>
</html>
