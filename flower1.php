<?php
include('connection.php');
$name=$_GET["uname"];
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <title>Floral Decoration</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/templatemo_style.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/testimonails-slider.css">

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

            <header>
                <div id="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="home-account">
                                    <a href="#">Hello&nbsp;<?php
										echo "$name";
									?></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cart-info">
                                    <a href="index.html">Logout</a>
                                </div>
                            </div>
							
                            
                        </div>
                    </div>
                </div>
                <div id="main-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="logo">
                                    <h3>Floral Decoration</h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-menu">
                                    <ul>
                                        <li><a href="#">Home</a></li>
										
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="search-box">  
                                    <form name="search_form" method="get" class="search_form">
                                        <input id="search" type="text" />
                                        <input type="submit" id="search-button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
			
			
			<div id="latest-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Types of FLowers Used</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="img/flowers/1.jpg" width="480" height="240" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">...</a></h4>
                                        <span>lilly - Rs 250 /kg</span>
                                    </div>
                                    <div class="content-hide">
                                      <a href="book.html?" class="btn btn-success">Book Flowers</a>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="img/flowers/11.jpg" width="480" height="240" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">....</a></h4>
                                        <span>Red rose - Rs 200 /kg</span>
                                    </div>
                                    <div class="content-hide">
                                      <a href="book.html" class="btn btn-success">Book Flowers</a>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="img/flowers/3.jpg" width="480" height="240" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">...</a></h4>
                                        <span>Pink rose - Rs 250 /kg</span>
                                    </div>
									<div class="content-hide">
                                      <a href="book.html" class="btn btn-success">Book Flowers</a>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/4.jpg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">...</a></h4>
                                        <span>Lotus - Rs 450 /kg</span>
                                    </div>
                                    <div class="content-hide">
                                      <a href="book.html" class="btn btn-danger">Book Flowers</a>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/5.jpg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">....</a></h4>
                                        <span>Viberent marigold - Rs 200 /kg</span>
                                    </div>
									<div class="content-hide">
                                      <a href="book.html" class="btn btn-danger">Book Flowers</a>  
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/6.jpg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">.....</a></h4>
                                        <span>Marigold - Rs 250 /kg</span>
                                    </div>
									<div class="content-hide">
                                      <a href="book.html" class="btn btn-danger">Book Flowers</a>  
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/13.jpg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">.....</a></h4>
                                        <span>White rose - Rs 350 /kg</span>
                                    </div>
                                    <div class="content-hide">
                                      <a href="book.html" class="btn btn-info">Book Flowers</a>  
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/8.jpg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">.....</a></h4>
                                        <span>Tuplip - Rs 250 /kg</span>
                                    </div>
                                    <div class="content-hide">
                                      <a href="book.html" class="btn btn-info">Book Flowers</a>  
                                    </div> 
                                </div>
                            </div>
                        </div>
						<div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/9.jpg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">.....</a></h4>
                                        <span>Shoeflower - Rs 280 /kg</span>
                                    </div>
									<div class="content-hide">
                                      <a href="book.html" class="btn btn-info">Book Flowers</a>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			
			<footer>
                <div class="container">
                    <div class="top-footer">
                        <div class="row">
                            
                           
                    <div class="bottom-footer">
                        <p>
                        	<span>Copyright © 2084 <a href="#">Your Company Name</a> 
                        </p>
                    </div>
                    
                </div>
            </footer>

    
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>