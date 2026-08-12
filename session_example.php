<?php
// session are always unique according to
// session are always cookies
session_start(); //compulsory

?>
<html>

<body>
    <?php
    $_SESSION["username"] = "Ashish";
    echo "Session information is stored"
    ?>
</body>
</html>