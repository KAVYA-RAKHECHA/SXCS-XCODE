<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <title>Eduverse | Sign Up</title>
</head>

<?php
      if ($_SERVER['REQUEST_METHOD']=='POST'){
          $name=$_POST['name'];
          $email=$_POST['E-mail'];
          $contact=$_POST['Contact'];
          $pwd=$_POST['Password'];
          $cpassword=$_POST['Confirm-Password'];
          if(isset($_POST['person'])){
            $person= $_POST['person'];
            
        if($pwd==$cpassword){
            $servername="localhost";
            $username="root";
            $password="";
            $database="sxcs";
            $conn=mysqli_connect($servername,$username,$password,$database);
            if ($person=="Student") {
                $sql="INSERT INTO `sign` ( `Name`, `E-mail`,`Password`,`Contact`) VALUES ('$name', '$email','$pwd','$contact')";
            }
            else {
                $sql="INSERT INTO `signt` ( `Name`, `E-mail`,`Password`,`Contact`) VALUES ('$name', '$email','$pwd','$contact')";
                
            }
            $result = mysqli_query($conn, $sql);
            header("location:Log_in.php");
        }
   else{
 echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong>Error! </strong> Passwords Don\'t match
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
      }}
    ?>
<body>
    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

        <label for="navi-toggle" class="navigation__button">
            <span class="navigation__icon">&nbsp;</span>
        </label>

        <div class="navigation__background">&nbsp;</div>
    </div>
    <section class="login">
        <div class="row">
            <div class="book">
                <div class="book__form">
                    <form action="/SXCS CODING/Sign_up.php" method="POST" class="form">
                        <div class="u-margin-bottom-medium">
                            <h2 class="heading-secondary">
                                Sign up
                            </h2>
                        </div>

                        <div class="form__group">
                            <input type="text" class="form__input" placeholder="Full name" id="name" name="name" required>
                            <label for="name" class="form__label">Full name</label>
                        </div>

                        <div class="form__group">
                            <input type="email" class="form__input" placeholder="Email address" id="email" name="E-mail" required>
                            <label for="email" class="form__label">Email address</label>
                        </div>

                        <div class="form__group">
                            <input type="tel" class="form__input" placeholder="Contact Number" id="contact" name="Contact" required>
                            <label for="contact" class="form__label">Contact</label>
                        </div>

                        <div class="form__group">
                            <input type="password" class="form__input" placeholder="Password" name="Password" id="password" required>
                            <label for="password" class="form__label">Password</label>
                        </div>

                        <div class="form__group">
                            <input type="password" class="form__input" placeholder="Confirm-Password" name="Confirm-Password" id="password" required>
                            <label for="password" class="form__label">Confirm Password</label>
                        </div>
                        <div class="form__group u-margin-bottom-medium">
                            <div class="form__radio-group">
                                <input type="radio" class="form__radio-input" name="person" id="small" value="Student">
                                <label for="small" class="form__radio-label">
                                    <span class="form__radio-button"></span>
                                    Student
                                </label>
                            </div>

                            <div class="form__radio-group">
                                <input type="radio" class="form__radio-input" id="large" name="person" value="Teacher">
                                <label for="large" class="form__radio-label">
                                    <span class="form__radio-button"></span>
                                    Teacher
                                </label>
                            </div>
                        </div>
                        <div class="alrd">
                            Already have an Account? <a href="Log_in.php" class="log">Log In..</a>
            </div>
                        <div class="form__group">
                            <button class="btn btn--green">Sign Up &rarr;</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
