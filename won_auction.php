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
       
           <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <div class="col-md-12">
                            <h2><b>
                            <div class="animate fadeIn">
                            YOUR COLLECTIONS!!!</div></b></h2>
                            
                            <div class="portfolio-filter-container margin-top-20">
                                <ul class="portfolio-filter">
                                    <li class="portfolio-filter-label label label-primary">
                                        filter by:
                                    </li>
                                    <li>
                                        <a href="#" class="portfolio-selected btn btn-default" data-filter="*">All</a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-default" data-filter=".vehicle">Vehicle</a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-default" data-filter=".mobile">Mobile</a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-default" data-filter=".jewellery">Jewellery</a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-default" data-filter=".furniture">Furniture</a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-default" data-filter=".camera">Camere</a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-default" data-filter=".computer">Computer</a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-default" data-filter=".clothes">Clothes</a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-default" data-filter=".shoes">Shoes</a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-default" data-filter=".building">Building</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Filter Buttons -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 portfolio-group no-padding">
                            

                     
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
                           
                            
                            
                            
                        }
                            ?>


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
