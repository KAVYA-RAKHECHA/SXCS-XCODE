
<?php
$servername="localhost";
    $username="root";
    $password="";
    $database="sxcs";
    $conn=mysqli_connect($servername,$username,$password,$database);
if ($_SERVER['REQUEST_METHOD']=='POST'){
    
    $story=$_POST['story'];
    $name=$_POST['name'];
    $sql="INSERT INTO `story` (`Name`,`Experience`) VALUES ('$name', '$story')";
    $result = mysqli_query($conn, $sql);
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">


<link rel="shortcut icon" type="image/png" href="img/favicon.png">
<title>Eduverse | Experiences</title>
</head>
<body>
<div class="navigation">
<input type="checkbox" class="navigation__checkbox" id="navi-toggle">


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

<li class="navigation__item"><a href="Contact_us.php" class="navigation__link">Contact Us</a></li>
<li class="navigation__item"><a href="Log_in.php" class="navigation__link">Login Now</a></li>
<li class="navigation__item"><a href="Sign_up.php" class="navigation__link">Sign Up</a></li>
<li class="navigation__item"><a href="Log_out.php" class="navigation__link">Log out</a></li>
</ul>
</nav>
</div>
<div class="circular-btn"><a href="#popup" class="plus">+</a></div>


<?php
$servername="localhost";
$username="root";
$password="";
$database="sxcs";
$conn=mysqli_connect($servername,$username,$password,$database);
$i=1;
$sql="SELECT * FROM `story`"; 
$result = mysqli_query($conn,$sql); 
while ($row = mysqli_fetch_assoc($result)) {
    $i=$i+1;
 
  echo'
  <div class="row">
      <div class="story">
  <figure class="story__shape">
  <img src="nat-9.jpg"  class="story__img">
      
  <figcaption class="story__caption">'.$row["Name"].'</figcaption>
  </figure>
  <div class="story__text">
  <h3 class="heading-tertiary u-margin-bottom-small">'.$row["Name"].' </h3>
  <p>
'.$row["Experience"].'
  </p>
  </div>
  </div>
  </div>
  ';
}
?>
<div class="popup" id="popup">
<div class="popup__content">
<div class="popup__right">
<a href="#edu" class="popup__close">&times;</a>
<h2 class="heading-secondary u-margin-bottom-small">Add your experience</h2>
<form action="/SXCS CODING/Experience.php" method="POST">
<div class="form__group">
<input type="text" class="form__input" name="name" placeholder="Full name" id="name" required>
<label for="name" class="form__label">Full name</label>
</div>
<div class="form__group">
<input type="text" id="exp" class="form__input" placeholder="Your Experience " name="story" maxlength="60" required>
<label for="name" class="form__label">Your Experience</label>
</div>

<input type="submit" class="btn btn--green" value="Add now">
</form>
</div>
</div>


</body>
</html>
