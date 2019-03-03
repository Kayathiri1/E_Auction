<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
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
        <!-- Title -->
        <title>Habitat - A Professional Bootstrap Template</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="body-bg">
            
          
            
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <div class="col-md-8">
                            <?php
                            $id="1";
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
                            <div class="col-md-8">
                            <div class="row animate fadeInUp">
                                <label>Your bidding amount(in RS)
                                    <span class="color-red">*</span>
                                </label>
                                <input class="form-control margin-bottom-20" type="number" name="bid_value" id="bid_value" min=<?php echo $ip;?>
                                step="0.01"  required>
                            </div>

                            <hr class="margin-bottom-40">
                           </div> 
                        </div>
                    </div>
                </div>
            </div>
          
           
            
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->