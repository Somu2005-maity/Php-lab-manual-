<?php
$numbers = array(25, 10, 45, 5, 30);

$max = $numbers[0];
$min = $numbers[0];

for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] > $max) {
        $max = $numbers[$i];
    }

    if ($numbers[$i] < $min) {
        $min = $numbers[$i];
    }
}

echo "Maximum Number: " . $max . "<br>";
echo "Minimum Number: " . $min;
?><?php
$numbers = array(25, 10, 45, 5, 30);

$max = $numbers[0];
$min = $numbers[0];

for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] > $max) {
        $max = $numbers[$i];
    }

    if ($numbers[$i] < $min) {
        $min = $numbers[$i];
    }
}

echo "Maximum Number: " . $max . "<br>";
echo "Minimum Number: " . $min;
?>