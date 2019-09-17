<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';   
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1195">
    <header>
        <nav class="navbar navbar-inverse ">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a href="#">
                    <img src="images/logo.PNG" alt=""/>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">

                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Services 1</a></li>
                            <li><a href="#">Services 2</a></li>
                            <li><a href="#">Services 3</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pages<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Pages 1</a></li>
                            <li><a href="#">Pages 2</a></li>
                            <li><a href="#">Pages 3</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Blog 1</a></li>
                            <li><a href="#">Blog 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Shop</a></li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    </header>
    <div class="banner">
        <div class="title">
            <h1>Shop</h1>
            <div class="curpage">
                <ul >
                    <li style="color: #4acea9">Home</li>
                    <li id="sympol">&#9679;</li>
                    <li ><a href="#" style="color: #4acea9">Shop</a></li>
                </ul>
            </div>
        </div>w
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
