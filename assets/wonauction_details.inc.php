 <?php
                            $id=$_GET['auction_id'];
                            $db = mysqli_connect('localhost', 'root', '', 'auction');
                            $query="SELECT * from winner WHERE auction_id='$id'";
                            $result=mysqli_query($db,$query);
                            if(mysqli_num_rows($result)==1){
                                while($row=mysqli_fetch_array($result)){
                                    $bidsum=$row['bidsum'];                                     
                                                                           
                                }
                            }

                            $query="SELECT * from auction WHERE auction_id='$id'";
                            $result=mysqli_query($db,$query);
                            if(mysqli_num_rows($result)==1){
                                while($row=mysqli_fetch_array($result)){
                                    $owner=$row['owner'];                                        
                                                                           
                                }
                            }
                            $from=$_SESSION['email'];
                            $query="SELECT * from users WHERE email='$from'";
                            $result=mysqli_query($db,$query);
                            if(mysqli_num_rows($result)==1){
                                while($row=mysqli_fetch_array($result)){
                                    $from=$row['hash_value'];                                        
                                    $_SESSION['from']=$from;
                                }
                            }
                            $query="SELECT * from users WHERE email='$owner'";
                            $result=mysqli_query($db,$query);
                            if(mysqli_num_rows($result)==1){
                                while($row=mysqli_fetch_array($result)){
                                    $to=$row['hash_value'];                                        
                                    $_SESSION['to']=$to;
                                }
                            }
                            ?>