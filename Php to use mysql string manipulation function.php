<?php
$conn = mysqli_connect("localhost", "root", "", "test");

$sql = "SELECT
LENGTH('Programming') AS Length,
CONCAT('Hello',' ','World') AS ConcatValue,
CONCAT_WS('-', '2026', '06', '30') AS ConcatWSValue,
TRIM('   PHP   ') AS TrimValue,
LTRIM('   PHP') AS LTrimValue,
RTRIM('PHP   ') AS RTrimValue,
LPAD('PHP', 10, '*') AS LPadValue,
RPAD('PHP', 10, '*') AS RPadValue,
LOCATE('PHP', 'Welcome to PHP Programming') AS LocateValue";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

echo "LENGTH(): " . $row['Length'] . "<br>";
echo "CONCAT(): " . $row['ConcatValue'] . "<br>";
echo "CONCAT_WS(): " . $row['ConcatWSValue'] . "<br>";
echo "TRIM(): " . $row['TrimValue'] . "<br>";
echo "LTRIM(): " . $row['LTrimValue'] . "<br>";
echo "RTRIM(): " . $row['RTrimValue'] . "<br>";
echo "LPAD(): " . $row['LPadValue'] . "<br>";
echo "RPAD(): " . $row['RPadValue'] . "<br>";
echo "LOCATE(): " . $row['LocateValue'];
?>

// - SQL Queries
SELECT LENGTH('Programming');

SELECT CONCAT('Hello',' ','World');

SELECT CONCAT_WS('-', '2026', '06', '30');

SELECT TRIM('   PHP   ');

SELECT LTRIM('   PHP');

SELECT RTRIM('PHP   ');

SELECT LPAD('PHP', 10, '*');

SELECT RPAD('PHP', 10, '*');

SELECT LOCATE('PHP', 'Welcome to PHP Programming');