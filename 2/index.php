<?php
session_start();
include "connect.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Artistic Taste</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/media.css">
        <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;600;800&display=swap" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav>
                <div class="row">
                    <img src="assets/images/logo.png" alt="Artictic Taste logo" class="logo">

                    <ul class="main-nav">
                        <li>
                            <a href="index.php"> Home </a>
                        </li>
                        <li>
                            <a href="artStyle.php"> Art Styles </a>
                        </li>
                        <li>
                            <a href="aboutus.php"> About Us </a>
                        </li>

<?php

if(isset($_SESSION['name'])){
?>
    <li>
      <a href=""> <?php  echo $_SESSION['name'] ?> </a>

      <a href="logout.php" class="btn btn-full" href="#">  Logout </a>

    </li>

 <?php   
}else{
?>
    <li>
       <a href="sginup.php"> Sign Up </a>
    </li>

<?php
}

?>
                     



                    </ul>

                </div>
            </nav>




            
            <div class="hero-text-box">
                <h1> Let the Creativity Flow...</h1>
                
            </div>

        </header>
            
        <section class="section-features">
            <div class="row">
            <h2> Speak through art &mdash; let art speak through you </h2>
                <p class="long-copy">This is a website where all styles of art are explored, identified, and gone through. Old art, new art and different art are all welcome. We hope you you find something that allows you to feel creative and motivated, and realize that <strong> everything</strong> is considered art; even if you don't see it that way..</p>
            
            </div>
            <div class="row">
            <div class="col span-1-of-2 box">
                
                <h3> What is Art?</h3>
                <p> Art is a way of expression, a way of joy, a way of making people understand things which can’t be done verbally. In fact, we can say that everything that is beautiful is art. Art provides mankind with a diverse range of necessities and comforts. The use of art in various political and social issues to organise campaigns and create awareness is indispensable.</p>
                
                </div>
                
                
                <div class="col span-1-of-2 box"> 
                    
                <h3> Why is art important?</h3>
                <p> Art makes people optimistic about their future. Art can be used to help spread a message of inspiration, making people achieve great things in life. Art can be a form of communication between people, to focus on common issues for the betterment of humankind. Inspirational music is the best form of creative art.</p>
                
                </div>
            
            </div>
        </section>


        <footer class="footer-distributed">

            <div class="footer-left">

                <h3>Company<span>logo</span></h3>

                <p class="footer-links">
                    <a href="#">Home</a>
                    ·
                    <a href="#">About</a>
                    ·
                    <a href="#">Contact</a>
                </p>

                <p class="footer-company-name">Company Name © 2020</p>

                <div class="footer-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>

            </div>

            <div class="footer-right">

              

            </div>

        </footer>
    </body>
</html>

    