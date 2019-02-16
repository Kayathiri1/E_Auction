    <?php 
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");

}
?>        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
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
            <!-- Phone/Email -->
            <div id="pre-header" class="background-gray-lighter">
                <div class="container no-padding">
                    <div class="row hidden-xs">
                         <div class="col-sm-6 padding-vert-5">
                            <strong>Phone:</strong>&nbsp;0770589635
                        </div>
                        <div class="col-sm-6 text-right padding-vert-5">
                            <strong>Email:</strong>&nbsp;e_auction@gmail.com
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Phone/Email -->
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php" title="">
                                <i><b><h1>E-Auction</h1></i></b>
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
             <!-- End Header -->
            <!-- Top Menu -->
            <div id="hornav" class="bottom-border-shadow">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-8 no-padding">
                            <div class="visible-lg">
                                  <ul id="hornavmenu" class="nav navbar-nav">
                                    <li>
                                        <a href="account.php" class="fa-home active">Home</a>
                                    </li>
                                    <?php
                                    $role=$_SESSION['type'];
                                    if ($role=="seller"){
                                        echo '
                                      <li>
                                                <span class="fa-copy ">Auction</span>
                                                <ul>
                                                    <li>
                                                        <a href="myauction_list.php">My auction</a>
                                                    </li>
                                                    <li>
                                                        <a href="create_auction.php">Create Auction</a>
                                                    </li>
                                                </ul>
                                    
                                    </li>'; 
                                    }else{
                                         echo '
                                      <li>
                                                <span class="fa-copy ">Auction</span>
                                                <ul>
                                                    <li>
                                                        <a href="auction_list.php">Auction</a>
                                                    </li>
                                                    <li>
                                                        <a href="won_auction.php">Won Auction</a>
                                                    </li>
                                                </ul>
                                    
                                    </li>'; 
                                    }
                                    ?>
                                    <li>
                                        <span class="fa-gears "><?php echo $_SESSION['email'];?></span>
                                        <ul>
                                            <li class="parent">
                                                <span><a href="change_password.php">Change Password</a>
                                                </span>
                                            </li>
                                            <li class="parent">
                                                <span><a href="logout.php">Logout</a>
                                                </span>
                                                
                                            </li>

                                            
                                        </ul>
                                    </li>

                                    
                            </ul>
                                    
                            </div>
                        </div>
                        <div class="col-md-4 no-padding">
                            <ul class="social-icons pull-right">
                                <li class="social-rss">
                                    <a href="#" target="_blank" title="RSS"></a>
                                </li>
                                <li class="social-twitter">
                                    <a href="#" target="_blank" title="Twitter"></a>
                                </li>
                                <li class="social-facebook">
                                    <a href="#" target="_blank" title="Facebook"></a>
                                </li>
                                <li class="social-googleplus">
                                    <a href="#" target="_blank" title="Google+"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
            <!-- === END HEADER === -->