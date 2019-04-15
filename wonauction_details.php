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
                            <?php include('assets/wonauction_details.inc.php');?>
                            <div class="col-md-8">
                            <div class="row animate fadeInUp">
                                <form method="POST">
                                <label>Auction ID
                                    <span class="color-red">*</span>
                                </label>
                                <input class="form-control margin-bottom-20" type="number" name="id" id="id" value="<?php echo $id; ?>" required>
                                <label>Your ID
                                    <span class="color-red">*</span>
                                </label>
                                <input class="form-control margin-bottom-20" type="text" name="user" id="user" value="<?php echo $_SESSION['email'];?>" required>
                                <label>Owner
                                    <span class="color-red">*</span>
                                </label>
                                <input class="form-control margin-bottom-20" type="text" name="owner" id="owner" value="<?php echo $owner; ?>" required>
                                <label>Amount (in Ether)
                                    <span class="color-red">*</span>
                                </label>
                                <input class="form-control margin-bottom-20" type="number" name="ether" id="ether" value="<?php echo $bidsum/5000;?>" required>
                                <button class="btn btn-primary" type="submit" name="send">Send</button>
                            </div>
                           
                            <hr class="margin-bottom-40">
                           </div>
                       </form>
                        </div>
                    </div>
                </div>
	                        

                            
						
            </div>
            
         <?php include 'assets/footer.php';?>
