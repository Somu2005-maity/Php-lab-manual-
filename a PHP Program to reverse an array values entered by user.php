<?php
// User-entered array values
$arr = array(10, 20, 30, 40, 50);

echo "Original Array:<br>";
foreach ($arr as $value) {
    echo $value . " ";
}

$reversed = array_reverse($arr);

echo "<br><br>Reversed Array:<br>";
foreach ($reversed as $value) {
    echo $value . " ";
}
?>