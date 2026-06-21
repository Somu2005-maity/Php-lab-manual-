# A PHP Program to merge two arrays
<?php
$array1 = array(10, 20, 30);
$array2 = array(40, 50, 60);

// Merge arrays
$mergedArray = array_merge($array1, $array2);

echo "Merged Array: <br>";

foreach ($mergedArray as $value) {
    echo $value . " ";
}
?>

#Using User-Entered Values
<?php
$array1 = explode(",", "10,20,30");
$array2 = explode(",", "40,50,60");

$mergedArray = array_merge($array1, $array2);

echo "Merged Array: ";

foreach ($mergedArray as $value) {
    echo $value . " ";
}
?>