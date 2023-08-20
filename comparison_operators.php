<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Comparison Operators</title>
</head>
<body>

<!--    <h2>Comparison Operators</h2>-->
<!---->
<!--    <pre>-->
<!--        equal ==-->
<!--        identical ===-->
<!--        compare > < >= <= <>-->
<!--        not equal !=-->
<!--        not identical !==-->
<!--    </pre>-->
<!---->
<!--    <h2>Logical Operators</h2>-->
<!---->
<!--    <pre>-->
<!--        And &&-->
<!--        Or ||-->
<!--        Not !-->
<!--    </pre>-->


<?php
if (4 < 4) {
    echo "<h4>it is true</h4>";
} else {
    echo "<h4>Both are not same</h4>";
}

if (5 <= 5) {
    echo "<h4>it is true</h4>";
} else {
    echo "<h4>Both are not same</h4>";
}

if (5 == 5) {
    echo "<h4>Both are same</h4>";
} else {
    echo "<h4>Both are not same</h4>";
}

if (5 === "5") {
    echo "<h4>Both are same</h4>";
} else {
    echo "<h4>Both are not same</h4>";
}

if (4 === 4 && 5 < 10) {
    echo "It is true";
}
?>

</body>
</html>