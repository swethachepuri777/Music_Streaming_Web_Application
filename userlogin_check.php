<?php
	session_start();
	$host="localhost"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password
	$db_name="music_player_db"; // Database name
	$tbl_name="user_list"; // Table name

	// Connect to server and select databse.
	$con = mysqli_connect("$host", "$username", "$password", "$db_name")or die("cannot connect");

	// Define $myusername and $mypassword
	$username=$_POST['uname'];
	$password=$_POST['pwd'];
	$sql="SELECT * FROM $tbl_name WHERE uname='$username' and
	password='$password'";
	$result=mysqli_query($con,$sql);
	mysqli_close($con);

	// Mysql_num_row is counting table row
	$count=mysqli_num_rows($result);
	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){
		$_SESSION['userloggedin'] = true;
		header("location: userpage.php");
		exit();
	}
	else {
		echo "<script>
		alert('Login Failed!! Please enter valid credentials.');
		window.location.href='userlogin.php';
		</script>";
	}
?>