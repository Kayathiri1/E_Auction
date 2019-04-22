<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['type']);
unset($_SESSION['wallet_id']);

session_destroy();
header("location:index.php");

?>