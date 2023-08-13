<?php
$servername="localhost";
    $username="root";
    $password="";
    $database="sxcs";
    $conn=mysqli_connect($servername,$username,$password,$database);
if ($_SERVER['REQUEST_METHOD']=='POST'){
    
    $question=$_POST['Question'];
    $name=$_POST['Name'];
    $sql="INSERT INTO `question` (`Name`,`Question`) VALUES ('$name', '$question')";
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
    <title>Eduverse | Forum</title>
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
$i=0;
$sql="SELECT * FROM `question`"; 
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
  <h3 class="heading-tertiary u-margin-bottom-small"> Question: '.$i.' </h3>
  <p>
'.$row["Question"].'
  </p>
  <div class="btn2"><a href="#popup2" class="plus" >Answer</a></div>
  </div>
  </div>
  </div>
  ';
}
?>
    </div>
<form action="/SXCS CODING/Question.php" method="POST">
    <div class="popup" id="popup">
        <div class="popup__content">
            <div class="popup__right">
                <a href="#edu" class="popup__close">&times;</a>
                <h2 class="heading-secondary u-margin-bottom-small">Ask A question</h2>
                <div class="form__group">
                <div class="form__group">
                        <input type="text" class="form__input" placeholder="Name" name="Name" id="name" required>
                        <label for="questions" class="form__label">Name</label>
                    </div>
                    <div class="form__group">
                        <input type="text" class="form__input" placeholder="Questions" name="Question" id="questions" required>
                        <label for="questions" class="form__label">Question</label>
                    </div>
                </div>
               
             <input type="submit" value="Ask now" class="btn btn--green"></div>
        </div>
    </div>
</form>
    <div class="popup" id="popup2">
        <div class="popup__content">
            <div class="popup__right">
                <a href="#edu" class="popup__close">&times;</a>
                <h2 class="heading-secondary u-margin-bottom-small">Answer the Question</h2>
                <?php
                 $servername="localhost";
                 $username="root";
                 $password="";
                 $database="sxcs";
                 $conn=mysqli_connect($servername,$username,$password,$database);
                 $i=0;
                 $sql="SELECT * FROM `question`"; 
                 $result = mysqli_query($conn,$sql); 
                 while ($row = mysqli_fetch_assoc($result)) {
                     $i=$i+1;
                  
                   echo'
                       <input type="text" class="form__input" placeholder="Answer" id="answer" required>
                       <label for="answer" class="form__label">Answer</label>
               <a href="Question.php" class="btn btn--green" class="btn">Answer now</a>
               ';
               break;
                 }
               ?>
            
                   </div>
               </div>
           </div>
       </div>
   </div>
                  
                              

</body>
</html>