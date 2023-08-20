<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Switch Statements</title>
</head>
<body>
<?php

$number = 100;
switch($number) {

    case 34;
        echo "It is 34";
        break;
    case 36;
        echo "It is 36";
        break;
    case 45;
        echo "It is 45";
        break;
    case 13;
        echo "It is 13";
        break;
    case 56;
        echo "It is 56";
        break;
    case 22;
        echo "It is 22";
        break;

    default:
        echo "<p style='color: indianred'>Sorry to say, There is nothing match</p>";

}
?>
</body>
</html>