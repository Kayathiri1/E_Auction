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
                          