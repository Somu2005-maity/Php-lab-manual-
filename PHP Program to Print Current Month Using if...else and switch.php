<?php
$month = date("F");

echo "Current Month: ".$month."<br><br>";

if($month == "January")
{
    echo "Month is January<br>";
}
else
{
    echo "Month is not January<br>";
}

switch($month)
{
    case "June":
        echo "Current Month is June";
        break;

    default:
        echo "Another Month";
}
?>