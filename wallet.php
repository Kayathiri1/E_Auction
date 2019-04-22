<!-- === BEGIN HEADER === -->

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
    <?php include 'assets/acc_header.php';?>

        <?php $wallet_id=$_SESSION['wallet_id']; ?>
        <!-- Title -->
        <title>Register|E-Auction</title>
        <script src="web3.js"></script>
        <script>

        var Web3 = require('web3');
        var web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
        var wallet_id = <?php  echo $wallet_id; ?>;
        var balance=web3.fromWei(web3.eth.getBalance(web3.eth.accounts[wallet_id]));
        </script>
 
       
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <div class="col-md-12">
                            <h2><b>
                            <div class="animate fadeIn">
                            Your Wallet</div></b></h2>
                            
                            <div class="portfolio-filter-container margin-top-20">
                                <ul class="portfolio-filter">
                                    <li class="portfolio-filter-label label label-primary">
                                        View
                                    </li>
                                   
                                    <li>
                                        <a href="#" class="btn btn-default" data-filter=".balance">Balance</a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-default" data-filter=".transactions">Transactions</a>
                                    </li>
                                   
                                   
                                </ul>
                            </div>
                            <!-- End Filter Buttons -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 portfolio-group no-padding">
                            <!--Display current balance -->
                            <div class="col-md-4 portfolio-item margin-bottom-40 balance">
                                <div><b>
                                <span>Balance in ether<p id="balance"></p></b></span>
                                <script>
                                    document.getElementById("balance").innerHTML = balance;
                                </script>
                                </div>
                            </div>
                            <!-- Display the transaction details -->
                            <div class="col-md-4 portfolio-item margin-bottom-40 transactions">
                                <div>   
                                <script>
                                    var Web3 = require('web3');
                                    var web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
                                    var fromId= <?php echo $id; ?>;
                                    for (var i=1; i < 30; i++) {}
                                    web3.eth.getTransactionCount(web3.eth.accounts[id], 'latest', (err, current)=>{
                                    for (var i=1; i <= current; i++) {
                                        web3.eth.getBlock(i, (err, res) => {
                                        console.log(res)
                                        })
                                    }
                                    });
                                
                                </script>
                                <?php include 'assets/transaction.inc.php';?>
                                </div>
                            </div>
                           
                            

                        </div>
                    </div>
                </div>
            

                         
              

                            


       </div>
                        <!-- End Register Box -->
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
         <?php include 'assets/footer.php';?>
