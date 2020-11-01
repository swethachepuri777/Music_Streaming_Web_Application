<?php
    session_start();
    if (!($_SESSION['userloggedin'] == true)){
        header("location:userlogin.php");
        exit();
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="css\userstyle.css" type="text/css">
    <link rel="icon" href="images\favicon.ico" type="image/gif" sizes="16x16">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
    
    <title>Music Player</title>
  </head>
  <body>
    <header>
        <div class="container">
            <img src="images\music logo.jpg" alt="logo" class="logo" style="width: 50px; height:50px">
            <h7> Hack-sters Music</h7>
            <nav>
                <ul>
                    <li> <a href="index.html"> Home </a> </li>
                    <li> <a href="#"> About </a> </li>
                    <li> <a href="music.html"> Music </a> </li>
                    <li> <a href="#"> Feedback </a> </li>
                </ul>
            </nav>
        </div>
    </header>

    
    <div class="heading">
        <img src="images\giphy.gif" alt="">
        <div class="centered"> Share your feelings.. </div>
    </div>

    <div class="row1">

        
    <div class="cont1">
        <a href="happy_playlist.php"> <img src="images\happy.jpg" style="width:100px; height:100px"> </a>
        <span class="tooltiptext">Happy?</span>
    </div>

    <div class="cont1">
        <a href="crazy_playlist.php"> <img src="images\crazy.jpg" style="width:100px; height:100px"> </a>
        <span class="tooltiptext">Crazy?</span>
    </div>

    <div class="cont1">
        <a href="romantic_playlist.php"> <img src="images\romantic.jpg" style="width:100px; height:100px"> </a>
        <span class="tooltiptext">Romantic?</span>
    </div>

    </div>


    <div class="row2">
        
    <div class="cont2">
        <a href="sad_playlist.php"> <img src="images\sad.jpg" style="width:100px; height:100px"> </a>
        <span class="tooltiptext">Sad?</span>
    </div>

    <div class="cont3">
        <a href="blissed_playlist.php"> <img src="images\blissed.png" style="width:100px; height:100px"> </a>
        <span class="tooltiptext">Blissed?</span>
    </div>

    </div>

    

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>