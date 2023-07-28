<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <?php
    class Calculator{
        public function addition($num1,$num2){
            return $num1 + $num2;
        }
        public function subtraction($num1,$num2){
            return $num1-$num2;
        }
        public function multiplication($num1,$num2){
            return $num1*$num2;
        }
        public function divide($num1,$num2){
            return $num1 / $num2;
        }
    }
    $calculator = new Calculator();
    $result = $calculator->addition(5,6);
    echo "The sum of 10 and 6 is ".$result."<br>";
    
    $result = $calculator->subtraction(10,6);
    echo "The difference of 10 and 6 is ".$result."<br>";

    $result = $calculator->multiplication(10,6);
    echo "The product of 10 and 6 is ".$result."<br>";

    $result = $calculator->divide(10,6);
    echo "The divison of 10 and 6 is ".$result."<br>";

    
    ?>
</body>
</html>