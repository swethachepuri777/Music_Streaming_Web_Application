<!DOCTYPE html>
<html>
<head>
    <title> Login Page </title>
    <link rel="stylesheet" href="css\userloginstyle.css" type="text/css">
</head>

<body>
    <div class="myButton">
    <a href="index.html" class="button"> Back </a>
    </div>
    
    <div class="wrap">
        <h2> Login </h2>
        <form action="userlogin_check.php" method="post">
            <input type="text" name="uname" placeholder="Enter username...">
            <input type="password" name="pwd" placeholder="Enter password...">
            <input type="submit" value="Login">
            <a href="register.html"> <h7> Don't have an account? </h7> </a>
        </form>
    </div>
</body>

</html>