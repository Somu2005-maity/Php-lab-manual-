<?php

session_start(); // compulsory

?>
<html>
   
<body>
    <?php
    echo "user:" $_SESSION["username"]
    ?>
</body>

</html>