<?php
    session_start();
    if (!($_SESSION['userloggedin'] == true)){
        header("location:userlogin.php");
        exit();
    }
    $host="localhost"; // Host name
    $username="root"; // Mysql username
    $password=""; // Mysql password
    $db_name="music_player_db"; // Database name

    // Connect to server and select databse.
    $link = mysqli_connect("$host", "$username", "$password", "$db_name")or die("cannot connect");
?>

<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <title>Crazy Playlist</title> 
  <!-- Load FontAwesome icons -->
  <link rel="stylesheet" 
        href= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> 
  
  <!-- Load the custom CSS style file -->
  <link rel="stylesheet" type="text/css" href="css\musicplayerstyle.css"> 
</head>
<body>
    <?php
        $tbl_name="playlist_crazy";
        $query = "SELECT * FROM $tbl_name";
        $result = mysqli_query($link,$query);

        $datas = array();
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $datas[] = $row;
            }
        }
    ?>

    <div class="player"> 
  
      <!-- Define the section for displaying details -->
      <div class="details"> 
        <div class="now-playing">PLAYING x OF y</div> 
        <div class="track-art"></div> 
        <div class="track-name">Track Name</div> 
        <div class="track-artist">Track Artist</div> 
      </div> 
    
      <!-- Define the section for displaying track buttons -->
      <div class="buttons"> 
        <div class="prev-track" onclick="prevTrack()"> 
          <i class="fa fa-step-backward fa-2x"></i> 
        </div> 
        <div class="playpause-track" onclick="playpauseTrack()"> 
          <i class="fa fa-play-circle fa-5x"></i> 
        </div> 
        <div class="next-track" onclick="nextTrack()"> 
          <i class="fa fa-step-forward fa-2x"></i> 
        </div> 
      </div> 
    
      <!-- Define the section for displaying the seek slider-->
      <div class="slider_container"> 
        <div class="current-time">00:00</div> 
        <input type="range" min="1" max="100"
          value="0" class="seek_slider" onchange="seekTo()"> 
        <div class="total-duration">00:00</div> 
      </div> 
    
      <!-- Define the section for displaying the volume slider-->
      <div class="slider_container"> 
        <i class="fa fa-volume-down"></i> 
        <input type="range" min="1" max="100"
          value="99" class="volume_slider" onchange="setVolume()"> 
        <i class="fa fa-volume-up"></i> 
      </div> 
    </div> 

    <script type="text/javascript">
        let track_list = <?php echo json_encode($datas) ?>;
    </script>
    <script src="js\musicplayerjs.js"></script> 
</body>
</html>