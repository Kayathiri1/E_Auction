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