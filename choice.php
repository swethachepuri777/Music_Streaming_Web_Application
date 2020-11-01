<?php
    session_start();
    if (!($_SESSION['adminloggedin'] == true)){
        header("location:adminlogin.php");
        exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title> Option </title>
    <link rel="stylesheet" href="css\choice.css" type="text/css">
</head>

<body>
    <div class="myButton">
    <a href="music.html" class="button"> Back </a>
    </div>
    
    <div class="wrap">
        <div class="btn">
              <a href="addsong.php"> <button type="button"> Add song? </button> </a>
              <a href="deletesong.php"> <button type="button"> Delete song? </button> </a>
        </div>
    </div>
</body>

</html>