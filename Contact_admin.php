<?php
$servername="localhost";
$username="root";
$password="";
$database="sxcs";
$conn=mysqli_connect($servername,$username,$password,$database);
$sql="SELECT * FROM `contact_us`";
$result=mysqli_query($conn,$sql);
//to know the number of rows in the db
$num= mysqli_num_rows($result);
//displaying the contents of db like assosciative array
while ($row = mysqli_fetch_assoc($result)) {
    echo "<br>";
    // echo $row['Sr No'].")".$row['Name'].$row['E-mail'].$row['Query'];
    echo'
    <div class="row">
        <div class="story">
    <figure class="story__shape">
    <img src="nat-9.jpg"  class="story__img">
        
    <figcaption class="story__caption">'.$row["Name"].'</figcaption>
    </figure>
    <div class="story__text">
    <h3 class="heading-tertiary u-margin-bottom-small" style="text-transform:lowercase;">'.$row["E-mail"].' </h3>
    <p>
  '.$row["Query"].'
    </p>
    </div>
    </div>
    </div>
    ';
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="icon-font.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>