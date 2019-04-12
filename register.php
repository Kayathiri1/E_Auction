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




<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Register|E-Auction</title>
<?php include 'assets/header.php';?>
           
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
                                    password1 = form.password.value; 
                                    password2 = form.repassword.value; 
                      
                                       
                                    if (password1 != password2) { 
                                        alert ("\nPassword did not match: Please try again...") 
                                        return false; 
                                    } 
                      
                                    // If same return True. 
                                    else{ 
                                        alert("Password Match: Welcome to E-Auction!") 
                                        return true; 
                                    } 
                                }
                            </script>




                            <form class="signup-page" method="POST" onSubmit = "return checkPassword(this)">
                                <div class="signup-header">
                                    <h2>Register a new account</h2>
                                    <p>Already a member? Click
                                        <a href="login.php">HERE</a>to login to your account.</p>
                                </div>

                                <label>First Name
                                    <span class="color-red">*</span>
                                </label>
                                <input class="form-control margin-bottom-20" type="text" name="firstname" id="firstname" pattern="[A-Za-z]{3,}" title="Three or more letter" required>
                                <label>Last Name</label>
                                <input class="form-control margin-bottom-20" type="text" name="lastname" id="lastname" pattern="[A-Za-z]{0,}" title="Only alphabetic letters" >
                                <label>Email Address
                                    <span class="color-red">*</span>
                                </label>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                <input class="form-control margin-bottom-20" type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="The format should be someone@something.XXX" required>

                                <label>Phone Number
                                    <span class="color-red">*</span>
                                </label>
                                <input class="form-control margin-bottom-20" type="text" name="phone" id="phone" pattern="[0-9]{10}" title="Only 10 digit number" required>
                                <label>Type</label>
                                <select class="form-control margin-bottom-20" name="type" id="type">
                                  <option value="buyer" for="type">Buyer</option>
                                  <option value="seller" for="type">Seller</option>
                                  
                                </select>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Password
                                            <span class="color-red">*</span>
                                        </label>
                                        <input class="form-control margin-bottom-20" type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Confirm Password
                                            <span class="color-red">*</span>
                                        </label>
                                        <input class="form-control margin-bottom-20" type="password" name="repassword" id="repassword" required>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <label class="checkbox">
                                            <input type="checkbox" required>I read the
                                            <a href="#">Terms and Conditions</a>
                                        </label>
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <button class="btn btn-primary" type="submit" name="register">Register</button>
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
