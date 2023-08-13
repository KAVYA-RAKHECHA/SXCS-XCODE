<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<?php
$showerr = false;
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['E-mail'];
    $pwd = $_POST['Password'];
    
    if (isset($_POST['person'])) {
        $person = $_POST['person'];
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sxcs";
    $conn = mysqli_connect($servername, $username, $password, $database);

    if ($person == "Student") {
        $sql = "SELECT * FROM `sign` WHERE `Name`='$name' AND `Password`='$pwd' AND `E-mail`='$email'";
    } else {
        $sql = "SELECT * FROM `signt` WHERE `Name`='$name' AND `Password`='$pwd' AND `E-mail`='$email'";
    }
    
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['name'] = $name;
            $_SESSION['Password'] = $pwd;
            $_SESSION['E-mail'] = $email;
            $_SESSION['person'] = $person;
            header("location: main.php");
            exit();
        }
    } else {
        $showerr = true;
    }
    
    mysqli_close($conn);
}
?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" type="image/png" href="img/favicon.png">
<title>Eduverse | Log In</title>
</head>
<body>
<div class="navigation">
<input type="checkbox" class="navigation__checkbox" id="navi-toggle">

<?php
if ($showerr) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error! </strong> Invalid Credentials <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
?>
<section class="login">
<div class="row">
<div class="book">
<div class="book__form">
<form action="/SXCS CODING/Log_in.php" method="POST" class="form">
<div class="u-margin-bottom-medium">
<h2 class="heading-secondary">
Log In
</h2>
</div>


<div class="form__group">
<input type="text" class="form__input" name="name" placeholder="Full name" id="name" required>
<label for="name" class="form__label">Full name</label>
</div>


<div class="form__group">
<input type="email" class="form__input" placeholder="Email address" name="E-mail" id="email" required>
<label for="email" class="form__label">Email address</label>
</div>


<div class="form__group">
<input type="password" class="form__input" placeholder="Password"  name="Password" id="Password" required>
<label for="password" class="form__label">Password</label>
</div>


<div class="form__group u-margin-bottom-medium">
<div class="form__radio-group">
<input type="radio" class="form__radio-input" id="small" value="Student" name="person">
<label for="small" class="form__radio-label">
<span class="form__radio-button"></span>
Student
</label>
</div>


<div class="form__radio-group">
<input type="radio" class="form__radio-input" id="large" value="Teacher" name="person">
<label for="large" class="form__radio-label">
<span class="form__radio-button"></span>
Teacher
</label>
</div>
</div>
<div class="alrd">
                           Don't have an account? <a href="Sign_up.php" class="log">Sign Up</a>
              </div>

<div class="form__group">
<input type="submit" class="btn btn--green" value="Log in &rarr;">
</div>
</form>
</div>
</div>
</div>
</section>
</body>
</html>