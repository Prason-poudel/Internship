<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP task5</title>
</head>
<body>
    <?php
    $myfile = fopen("file1.txt","r") or die("unable to open");
    echo fread($myfile,filesize("file1.txt"));
    fclose($myfile);
    ?>
</body>
</html>