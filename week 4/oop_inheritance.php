<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Fruit{
        public $name;
        public $color;
        public function __construct($name,$color){
            $this->name= $name;
            $this->color = $color;
        }
        public function intro(){
            echo " the fruit is {$this->name} and teh color is {$this->color}.";
        }
    }
    class Strawberry extends Fruit{
        public function message(){
            echo "this message is from extended class";
        }
    }
    $strawberry = new Strawberry("strawberry","red");
    $strawberry->message();
    $strawberry->intro();
    ?>
</body>
</html>