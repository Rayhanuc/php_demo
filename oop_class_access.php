<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Class Access</title>
</head>
<body>
<?php
//73. Class inheritance
class Car {
    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;

    function showProperty() {
        echo $this->engine;
    }

}

$bmw = new Car();
$semi = new Semi();

class Semi extends Car {

}

echo $bmw->showProperty();
?>
</body>
</html>