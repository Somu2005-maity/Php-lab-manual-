<?php
$var = "100";

echo gettype($var)."<br>";

settype($var,"integer");

echo gettype($var)."<br>";

echo $var;
?>