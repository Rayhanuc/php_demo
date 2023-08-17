<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Math</title>
</head>
<body>
    <h1>PHP Associative Arrays</h1>
    <?php
//    $number = array(10, 35, 85);
    $name1 = array('Juanita', 'Maria', 'Opola');
    print_r($name1);
    echo "<br>";
    echo $name1[2] . '<br>';
    $names = array();
    echo "Total array items : " . count($name1);
    echo "<br>";
    $name2 = array(
            "first_name" => "Gudila",
            "last_name" => "Milar"
    );

    print_r($name2);
    echo "<br>";
    echo "Full Name : " . $name2['first_name'] . " " . $name2['last_name'];
    ?>
</body>
</html>