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
   
    //insert into mapping table
    $que= "SELECT id FROM users ORDER BY id desc limit 1";
    $result=mysqli_query($db, $que);
    
    if(mysqli_num_rows($result)==0){
      $last_id=0;
      $query1="INSERT INTO ganache_mapping (email , account_id) VALUES ('$email','$last_id')";
      mysqli_query($db,$query1);
    }else{
      $applicationArray=array();
      while($row=mysqli_fetch_assoc($result)){
          $applicationArray[]=$row;
      }
      foreach ($applicationArray as $application) {
          $last_id=$application['id'];
      }
  
  
      $query1="INSERT INTO ganache_mapping (email , account_id) VALUES ('$email','$last_id')";
      mysqli_query($db,$query1);
    }

 
    //inserting user table
    $query = "INSERT INTO users (firstname, lastname,  email, phone ,type, password , hash_value)
    VALUES('$firstname','$lastname', '$email' ,'$phone', '$type' ,'$password' , '$hash_value')";
    mysqli_query($db, $query);


    header("location: index.php?created");
}
?>

