<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Class inheritance</title>
</head>
<body>
<?php
// **** 73. Class inheritance
class Car {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    function moveWheels() {
//        echo "Wheels move ";
        $this->wheels = 10;
    }

    function CreateDoors() {
        $this->doors = 6;
    }
}

$bmw = new Car();
class Plane extends Car {
    var $wheels = 35;
}

$jet = new Plane();
//$jet->moveWheels();
$wheels = $jet->wheels;
echo "<h1>Total Wheels: ".$wheels."</h1>";
//if(class_exists("Plane")) {
//    echo "it does exist";
//}


?>
</body>
</html>