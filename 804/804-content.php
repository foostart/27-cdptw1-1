<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-804">
        <div class="container">
            <div class="row">	

                <div class="col-xs-6 col-md-9 col-sm-9 col-lg-8">

                    <div class="cardbox shadow-lg bg-white">

                        <div class="cardbox-heading">
                            <!-- START dropdown-->
                            <div class="dropdown float-right">
                                <button class="btn btn-flat btn-flat-icon" type="button" data-toggle="dropdown" aria-expanded="false">
                                    <em class="fa fa-ellipsis-h"></em>
                                </button>
                                <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" href="#">Hide post</a>
                                    <a class="dropdown-item" href="#">Stop following</a>
                                    <a class="dropdown-item" href="#">Report</a>
                                </div>
                            </div><!--/ dropdown -->
                            <div class="media m-0">
                                <div class="d-flex mr-3">
                                    <a href=""><img class="img-fluid rounded-circle" src="images/4.jpg" alt="User"></a>
                                </div>
                                <div class="media-body">
                                    <p class="m-0">Benjamin Robinson</p>
                                    <small><span><i class="icon ion-md-pin"></i> Nairobi, Kenya</span></small>
                                    <small><span><i class="icon ion-md-time"></i> 10 hours ago</span></small>
                                </div>
                            </div><!--/ media -->
                        </div><!--/ cardbox-heading -->

                        <div class="cardbox-item">
                            <img class="img-fluid" src="images/7.jpg" alt="Image">
                        </div><!--/ cardbox-item -->
                        <div class="cardbox-base">
                            <ul class="float-right">
                                <li><a><i class="fa fa-comments"></i></a></li>
                                <li><a><em class="mr-5">12</em></a></li>
                                <li><a><i class="fa fa-share-alt"></i></a></li>
                                <li><a><em class="mr-3">03</em></a></li>
                            </ul>
                            <ul>
                                <li><a><i class="fa fa-thumbs-up"></i></a></li>
                                <li><a href="#"><img src="images/3.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                                <li><a href="#"><img src="images/1.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                                <li><a href="#"><img src="images/5.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                                <li><a href="#"><img src="images/2.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                                <li><a><span>242 Likes</span></a></li>
                            </ul>			   
                        </div><!--/ cardbox-base -->
                        <div class="cardbox-comments">
                            <span class="comment-avatar float-left">
                                <a href=""><img class="rounded-circle" src="images/6.jpg" alt="..."></a>                            
                            </span>
                            <div class="search">
                                <input placeholder="Write a comment" type="text">
                                <button><i class="fa fa-camera"></i></button>
                            </div><!--/. Search -->
                        </div><!--/ cardbox-like -->			  

                    </div><!--/ cardbox -->

                </div><!--/ col-lg-6 -->	
               <div class="col-xs-6 col-md-3 col-sm-3 col-lg-4">
                    <div class="shadow-lg p-4 mb-2 bg-white author">
                        <a href="#">Get more from themashabrand.com</a>
                        <p>Bootstrap 4.1.0</p>
                    </div>
                </div><!--/ col-lg-3 -->
            </div><!--/ row -->
        </div><!--/ container -->
</div>
