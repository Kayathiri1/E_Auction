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
    $query = "SELECT type FROM users WHERE email='$email' AND password='$password';";
    $result=mysqli_query($db, $query);
    $applicationArray=array();
    while($row=mysqli_fetch_assoc($result)){
        $applicationArray[]=$row;
    }
foreach ($applicationArray as $application) {
    $role=$application['type'];
}
    $_SESSION['email']=$email;
    $_SESSION['type']=$role;

    if(mysqli_num_rows($result)==1){
        
        header("location: account.php?successful");
    }else{
        header("location: login.php?failed");
        
    }
    
}
?>









<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Login|E-Auction</title>
        <!-- Meta -->
       <?php include 'assets/header.php';?>
           
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="container">
                        <div class="row margin-vert-30">
                            <!-- Login Box -->
                            <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                
                                <form class="login-page" method="POST">
                                    <div class="login-header margin-bottom-30">
                                        <h2>Login to your account</h2>
                                    </div>
                                    <div class="input-group margin-bottom-20">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <input placeholder="email" class="form-control" name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="The format should be someone@something.XXX" required>
                                    </div>
                                    <div class="input-group margin-bottom-20">
                                        <span class="input-group-addon">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                        <input placeholder="Password" name="password" class="form-control" type="password">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-primary pull-right" type="submit" name="login">Login</button>
                                        </div>
                                    </div>
                                    <hr>
                                    <h4>Forget your Password ?</h4>
                                    <p>
                                        <a href="#">Click here</a>to reset your password.</p>
                                </form>
                            </div>
                            <!-- End Login Box -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
                <?php include 'assets/footer.php';?>
