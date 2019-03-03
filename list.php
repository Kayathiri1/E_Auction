<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
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
                        <div class="col-md-12">
                            <h2>3 Column Portfolio</h2>
                            
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
                
                            echo "<div class=\"col-md-4 portfolio-item margin-bottom-40 $type\">";
                             echo   '<div>';
                                    echo "<a href=\"auction_details.php?auction_id=$auction_id\">";
                                        echo '<figure>
                                                <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="200px" width="200px"/>                                             
                                                <figcaption>
                                                <h3 class="margin-top-20">Velit esse molestie</h3>
                                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>'; 
                           
                            
                            
                            
                        }}
                            ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            
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