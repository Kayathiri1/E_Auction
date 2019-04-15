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
                            <?php include('assets/myauction_details.inc.php');?>
                          
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
