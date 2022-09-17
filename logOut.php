<?php
session_start();

session_unset();
session_destroy();

header("location: school_login.php");
exit;
?>