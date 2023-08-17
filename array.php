<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Array</title>
</head>
<body>
    <?php
    // $numberList = array();
    // $numberList = array[];

    $numberList = array(264, 789, 379, 14567, '2497', 573, '<h1>Hello</h1>');

    echo "<br>";
    print_r($numberList);
    echo "<br>";
    echo "Array 3 value is: " . $numberList[3];

    ?>
</body>
</html>