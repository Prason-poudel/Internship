<?php
$db = mysqli_connect("localhost","root","","crud");
if(!$db){
    die('error im db' . mysqli_error($db));
}
$id = $_GET['id'];
$qry = "delete from user where user_id = $id";
if(mysqli_query($db,$qyr)){
    header('location:user.php');
}else{
    echo mysqli_error($db);
}
?>