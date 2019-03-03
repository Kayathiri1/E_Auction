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
                            
<script>
                            var today = new Date();
                            var dd = today.getDate();
                            var mm = today.getMonth()+1; //January is 0!
                            var yyyy = today.getFullYear();
                             if(dd<10){
                                    dd='0'+dd
                                } 
                                if(mm<10){
                                    mm='0'+mm
                                } 

                            today = yyyy+'-'+mm+'-'+dd+1;
                            document.getElementById("datefield").setAttribute("max", today);
                        </script>
                         
                     <?php include('assets/won_auction.inc.php');?>

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
