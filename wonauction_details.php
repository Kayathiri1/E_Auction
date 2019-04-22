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

 <?php
                            $id=$_GET['auction_id'];
                            $db = mysqli_connect('localhost', 'root', '', 'auction');
                            $query="SELECT * from winner WHERE auction_id='$id'";
                            $result=mysqli_query($db,$query);
                            if(mysqli_num_rows($result)==1){
                                while($row=mysqli_fetch_array($result)){
                                    $bidsum=$row['bidsum']/5000;                                     
                                                                           
                                }
                            }
                            $from=$_SESSION['email'];
                            $query="SELECT * from ganache_mapping WHERE email='$from'";
                            $result=mysqli_query($db,$query);
                            if(mysqli_num_rows($result)==1){
                                while($row=mysqli_fetch_array($result)){
                                    $from=$row['account_id'];                                        
                                    $_SESSION['from']=$from;
                                }
                            }
                            $query="SELECT * from auction WHERE auction_id='$id'";
                            $result=mysqli_query($db,$query);
                            if(mysqli_num_rows($result)==1){
                                while($row=mysqli_fetch_array($result)){
                                    $owner=$row['owner'];                                        
                                                                           
                                }
                            }
                           
                            $query="SELECT * from ganache_mapping WHERE email='$owner'";
                            $result=mysqli_query($db,$query);
                            if(mysqli_num_rows($result)==1){
                                while($row=mysqli_fetch_array($result)){
                                    $to=$row['account_id'];                                        
                                    $_SESSION['to']=$to;
                                }
                            }
                            ?>

           
         	<div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <div class="col-md-8">
                            <div class="col-md-8">
                            <div class="row animate fadeInUp">
                                <form method="POST" onsubmit="myfun()" action="assets/wonauction_details.inc.php">
                                <label>Auction ID
                                    <span class="color-red">*</span>
                                </label>
                                <input class="form-control margin-bottom-20" type="number" name="id" id="id" value="<?php echo $id; ?>" readonly required>
                                <label>Your ID
                                    <span class="color-red">*</span>
                                </label>
                                <input class="form-control margin-bottom-20" type="text" name="user" id="user" value="<?php echo $_SESSION['email'];?>" readonly required>
                                <label>Owner
                                    <span class="color-red">*</span>
                                </label>
                                <input class="form-control margin-bottom-20" type="text" name="owner" id="owner" value="<?php echo $owner; ?>" readonly required>
                                <label>Amount (in Ether)
                                    <span class="color-red">*</span>
                                </label>
                                <input class="form-control margin-bottom-20" type="number" name="ether" id="ether" value="<?php echo $bidsum;?>" readonly required>
                                <button class="btn btn-primary" type="submit" id="send" name="send">Send</button>
                            </div>
                           
                            <hr class="margin-bottom-40">
                           </div>
                       </form>
                        </div>
                    </div>
                </div>
	                        

                            
						
            </div>
            <script src="web3.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script>
var Web3 = require('web3');
var web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
$(document).ready(function()
{
    $('#send').click(function()
    {
        var amount= <?php echo $bidsum; ?>;
        var fromId= <?php echo $from; ?>;
        var toId= <?php echo $to; ?>;
        var balance= web3.fromWei(web3.eth.getBalance(web3.eth.accounts[fromId]));
        if (balance<=amount){
            alert("Not enough credit in your account!!!");
            return false;
        }else{
            web3.eth.sendTransaction({from:web3.eth.accounts[fromId],to:web3.eth.accounts[toId],value:web3.toWei(amount,"ether")});
            alert("Transaction completed!!!");
            return true;
        }
        
 
    });

});
    var fromId= <?php echo $from; ?>;
 

    for (var i=1; i < 30; i++) {

    }

    web3.eth.getTransactionCount(web3.eth.accounts[fromId], 'latest', (err, current)=>{
      for (var i=1; i <= current; i++) {
        web3.eth.getBlock(i, (err, res) => {
          console.log(res)
        })
      }
    });


</script>

            
         <?php include 'assets/footer.php';?>
