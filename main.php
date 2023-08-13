<?php
session_start();
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: Log_in.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">


<link rel="stylesheet" href="icon-font.css">
<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" type="image/png" href="img/favicon.png">
<title>Eduverse | Dive into the Universe of knowledge</title>
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


<header class="header">
<div class="header__logo-box">
<img src="img/logo-white.png" alt="Logo" class="header__logo">
</div>


<div class="header__text-box">
<h1 class="heading-primary">
<span class="heading-primary--main">Eduverse</span>
<span class="heading-primary--sub">Welcome <?php echo $_SESSION['name']?> <br>Let's Dive into the Universe of knowledge</span>
</h1>


<a href="#edu" class="btn btn--white btn--animated">Discover our courses</a>
</div>
</header>


<main>
<section class="section-about">
<div class="u-center-text u-margin-bottom-big">
<h2 class="heading-secondary">
Diverse Courses for Curious People
</h2>
</div>


<div class="row">
<div class="col-1-of-2">
<h3 class="heading-tertiary u-margin-bottom-small">You're going to fall in love with knowledge</h3>
<p class="paragraph">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur
ducimus quam nisi exercitationem omnis earum qui.
</p>


<h3 class="heading-tertiary u-margin-bottom-small">Learn like never before</h3>
<p class="paragraph">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores nulla deserunt voluptatum nam.
</p>


<a href="#numbers" class="btn-text">Learn more &rarr;</a>
</div>
<div class="col-1-of-2">
<div class="composition">
<img src="img/photo1.jpg" alt="Photo 1" class="composition__photo composition__photo--p1">
<img src="img/photo2.jpg" alt="Photo 2" class="composition__photo composition__photo--p2">
<img src="img/photo3.jpg" alt="Photo 3" class="composition__photo composition__photo--p3">
</div>
</div>
</div>
</section>


<section class="section-features">
<div class="row">
<div class="col-1-of-4">
<div class="feature-box">
<i class="feature-box__icon icon-basic-cloud"></i>
<h3 class="heading-tertiary u-margin-bottom-small">Connect to the world</h3>
<p class="feature-box__text">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
</p>
</div>
</div>


<div class="col-1-of-4">
<div class="feature-box">
<i class="feature-box__icon icon-basic-compass"></i>
<h3 class="heading-tertiary u-margin-bottom-small">Direct your career to new heights</h3>
<p class="feature-box__text">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
</p>
</div>
</div>


<div class="col-1-of-4">
<div class="feature-box">
<i class="feature-box__icon icon-basic-map"></i>
<h3 class="heading-tertiary u-margin-bottom-small">Find your way to success</h3>
<p class="feature-box__text">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
</p>
</div>
</div>


<div class="col-1-of-4">
<div class="feature-box">
<i class="feature-box__icon icon-basic-heart"></i>
<h3 class="heading-tertiary u-margin-bottom-small">How we add to your success</h3>
<p class="feature-box__text">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
</p>
</div>
</div>
</div>
</section>


<section class="edu" id="edu">
<div class="u-center-text u-margin-bottom-big">
<h2 class="heading-secondary" style="margin-top:4rem">
Most popular courses
</h2>
</div>


<div class="row">
<div class="col-1-of-3">
<div class="card">
<div class="card__side card__side--front">
<div class="card__picture card__picture--1">
&nbsp;
</div>
<h4 class="card__heading">
<span class="card__heading-span card__heading-span--1">Quantum physics</span>
</h4>
<div class="card__details">
<ul>
<li>For classes XI</li>
<li>10 hr</li>
<li>Highly Recommended</li>
<li>Taken by 1000+ students</li>
<li>Difficulty - Hard</li>
</ul>
</div>
</div>
<div class="card__side card__side--back card__side--back-1">
<div class="card__cta">
<div class="card__price-box">
<p class="card__price-only">Only</p>
<p class="card__price-value">&#8377;497</p>
</div>
<a href="#popup" class="btn btn--white">Start now!</a>
</div>
</div>
</div>
</div>




<div class="col-1-of-3">
<div class="card">
<div class="card__side card__side--front">
<div class="card__picture card__picture--2">
&nbsp;
</div>
<h4 class="card__heading">
<span class="card__heading-span card__heading-span--2">Data Handling</span>
</h4>
<div class="card__details">
<ul>
<li>Classes X-XII</li>
<li>20 hr</li>
<li>Highly Recommonded</li>
<li>Taken by 2000+ students</li>
<li>Difficulty - Medium</li>
</ul>
</div>


</div>
<div class="card__side card__side--back card__side--back-2">
<div class="card__cta">
<div class="card__price-box">
<p class="card__price-only">Only</p>
<p class="card__price-value">&#8377;897</p>
</div>
<a href="#popup" class="btn btn--white">Start now!</a>
</div>
</div>
</div>
</div>




<div class="col-1-of-3">
<div class="card">
<div class="card__side card__side--front">
<div class="card__picture card__picture--3">
&nbsp;
</div>
<h4 class="card__heading">
<span class="card__heading-span card__heading-span--3">TRIGNOMETRY</span>
</h4>
<div class="card__details">
<ul>
<li>Class X</li>
<li>15 hr</li>
<li>Highly Recommended</li>
<li>Taken by 500+ students</li>
<li>Difficulty - Easy</li>
</ul>
</div>


</div>
<div class="card__side card__side--back card__side--back-3">
<div class="card__cta">
<div class="card__price-box">
<p class="card__price-only">Only</p>
<p class="card__price-value">&#8377;297</p>
</div>
<a href="#popup" class="btn btn--white">Start now!</a>
</div>
</div>
</div>
</div>
</div>


<div class="u-center-text u-margin-top-huge">
<a href="Courses.php" class="btn btn--green">Discover all courses</a>
</div>
</section>




<div class="u-center-text u-margin-bottom-big">
<h2 class="heading-secondary" style="margin-top:4rem">
We make students genuinely happy
</h2>
</div>


<div class="row">
<div class="story">
<figure class="story__shape">
<img src="img/nat-9.jpg" alt="Story of a student" class="story__img">
<figcaption class="story__caption">Kavya</figcaption>
</figure>
<div class="story__text">
<h3 class="heading-tertiary u-margin-bottom-small">Kavya</h3>
<p>
This was awesome
</p>
</div>
</div>
</div>


<div class="row">
<div class="story">
<figure class="story__shape">
<img src="img/nat-9.jpg" alt="Story of a student" class="story__img">
<figcaption class="story__caption">Chaitanya</figcaption>
</figure>
<div class="story__text">
<h3 class="heading-tertiary u-margin-bottom-small">Chaitanya</h3>
<p>
This was helpful
</p>
</div>
</div>
</div>


<div class="u-center-text u-margin-top-huge">
<a href="Experience.php" class="btn-text">Read all stories &rarr;</a>
</div>
</section>


</main>


<footer class="footer">
            <div class="footer__logo-box">
                <img src="img/logo-white.png" alt="Full logo" class="footer__logo">
                <div class="foot">EDUVERSE</div>
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <div class="footer__navigation">
                        <ul class="footer__list">
                            <li class="footer_item"><a href="Courses.php" class="footer_link">Courses</a></li>
                            <li class="footer_item"><a href="Contact_us.php" class="footer_link">Contact us</a></li>
                            <li class="footer_item"><a href="Experiences.php" class="footer_link">Experiences</a></li>
                            <li class="footer_item"><a href="Log_in.php" class="footer_link">Log In</a></li>
                            <li class="footer_item"><a href="Sign_up.php" class="footer_link">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-1-of-2">
                    <p class="footer__copyright">
                        Built by <a href="Contact_us.php" class="footer__link">Chaitanya Mahansaria and Kavya Rakhecha</a> for X-Code in X-uberance.
                    </p>
                </div>
            </div>
</footer>


 <div class="popup" id="popup">
<div class="popup__content">
<div class="popup__right">
<a href="#edu" class="popup__close">&times;</a>
<h2 class="heading-secondary u-margin-bottom-small">Start Learning now</h2>
<h3 class="heading-tertiary u-margin-bottom-small">What will this course teach you?</h3>
<p class="popup__text">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Sed sed risus pretium quam. Aliquam sem et tortor consequat id. Volutpat odio facilisis mauris sit
amet massa vitae. Mi bibendum neque egestas congue. Placerat orci nulla pellentesque dignissim enim
sit. Vitae semper quis lectus nulla at volutpat diam ut venenatis. Malesuada pellentesque elit eget
gravida cum sociis natoque penatibus et. Proin fermentum leo vel orci porta non pulvinar neque laoreet.
Gravida neque convallis a cras semper. Molestie at elementum eu facilisis sed odio morbi quis. Faucibus
vitae aliquet nec ullamcorper sit amet risus nullam eget. Nam libero justo laoreet sit. Amet massa
vitae tortor condimentum lacinia quis vel eros donec. Sit amet facilisis magna etiam. Imperdiet sed
euismod nisi porta.
</p>
<a href="Payments.php" class="btn btn--green">Start now</a>
</div>
</div>
</div>
<div class="popup" id="numbers">
            <div class="popup__content">
                <a href="#section-about" class="popup__close">&times;</a>
                <div class="row">
                    <div class="title_numbers">
                        Number of courses
                     </div>
                     <div class="title_numbers">
                        Number of enrolled students
                     </div>
                     <div class="title_numbers">
                        Number of tutors
                     </div>
                  </div>
                  <div class="row">
                    <pre class="pre_text">        10+                   100+                  50+</pre>
                  </div>
            </div>
</div>

</body>
</html>
