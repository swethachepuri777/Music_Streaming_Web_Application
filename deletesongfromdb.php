<?php
	session_start();
	if (!($_SESSION['adminloggedin'] == true)){
        header("location:adminlogin.php");
        exit();
    }
	$host="localhost"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password
	$db_name="music_player_db"; // Database name
	$tbl_name=$_POST['mood']; // Table name

	// Connect to server and select databse.
	$link = mysqli_connect("$host", "$username", "$password", "$db_name")or die("cannot connect");

	// Define $myusername and $mypassword
	$track=$_POST['track_name'];
	$artist=$_POST['artist_name'];
	$query = "DELETE FROM `" . $tbl_name . "` WHERE track_name='".$track."' AND artist='".$artist."'";

	if(mysqli_query($link, $query)){
    	echo "<script>
		alert('Song deleted successfully.');
		window.location.href='choice.php';
		</script>";

	} else{
     	echo "<script>
		alert('Failed to delete song! Try again.');
		window.location.href='deletesong.php';
		</script>";
	}

	mysqli_close($link);

?>