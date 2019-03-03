<?php include('assets/changepassword.inc.php');?>



<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Account|E-Auction</title>
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="body-bg">
            <!-- Phone/Email -->
            <div id="pre-header" class="background-gray-lighter">
                <div class="container no-padding">
                    <div class="row hidden-xs">
                         <div class="col-sm-6 padding-vert-5">
                            <strong>Phone:</strong>&nbsp;0770589635
                        </div>
                        <div class="col-sm-6 text-right padding-vert-5">
                            <strong>Email:</strong>&nbsp;e_auction@gmail.com
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Phone/Email -->
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php" title="">
                                <i><b><h1>E-Auction</h1></i></b>
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
             <!-- End Header -->
            <!-- Top Menu -->
            <div id="hornav" class="bottom-border-shadow">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-8 no-padding">
                            <div class="visible-lg">
                                  <ul id="hornavmenu" class="nav navbar-nav">
                                    <li>
                                        <a href="account.php" class="fa-home active">Home</a>
                                    </li>
                                    <?php
                                    $role=$_SESSION['type'];
                                    if ($role=="seller"){
                                        echo '
                                      <li>
                                                <span class="fa-copy ">Auction</span>
                                                <ul>
                                                    <li>
                                                        <a href="myauction_list.php">My auction</a>
                                                    </li>
                                                    <li>
                                                        <a href="create_auction.php">Create Auction</a>
                                                    </li>
                                                </ul>
                                    
                                    </li>'; 
                                    }else{
                                         echo '
                                      <li>
                                                <span class="fa-copy ">Auction</span>
                                                <ul>
                                                    <li>
                                                        <a href="auction_list.php">Auction</a>
                                                    </li>
                                                    <li>
                                                        <a href="won_auction.php">Won Auction</a>
                                                    </li>
                                                </ul>
                                    
                                    </li>'; 
                                    }
                                    ?>
                                    <li>
                                        <span class="fa-gears "><?php echo $_SESSION['email'];?></span>
                                        <ul>
                                            <li class="parent">
                                                <span><a href="change_password.php">Change Password</a>
                                                </span>
                                            </li>
                                            <li class="parent">
                                                <span><a href="logout.php">Logout</a>
                                                </span>
                                                
                                            </li>

                                            
                                        </ul>
                                    </li>

                                    
                            </ul>
                                    
                            </div>
                        </div>
                        <div class="col-md-4 no-padding">
                            <ul class="social-icons pull-right">
                                <li class="social-rss">
                                    <a href="#" target="_blank" title="RSS"></a>
                                </li>
                                <li class="social-twitter">
                                    <a href="#" target="_blank" title="Twitter"></a>
                                </li>
                                <li class="social-facebook">
                                    <a href="#" target="_blank" title="Facebook"></a>
                                </li>
                                <li class="social-googleplus">
                                    <a href="#" target="_blank" title="Google+"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Register Box -->
                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                            <script> 
          
                                // Function to check Whether both passwords 
                                // is same or not. 
                                function checkPassword(form) { 
                                    password1 = form.new_password1.value; 
                                    password2 = form.new_password2.value; 
                      
                                       
                                    if (password1 != password2) { 
                                        alert ("\nPassword did not match: Please try again...") 
                                        return false; 
                                    } 
                      
                                    // If same return True. 
                                    else{ 
                                        
                                    } 
                                }
                            </script>




                            <form class="signup-page" method="POST" onSubmit = "return checkPassword(this)">
                                <div class="signup-header">
                                    <h2>Change Password</h2>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Current Password
                                            <span class="color-red">*</span>
                                        </label>
                                        <input class="form-control margin-bottom-20" type="password" name="cur_password" id="cur_password"  required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>New Password
                                            <span class="color-red">*</span>
                                        </label>
                                        <input class="form-control margin-bottom-20" type="password" name="new_password1" id="new_password1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Confirm New Password
                                            <span class="color-red">*</span>
                                        </label>
                                        <input class="form-control margin-bottom-20" type="password" name="new_password2" id="new_password2" required>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-8">
                                        
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <button class="btn btn-primary" type="submit" name="change_password">Change password</button>
                                    </div>
                                </div>
                            </form>
                            
 
                        </div>
                        <!-- End Register Box -->
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
         <?php include 'assets/footer.php';?>
<?php 

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
        $query="UPDATE users SET password = '$new_password1' WHERE email='$email'";
        mysqli_query($db, $query);

        header("location: account.php?successfully changed");
        
    }else{

        header("location: change_password.php?Incorrect_password");

        
    }
    
}
?>