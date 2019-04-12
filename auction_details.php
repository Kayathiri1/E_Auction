<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register|E-Auction</title>
        <style>
    table,th,td{
    border:1px solid black;
    }
    th,td{
            padding: 15px;

    }
    table{
        border-spacing: 5px;
    }

</style>
		<?php include 'assets/acc_header.php';?>
           
         	<div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <div class="col-md-8">
                            <?php
                            $id=$_GET['auction_id'];
                                $db = mysqli_connect('localhost', 'root', '', 'auction');
                                $query="SELECT * from auction WHERE auction_id='$id'";
                                $result=mysqli_query($db,$query);
                                if(mysqli_num_rows($result)==1){
                                    while($row=mysqli_fetch_array($result)){
                                        $name=$row['name'];
                                        $desc=$row['Description'];
                                        $auction_id=$row['auction_id'];
                                        $owner=$row['owner'];
                                        $cd=$row['closing_date'];
                                        $ip=$row['start_value'];
                                        echo '<b><h2><center>';
                                        echo $name;
                                        echo '</center><br></b></h2>';
                                        echo '
                                        <div class="row">
                                <div class="col-md-6 animate fadeIn">
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="margin-top-10" height="200px" width="200px"/> 
                                    
                                </div>';
                                        
                                                                           
                                    }
                                }

                            echo '
                            
                            
                                <div class="col-md-6 margin-bottom-10 animate fadeInRight">
                                    <br><table style="width:100%">
                                        <tr>
                                        <td>Auction ID</td>
                                        <td>';
                                        echo $auction_id;
                                        echo '</td></tr>';
                                        echo '<tr>
                                        <td>Description</td><td>';
                                        echo $desc;
                                        echo '</td></tr>';
                                        echo '<tr>
                                        <td>Owner</td><td>';
                                        echo $owner;
                                        echo '</td></tr>';
                                        echo '<tr>
                                        <td>Closing date</td><td>';
                                        echo $cd;
                                        echo '</td></tr>';
                                        echo '<tr>
                                        <td>Initial price</td><td>';
                                        echo "Rs",$ip;
                                        echo '</td></tr>';
                                        echo '</table><br>
                                    <div class="clearfix"></div>
                                    <h4>
                                        <em></em>
                                    </h4>
                                    <p></p>
                                    <p></p>
                                </div>
                            </div>
                            <hr>'; ?>
                            <div class="col-md-8">
                            <div class="row animate fadeInUp">
                                <form method="POST">
                                <label>Your bidding amount(in RS)
                                    <span class="color-red">*</span>
                                </label>
                                <input class="form-control margin-bottom-20" type="number" name="bid_value" id="bid_value" min=<?php echo $ip;?>
                                step="0.01"  required>
                            </div>
                            <?php
                            $bidder=$_SESSION['email'];
                            $query = "SELECT * FROM bidding_details WHERE bidder='$bidder' AND auction_id='$auction_id';";
                            $result=mysqli_query($db, $query);
                             if(mysqli_num_rows($result)==0){
                                 
                           echo '<button class="btn btn-primary" type="submit" name="add_bid">Add</button>';
                                }else{
                                    echo "You have already recorded your amount.";
                                    echo "THANK YOU";
                                }
                           ?>
                            <hr class="margin-bottom-40">
                           </div>
                       </form>
                        </div>
                    </div>
                </div>
	                        

                            <?php 
                             
                                    $bidder=$_SESSION['email'];
                                    $bid_value="";
                                    
                                    if (isset($_POST['add_bid'])) {
                                        $bid_value = mysqli_real_escape_string($db, $_POST['bid_value']);
                                        
                                    $query="INSERT INTO bidding_details (auction_id, owner,  bidder, bidding_amount) VALUES('$auction_id','$owner', '$bidder' ,'$bid_value')";
                                    if(mysqli_query($db,$query)){
                                        echo '<script>alert("inserted")</script>';
                                
                                    }

                                               
                                           
                                       
                                        
                                    }

                            ?>
                            
						
            </div>
            
         <?php include 'assets/footer.php';?>
