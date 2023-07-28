<?php 
    include("connection1.php");
    include("login.php")
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Task6</title>
</head>
<body>
    <h1>Login Form</h1>
    <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
        <label>Username: </label>
        <input type="text" id="user" name="user"></br></br>
        <label>Password: </label>
        <input type="password" id="pass" name="pass"></br></br>
        <input type="submit" id="btn" value="Login" name = "submit"/>
    </form>
</body>
</html>