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
<style>
blink {
    -webkit-animation: 2s linear infinite condemned_blink_effect; // for android
    animation: 2s linear infinite condemned_blink_effect;
}
@-webkit-keyframes condemned_blink_effect { // for android
    0% {
        visibility: hidden;
    }
    50% {
        visibility: hidden;
    }
    100% {
        visibility: visible;
    }
}
@keyframes condemned_blink_effect {
    0% {
        visibility: hidden;
    }
    50% {
        visibility: hidden;
    }
    100% {
        visibility: visible;
    }
}
</style>
<?php include 'assets/acc_header.php';?>
           
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Register Box -->
                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
 <script>
                            var today = new Date();
                            var dd = today.getDate();
                            var mm = today.getMonth()+1; //January is 0!
                            var yyyy = today.getFullYear();
                             if(dd<10){
                                    dd='0'+dd
                                } 
                                if(mm<10){
                                    mm='0'+mm
                                } 

                            today = yyyy+'-'+mm+'-'+dd+1;
                            document.getElementById("datefield").setAttribute("max", today);
                        </script>
                         
                    
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
                            $cd=$row['closing_date'];
                            $auction_id=$row['auction_id'];
                            echo '<b><h2>';
                            echo "<a href=\"myauction_details.php?auction_id=$auction_id\">$name";
                            echo '<br></b></h2>';
                            echo '
                            <tr>
                            <td>
                            <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="200px" width="200px"/> ';
                            $curdate=date('Y-m-d');

                            if($cd<$curdate){
                                echo "<blink><b><font color=\"red\">EXPIRED!!!!!!</font></b></blink>";
                            }else{
                                echo "<blink><b><font color=\"green\">AVAILABLE!!!!!!</font></b></blink>";;
                            }
                            echo '</td>
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
