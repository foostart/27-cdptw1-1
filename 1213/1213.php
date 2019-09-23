<<<<<<< HEAD
<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
    $less->compileFile('less/type-4.less', 'css/4.css');
    
?><!DOCTYPE html>
=======
<!DOCTYPE html>
>>>>>>> 88c8aaf41b2e372abf8e51db23f9843ed6220db0
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
<<<<<<< HEAD
  
=======
        <meta charset="utf-8">
>>>>>>> 88c8aaf41b2e372abf8e51db23f9843ed6220db0
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - 1213</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-4.less', 'css/type-4.css');
        ?>
        <link rel="stylesheet" href="css/type-4.css">
<<<<<<< HEAD
        <script src="js/jquery-2.1.4.min.js" ></script>
        <script src="js/bootstrap.min.js" ></script>
        <script src="js/jquery-ui.js" ></script>
        <script src="js/rangeslider.js" ></script>
        <script src="js/hover-menu.js"></script>
    </head>

    <body >
        <?php include '../1213/1213-content.php'; ?>
    </body>        

=======
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.js" type="text/javascript"></script>
        <script src="js/rangeslider.js" type="text/javascript"></script>
        <script src="js/hover-menu.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-4">
            <header>
    <div class="container">
        <a href="#">
            <img src="images/logo.PNG" alt=""/>
        </a>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <nav class="nav_menu">
            <ul class="menu"  id="top_nav">
                <li>
                    <a href="#" class="parent-menu">Home</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="parent-menu dropdown-toggle" data-toggle="dropdown">Services</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Services 1</a></li>
                        <li><a href="#">Services 2</a></li>
                        <li><a href="#">Services 3</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="parent-menu dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Pages 1</a></li>
                        <li><a href="#">Pages 2</a></li>
                        <li><a href="#">Pages 3</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="parent-menu dropdown-toggle" data-toggle="dropdown">Blog</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Blog 1</a></li>
                        <li><a href="#">Blog 2</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="parent-menu">Shop</a>
                </li>
                <li><a href="#" class="parent-menu">Contact</a></li>
            </ul>
            <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </nav>
    </div>
</header>
            <div class="banner">
    <div class="title">
        <h1>Shop</h1>
        <div class="curpage">
            <ul>
                <li>Home</li>
                <li id="sympol">&#9679;</li>
                <li><a href="#">Shop</a></li>
            </ul>
        </div>
    </div>
</div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
    <div class="left_col">
        <div class="row">
            <p>Showing 7-12 of 30 results</p>
            <div class="input-email">
                <input type="text" placeholder="Enter your mail" class="form-control">
                <a href="#"><i class="fa fa-chevron-down"></i></a>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="products">
                    <img src="images/Mobile-phone.jpg" alt=""/>
                    <h3 class="price">$49</h3>
                    <span class="name">Screen Protector 3D</span>
                    <div class="clearfix"></div>
                    <div class="add-to-cart">
                        <a href="#">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="products">
                    <img src="images/Mobile-phone.jpg" alt=""/>
                    <h3 class="price">$49</h3>
                    <span class="name">Screen Protector 3D</span>
                    <div class="clearfix"></div>
                    <div class="add-to-cart">
                        <a href="#">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="products">
                    <img src="images/Mobile-phone.jpg" alt=""/>
                    <h3 class="price">$49</h3>
                    <span class="name">Screen Protector 3D</span>
                    <div class="clearfix"></div>
                    <div class="add-to-cart">
                        <a href="#">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="products">
                    <img src="images/Mobile-phone.jpg" alt=""/>
                    <h3 class="price">$49</h3>
                    <span class="name">Screen Protector 3D</span>
                    <div class="clearfix"></div>
                    <div class="add-to-cart">
                        <a href="#">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="products">
                    <img src="images/Mobile-phone.jpg" alt=""/>
                    <h3 class="price">$49</h3>
                    <span class="name">Screen Protector 3D</span>
                    <div class="clearfix"></div>
                    <div class="add-to-cart">
                        <a href="#">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="products">
                    <img src="images/Mobile-phone.jpg" alt=""/>
                    <h3 class="price">$49</h3>
                    <span class="name">Screen Protector 3D</span>
                    <div class="clearfix"></div>
                    <div class="add-to-cart">
                        <a href="#">ADD TO CART</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-page">
            <div class="nav_page">
                <ul>
                    <li><a href="#" class="move"><i class="fa fa-chevron-left"></i></a></li>
                    <li><a href="#" class="active number-page">1</a></li>
                    <li><a href="#" class="number-page">2</a></li>
                    <li><a href="#" class="number-page">3</a></li>
                    <li><a href="#" class="number-page">4</a></li>
                    <li><a href="#" class="number-page">5</a></li>
                    <li><a href="#" class="move"><i class="fa fa-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
                        <div class="col-md-4">
    <div class="right_col">
        <h2>Category</h2>
        <div class="list-cate">

            <ul>
                <li><span id="dot">&#9679;</span> Protective glass (69)</li>
                <li><span id="dot">&#9679;</span> Mobile phone (258)</li>
                <li><span id="dot">&#9679;</span> Notebook & PC (32)</li>
                <li><span id="dot">&#9679;</span> Tabletfatback (25)</li>
                <li><span id="dot">&#9679;</span> Cover & Bamper (956)</li>
            </ul>
        </div>
        <h2>Filter by price</h2>
        <div class="filter-price">
            <div id="slider-range"></div>
            <label for="amount">Price: </label> <input type="text" id="amount"/>
            <div class="btn-filter">
                <a href="#">Filter</a>
            </div>
        </div>
        <h2>Cart</h2>
        <div class="list-product">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <a href="#">
                        <img src="images/Mobile-phone.jpg" alt=""/>
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <a href="#" class="info-product">
                        <h4 class="name">Screen Protector 3D</h4>
                        <h4 class="price">1 x $49</h4>
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <a href="#" class="remove" title="Remove">
                        <i class="fa fa-remove"></i>
                    </a>
                </div>
            </div>
            <div class="btn-viewcard">
                <a href="#">View card</a>
            </div>
        </div>
    </div>
</div>
                    </div>
                </div>
            </div>            
            <footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-logo-widget">
                        <img src="images/logo_footer.PNG" alt=""/>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="device">
                            <div class="col-md-6">
                                <i>&#9679;</i> Smartphone
                            </div>
                            <div class="col-md-6">
                                <i>&#9679;</i> Tablet
                            </div>
                            <div class="col-md-6">
                                <i>&#9679;</i> Computer
                            </div>
                            <div class="col-md-6">
                                <i>&#9679;</i> Laptop
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-contact-us">
                        <h3>CONTACT US</h3>
                        <ul>
                            <li><i class="fa fa-map-marker"></i>158 James Avenue Mexico, NY</li>
                            <li><i class="fa fa-envelope-o"></i>support@repairme.com</li>
                            <li><i class="fa fa-mobile"></i>+81 (2) 345 6789</li>
                            <li><i class="fa fa-clock-o"></i>09:00 - 18:00</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-social">
                        <h3>SOCIAL NETWORK</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i>Pinterest</a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i>Google+</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-recent">
                        <h3>RECENT POSTS</h3>
                        <span>LAPTOP REPAIR</span>
                        <p>Common Device Repair at CPR</p>
                        <hr>
                        <span>SMARTPHONE REPAIR</span>
                        <p>The History of Cell Phones</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bot">
        <div class="container">
            © Copyright 2016 RepairMe, Created with <i class="fa fa-heart"></i> by <b>MW Templates</b>
        </div>
    </div>
</footer>
        </div>        
    </body>
>>>>>>> 88c8aaf41b2e372abf8e51db23f9843ed6220db0
</html>