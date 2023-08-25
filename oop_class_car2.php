<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP Class Car 2</title>
</head>
<body>
<?php
class Car {
    function moveWheels() {
        echo "Wheels move";
    }
}

//if (class_exists("Car")) {
//    echo "YEayyyyyyyyyyy Nice";
//} else {
//    echo "Noooooo";
//}


if (method_exists("Car", "moveWheels")) {
    echo "The Method Exist :)";
} else {
    echo "No method is not exist :(";
}
?>
</body>
</html>