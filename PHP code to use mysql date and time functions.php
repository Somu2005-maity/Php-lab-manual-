<?php
$conn = mysqli_connect("localhost", "root", "", "test");

$sql = "SELECT
HOUR(NOW()) AS HourValue,
MINUTE(NOW()) AS MinuteValue,
SECOND(NOW()) AS SecondValue,
DATE_FORMAT(NOW(), '%d-%m-%Y %H:%i:%s') AS FormattedDate,
DATE_SUB(NOW(), INTERVAL 7 DAY) AS PreviousDate";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

echo "HOUR(): " . $row['HourValue'] . "<br>";
echo "MINUTE(): " . $row['MinuteValue'] . "<br>";
echo "SECOND(): " . $row['SecondValue'] . "<br>";
echo "DATE_FORMAT(): " . $row['FormattedDate'] . "<br>";
echo "DATE_SUB(): " . $row['PreviousDate'];
?>

// sql quries only
SELECT HOUR(NOW());

SELECT MINUTE(NOW());

SELECT SECOND(NOW());

SELECT DATE_FORMAT(NOW(), '%d-%m-%Y %H:%i:%s');

SELECT DATE_SUB(NOW(), INTERVAL 7 DAY);