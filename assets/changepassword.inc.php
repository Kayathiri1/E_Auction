<?php 
    
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
}
$email=$_SESSION['email'];
$cur_password="";
$new_password1="";
$new_password2="";

$db = mysqli_connect('localhost', 'root', '', 'auction');
if (isset($_POST['change_password'])) {
    $cur_password = mysqli_real_escape_string($db, $_POST['cur_password']);
    $new_password1 = mysqli_real_escape_string($db, $_POST['new_password1']);
    $new_password2 = mysqli_real_escape_string($db, $_POST['new_password2']);

    $query = "SELECT * FROM users WHERE email='$email' AND password='$cur_password';";
    $result=mysqli_query($db, $query);
   

    if(mysqli_num_rows($result)==1){
        if($new_password1==$new_password2){
            $query="UPDATE users SET password = '$new_password1' WHERE email='$email'";
            mysqli_query($db, $query);
            header("location: account.php?successfully_changed");  
        }else{
            header("location: account.php?New_passwords_does't_match");
        }
        
        
    }else{

        header("location: change_password.php?Incorrect_password");

        
    }
    
}
?>


