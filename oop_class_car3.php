<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Instantiate a Class</title>
</head>
<body>
<?php
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
$truck = new Car();
//$bmw->moveWheels();
//$bmw->wheels = 8;
echo "Bmw wheels are ".$bmw->wheels . "<br>";
echo "Truck wheels are ".$truck->wheels = 10 . "<br>";
$truck->CreateDoors();
echo "Truck doors are ".$truck->doors;
?>
</body>
</html>