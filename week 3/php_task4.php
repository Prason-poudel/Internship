<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Task4</title>
</head>
<body>
    <form method="post" action="">
        <label>Enter UserName: </label>
        <input type="text" name="Uname" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["Uname"];
        echo "Hello ".$name.",Welcome to the party!";
    }
    ?>
    
</body>
</html>