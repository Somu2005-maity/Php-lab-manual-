# step1: Create a file named "message.php" and add the following code:
<?php
echo "Welcome to PHP Programming!";
?>
# step2: use include and require function to include the "message.php" file in another PHP file named "main.php":
<?php
echo "Using include:<br>";
include("message.php");

echo "<br><br>Using require:<br>";
require("message.php");
?>