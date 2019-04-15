<?php 
session_start();
$firstname="";
$lastname="";
$email="";
$phone="";
$type="";
$password="";
$repassword="";
$hash_value="";

$db = mysqli_connect('localhost', 'root', '', 'auction');
if (isset($_POST['register'])) {
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $type = mysqli_real_escape_string($db, $_POST['type']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $repassword = mysqli_real_escape_string($db, $_POST['repassword']);
    $hash_value=md5($email);
    $query = "INSERT INTO users (firstname, lastname,  email, phone ,type, password , hash_value)
            VALUES('$firstname','$lastname', '$email' ,'$phone', '$type' ,'$password' , '$hash_value')";
       mysqli_query($db, $query);
    header("location: index.php?created");
}
?>

