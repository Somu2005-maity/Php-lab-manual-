<?php
// Numeric Array
$days = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
print_r($days);

echo "<br><br>";

// Associative Array
$months = array(
    "January"=>31, "February"=>28, "March"=>31,
    "April"=>30, "May"=>31, "June"=>30,
    "July"=>31, "August"=>31, "September"=>30,
    "October"=>31, "November"=>30, "December"=>31
);
print_r($months);

echo "<br><br>";

// Multidimensional Array
$laptop = array(
    "Dell" => array("Model"=>"Inspiron", "Price"=>50000),
    "HP" => array("Model"=>"Pavilion", "Price"=>55000)
);
print_r($laptop);
?>