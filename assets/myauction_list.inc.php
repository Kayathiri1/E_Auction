<?php
                        $owner=$_SESSION['email'];
                        $db = mysqli_connect('localhost', 'root', '', 'auction');

                        $query="SELECT * from auction WHERE owner='$owner' ORDER BY auction_id DESC";
                        $result=mysqli_query($db,$query);
                        if(mysqli_num_rows($result)==0){
                            echo "You have not added any auctions!!";
                            echo "<br><a href=\"create_auction.php\">Click here </a> to add new auction.";
                        }
                        while($row=mysqli_fetch_array($result)){
                            $name=$row['name'];
                            $desc=$row['Description'];
                            $cd=$row['closing_date'];
                            $auction_id=$row['auction_id'];
                            echo '<b><h2>';
                            echo "<a href=\"myauction_details.php?auction_id=$auction_id\">$name";
                            echo '<br></b></h2>';
                            echo '
                            <tr>
                            <td>
                            <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="200px" width="200px"/> ';
                            $curdate=date('Y-m-d');

                            if($cd<$curdate){
                                echo "<blink><b><font color=\"red\">EXPIRED!!!!!!</font></b></blink>";
                            }else{
                                echo "<blink><b><font color=\"green\">AVAILABLE!!!!!!</font></b></blink>";;
                            }
                            echo '</td>
                            </tr>';
                            echo '<br>',$desc,'<br>';
                            
                        }
                        ?>