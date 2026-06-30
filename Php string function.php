<?php
$str = "Welcome to PHP Programming";

echo "Length = ".strlen($str)."<br>"; //Strlen() any string
echo "Position of PHP = ".strpos($str,"PHP")."<br>"; //strpos() find some specific word letter
echo "Word Count = ".str_word_count($str)."<br>"; //str_word_count() count the number of words in a string
echo "Reverse = ".strrev($str)."<br>"; //strrev() reverse a string
echo "Lowercase = ".strtolower($str)."<br>"; //strtolower() convert a string to lowercase
echo "Uppercase = ".strtoupper($str)."<br>"; //strtoupper() convert a string to uppercase   
?>