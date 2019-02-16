<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['type']);
session_destroy();
header("location:index.php");

?>