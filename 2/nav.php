<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/media.css">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;600;800&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title> About Us</title>
</head>
<body>

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

      <a href="logout.php" class="btn btn-full">  Logout </a>

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