<?php
// 1. array_change_key_case()
$arr = array("NAME"=>"Somu","CITY"=>"Rajkot","COUNTRY"=>"India");
print_r(array_change_key_case($arr, CASE_LOWER));

echo "<br><br>";

// 2. array_chunk()
$months = array("Jan","Feb","Mar","Apr","May","Jun");
print_r(array_chunk($months,2));

echo "<br><br>";

// 3. array_count_values()
$arr = array("A","B","A","C","B","A");
print_r(array_count_values($arr));

echo "<br><br>";

// 4. array_pop()
$arr = array(10,20,30);
array_pop($arr);
print_r($arr);

echo "<br><br>";

// 5. array_push()
array_push($arr,40,50);
print_r($arr);

echo "<br><br>";

// 6. array_unshift()
array_unshift($arr,5);
print_r($arr);

echo "<br><br>";

// 7. array_shift()
array_shift($arr);
print_r($arr);
?>