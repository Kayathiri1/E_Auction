 <?php
                            $type="";
                        $db = mysqli_connect('localhost', 'root', '', 'auction');
                        $query="SELECT * from auction WHERE closing_date>CURDATE() ORDER BY auction_id DESC";
                        $result=mysqli_query($db,$query);
                    
                        if(mysqli_num_rows($result)==0){
                            echo "Nothing found";
                           
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
                                                echo "Initial price : Rs ",$ip;
                                                echo '<br> Click to view more details';
                                                echo '</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>'; 
                           
                            
                            
                            
                        }}
                            ?>