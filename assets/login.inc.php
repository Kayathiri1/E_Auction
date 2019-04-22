<?php 
session_start();
if (isset($_SESSION['email'])) {
    header("Location: account.php");
}

$email="";
$password="";

$db = mysqli_connect('localhost', 'root', '', 'auction');
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $query = "SELECT type,hash_value FROM users WHERE email='$email' AND password='$password';";
    $result=mysqli_query($db, $query);
    $applicationArray=array();
    while($row=mysqli_fetch_assoc($result)){
        $applicationArray[]=$row;
    }
foreach ($applicationArray as $application) {
    $role=$application['type'];
}
    $_SESSION['type']=$role;
    $_SESSION['email']=$email;

    if(mysqli_num_rows($result)==1){
        
        header("location: account.php?successful");
    }else{
        header("location: login.php?failed");
        
    }
    
}
?>







