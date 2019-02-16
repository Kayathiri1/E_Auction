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
<?php include 'assets/acc_header.php';?>
           
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Register Box -->
                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">

                         
                    
                   <form class="signup-page" method="POST" enctype="multipart/form-data">
                        <div class="signup-header"><h2>My Auctions</h2></div>
                    <?php
                        $owner=$_SESSION['email'];
                        $db = mysqli_connect('localhost', 'root', '', 'auction');

                        $query="SELECT * from auction WHERE owner='$owner' ORDER BY auction_id DESC";
                        $result=mysqli_query($db,$query);
                        if(mysqli_num_rows($result)==0){
                            echo "You have not added any auctions!!";
                            echo "<br><a href=\"create_auction.php\">Click here </a> to add new auction.";
                        }
                        while($row=mysqli_fetch_array($result)){
                            $name=$row['name'];
                            $desc=$row['Description'];
                            echo '<b><h2>',$name,'<br></b></h2>';
                            echo '
                            <tr>
                            <td>
                            <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="200px" width="200px"/> 
                            </td>
                            </tr>';
                            echo '<br>',$desc,'<br>';
                            
                        }
                        ?>


                    </form>

                            


       </div>
                        <!-- End Register Box -->
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
         <?php include 'assets/footer.php';?>
