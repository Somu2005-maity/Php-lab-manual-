<html>
<body>

<form method="post">
Number 1: <input type="number" name="n1"><br><br>
Number 2: <input type="number" name="n2"><br><br>
<input type="submit" name="add" value="Add">
</form>

<?php
function add($a,$b)
{
    return $a+$b;
}

if(isset($_POST['add']))
{
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];

    echo "Result = ".add($n1,$n2);
}
?>

</body>
</html>