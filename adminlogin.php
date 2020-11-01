<!DOCTYPE html>
<html>
<head>
    <title> Login Page </title>
    <link rel="stylesheet" href="css\loginstyle.css" type="text/css">
</head>

<body>
    <div class="myButton">
    <a href="index.html" class="button"> Back </a>
    </div>
    
    <div class="wrap">
        <h2> Login </h2>
        <form action="adminlogin_check.php" method="post">
            <input type="text" name="uname" placeholder="Enter username...">
            <input type="password" name="pwd" placeholder="Enter password...">
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>