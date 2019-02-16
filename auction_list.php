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

                         
                    
                   <form class="signup-page" method="POST" >

                      <input type="text" placeholder="Search.." name="type">
                      <button type="submit" name="search">Submit</button>
                    <div class="signup-header"><h2>Auctions</h2></div>
                    <?php
                        $type="";
                        $db = mysqli_connect('localhost', 'root', '', 'auction');
                        $query="SELECT * from auction WHERE closing_date>CURDATE() ORDER BY auction_id DESC";
                        $result=mysqli_query($db,$query);
                        if(isset($_POST['search'])){
                            $type = mysqli_real_escape_string($db, $_POST['type']);
                            $query="SELECT * from auction WHERE type='$type' AND closing_date>CURDATE() ORDER BY auction_id DESC";
                            if($type==""){
                                $query="SELECT * from auction WHERE closing_date>CURDATE() ORDER BY auction_id DESC";
                            }
                            $result=mysqli_query($db,$query);
                        }
                        if(mysqli_num_rows($result)==0){
                            echo "Nothing found";
                           
                        }else{
                        
                        while($row=mysqli_fetch_array($result)){
                            $name=$row['name'];
                            $desc=$row['Description'];
                            echo '<b><h2>','<a href="">',$name,'</a><br></b></h2>';
                            echo '
                            <tr>
                            <td>
                            <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="200px" width="200px"/> 
                            </td>
                            </tr>';
                            echo '<br>',$desc,'<br>';
                            
                        }}
                        ?>


                    </form>

                            


       </div>
                        <!-- End Register Box -->
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
         <?php include 'assets/footer.php';?>
