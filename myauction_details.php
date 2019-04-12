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
                       	<div class="col-md-8 col-md-offset-2 col-sm-offset-3">
	                        <form class="signup-page" method="POST">    
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
                                        <tr>
                                        <td>
                                        <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="200px" width="200px"/> ';
                                        echo '
                                        </td>
                                        </tr>';
                                        echo '<br><table style="width:100%">
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
                                        echo '</table><br>';
                                                                           
                                    }
                                }else{                    
                                    echo "Not available!! Error in the server";
                                }

                           ?>
                          
                          
                          <h3><b>Bidders details</b></h3> 

                        <?php 
                        $query="SELECT * from bidding_details WHERE auction_id='$id' ORDER BY bidding_amount DESC";
                        $result=mysqli_query($db,$query);
                        if(mysqli_num_rows($result)==0){
                            echo "No one recorded their bidding";
                           
                        }else{
                        echo '<br><table style="width:100%">
                        <tr><th>Bidder</th><th>Bidding amount</th></tr>';
                        while($row=mysqli_fetch_array($result)){
                            $bidder=$row['bidder'];
                            $bid_amount=$row['bidding_amount'];
                            echo '<tr><td>';
                            echo $bidder;
                            echo '</td><td>';
                            echo $bid_amount;
                            echo '</tr>';
                            
                            
                        }echo '</table>';
                        }
                        ?>


	                    	</form>

                           
                            
						</div>
                    </div >
                </div>
            </div>
            
         <?php include 'assets/footer.php';?>
