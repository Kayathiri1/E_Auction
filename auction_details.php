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
                            <?php include('assets/auction_details.inc.php');?>
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
	                        

                            
						
            </div>
            
         <?php include 'assets/footer.php';?>
