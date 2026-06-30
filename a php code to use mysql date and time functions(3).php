<?php
$conn = mysqli_connect("localhost", "root", "", "test");

$sql = "SELECT
CURDATE() AS CurrentDate,
CURRENT_DATE() AS CurrentDate2,
CURTIME() AS CurrentTime,
CURRENT_TIME() AS CurrentTime2,
UNIX_TIMESTAMP() AS UnixTime,
FROM_UNIXTIME(UNIX_TIMESTAMP()) AS NormalTime";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

echo "CURDATE(): " . $row['CurrentDate'] . "<br>";
echo "CURRENT_DATE(): " . $row['CurrentDate2'] . "<br>";
echo "CURTIME(): " . $row['CurrentTime'] . "<br>";
echo "CURRENT_TIME(): " . $row['CurrentTime2'] . "<br>";
echo "UNIX_TIMESTAMP(): " . $row['UnixTime'] . "<br>";
echo "FROM_UNIXTIME(): " . $row['NormalTime'];
?>

//- sql quries
SELECT CURDATE();

SELECT CURRENT_DATE();

SELECT CURTIME();

SELECT CURRENT_TIME();

SELECT UNIX_TIMESTAMP();

SELECT FROM_UNIXTIME(UNIX_TIMESTAMP());