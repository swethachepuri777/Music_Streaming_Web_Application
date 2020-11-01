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
    <link rel="stylesheet" href="css\addsongstyle.css" type="text/css">
</head>

<body>
    <div class="myButton">
    <a href="music.html" class="button"> Back </a>
    </div>

    <div class="wrap">
        <div class="btn">
            <h2> Song Details </h2>
            <form action="addsongtodb.php" method="post">
                <input type="text" name="mood" placeholder="Enter the playlist mood..">
                <input type="text" name="artist" placeholder="Enter artistName..">
                <input type="text" name="track_name" placeholder="Enter trackName..">
                <input type="text" name="image_url" placeholder="Enter imageUrl..">
                <input type="text" name="path_url" placeholder="Enter pathUrl..">
                <input type="submit">
            </form>
        </div>
    </div>


</body>

</html>