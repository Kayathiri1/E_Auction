
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
                                        //check whether the transaction done or not
                                        $que="SELECT * from transaction WHERE auction_id='$auction_id'";
                                        $res1=mysqli_query($db,$que);
                                        if(mysqli_num_rows($res1)==0){
                                            $status=0;
                                        }
                                        else{
                                            $status=1;
                                        }



                                        $type=$row['type'];
                                        $ip=$row['start_value'];
                                        echo "<div class=\"col-md-4 portfolio-item margin-bottom-40 $type\">";
                                         echo   '<div>';
                                                if ($status==0){
                                                echo "<a href=\"wonauction_details.php?auction_id=$auction_id\">";}
                                                    echo '<figure>
                                                            <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="200px" width="200px"/>                                             
                                                            <figcaption>
                                                            <h3 class="margin-top-20">';
                                                            echo $name;
                                                            echo '</h3><span>';
                                                            echo "You won for : Rs ",$bid;
                                                            if ($status==0){ echo '<br> Click to make transaction';}
                                                            else{echo '<br> Transaction done';}
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
