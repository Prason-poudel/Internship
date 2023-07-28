<?php 
include("connection.php"); 
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
    <form name="form" action="#" method="POST">
        <label>FirstName: </label>
        <input type="text" id="fname" name="fname"></br></br>  
        <label>LastName: </label>
        <input type="text"  name="lname"></br></br>
        <label>Address: </label>
        <input type="text"  name="addr"></br></br>
        <label>ConatctNo: </label>
        <input type="int" id="contact" name="contact"></br></br>
        <input type="submit" value="submit" name = "submit"/>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']==="POST"){
        if(isset($_POST['submit'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $address = $_POST['addr'];
            $contact = $_POST['contact'];

            $query = "INSERT INTO `crud`(`Firstname`, `Lastname`, `Address`, `contactNo`) VALUES ('$fname','$lname','$address','$contact')";
            $data =  mysqli_query($conn,$query);
            if($data){
                echo '';
            }else{
                alert('insertion failed');
            }
        }
    }
    ?>
</body>
</html>