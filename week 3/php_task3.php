<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP task3</title>
</head>
<body>
    <?php
    function myFunction($a,$b){
        return "The sum is " .$a+$b. ".";
    }
    $cities = array("butwal","kathmandu","pokhara");
    echo "The beautiful city is ". $cities[0]. "<br>";
    echo myFunction(5,7);
    ?>

</body>
</html>