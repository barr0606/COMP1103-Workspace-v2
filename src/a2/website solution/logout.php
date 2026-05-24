<?php
    //author Oliver Munro
session_start();
session_unset();
session_destroy();

header("Location: admin.php");
exit;
?>