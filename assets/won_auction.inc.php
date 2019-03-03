
                        <?php

                        $type="";
                        $user=$_SESSION['email'];
                        $db = mysqli_connect('localhost', 'root', '', 'auction');
                        $sql="SELECT * from winner WHERE bidder='$user'";
                        $res=mysqli_query($db,$sql);
                        if(mysqli_num_rows($res)==0){
                            echo "<div class=\"col-md-4 portfolio-item margin-bottom-40 $type\">";
                                         echo   "<blink><h2><b><div class=\"animate fadeIn\"><font color=\"red\">You did not win anything</blink></font></div></b></h2>";    
                           
                        }else{
                            while($row=mysqli_fetch_array($res)){
                                $id=$row['auction_id'];
                                $bid=$row['bidsum'];
                                $date=$row['date'];
                                $curdate=date('Y-m-d');

                                $query="SELECT * from auction WHERE closing_date<'$date' AND auction_id='$id'";
                                $result=mysqli_query($db,$query);
                                if(mysqli_num_rows($result)==0){
                                        
                                }else{
                                        while($row=mysqli_fetch_array($result)){
                                        $name=$row['name'];
                                        $auction_id=$row['auction_id'];
                                        $type=$row['type'];
                                        $ip=$row['start_value'];
                                        echo "<div class=\"col-md-4 portfolio-item margin-bottom-40 $type\">";
                                         echo   '<div>';
                                                echo "<a href=\"auction_details.php?auction_id=$auction_id\">";
                                                    echo '<figure>
                                                            <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="200px" width="200px"/>                                             
                                                            <figcaption>
                                                            <h3 class="margin-top-20">';
                                                            echo $name;
                                                            echo '</h3><span>';
                                                            echo "You won for : Rs ",$bid;
                                                            echo '<br> Click to view more details';
                                                            echo '</span>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>';                                                                            
                                        }
                                }
                            }
                        }
                        
                        
                        
                           
                            
                            ?>
