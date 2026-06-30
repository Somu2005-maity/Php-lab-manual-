<?php
$conn = mysqli_connect("localhost", "root", "", "test");

$sql = "SELECT 
DAYOFWEEK(CURDATE()) AS DayOfWeek,
WEEKDAY(CURDATE()) AS WeekDay,
DAYOFMONTH(CURDATE()) AS DayOfMonth,
DAYOFYEAR(CURDATE()) AS DayOfYear,
DAYNAME(CURDATE()) AS DayName";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

echo "DAYOFWEEK(): " . $row['DayOfWeek'] . "<br>";
echo "WEEKDAY(): " . $row['WeekDay'] . "<br>";
echo "DAYOFMONTH(): " . $row['DayOfMonth'] . "<br>";
echo "DAYOFYEAR(): " . $row['DayOfYear'] . "<br>";
echo "DAYNAME(): " . $row['DayName'];
?>

// sql queries 
SELECT DAYOFWEEK(CURDATE());

SELECT WEEKDAY(CURDATE());

SELECT DAYOFMONTH(CURDATE());

SELECT DAYOFYEAR(CURDATE());

SELECT DAYNAME(CURDATE());
