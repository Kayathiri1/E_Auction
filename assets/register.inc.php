<?php 
session_start();
$firstname="";
$lastname="";
$email="";
$phone="";
$type="";
$password="";
$repassword="";

$db = mysqli_connect('localhost', 'root', '', 'auction');
if (isset($_POST['register'])) {
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $type = mysqli_real_escape_string($db, $_POST['type']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $repassword = mysqli_real_escape_string($db, $_POST['repassword']);
    $query = "INSERT INTO users (firstname, lastname,  email, phone ,type, password)
            VALUES('$firstname','$lastname', '$email' ,'$phone', '$type' ,'$password')";
       mysqli_query($db, $query);
    header("location: index.php?created");
}
?>

