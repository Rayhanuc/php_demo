<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Constructors</title>
</head>
<body>
<?php
// **** 74. Constructors
class Car {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    function __construct() {
//        echo "Wheels move ";
       echo $this->wheels = 10;
    }

    function CreateDoors() {
        $this->doors = 6;
    }
}

$bmw = new Car();

$truck = new Car();

$semi = new Car();

?>
</body>
</html>