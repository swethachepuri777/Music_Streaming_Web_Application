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
	$artist=$_POST['artist'];
	$image=$_POST['image_url'];
	$path=$_POST['path_url'];
	
	$query = "INSERT INTO `" . $tbl_name . "`VALUES ('".$track."','".$artist."','".$image."','".$path."')";

	if(mysqli_query($link, $query)){
    	echo "<script>
		alert('Song added successfully.');
		window.location.href='choice.php';
		</script>";

	} else{
    	echo "<script>
		alert('Failed to add song! Try again.');
		window.location.href='addsong.php';
		</script>";
	}

	mysqli_close($link);

?>