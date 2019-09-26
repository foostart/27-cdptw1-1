<?php
// include '../config.php';

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1215">
    <div class="container bg">
        <div class="row">
            <!--SWIPER SLIDE-->
            <div id="swiper" class="swiper-container swiper-container-horizontal swiper-container-fade">
                <div class="swiper-wrapper">
                    <!--SLIDE-CAPTION-->
                    <div class="swiper-slide" data-swiper-autoplay="2000">
                        <a>
                            <img src="<?php echo $url_path ?>/images/banner_data-13.jpg"  alt="anh13">
                            <div class="slider_caption text ">
                                <h2>Living</h2>
                                <h3>Beautiful Home</h3>
                            </div>
                        </a>
                    </div>
                    <!--/END-SLIDE-->
                    <!--SLIDE-CAPTION-->
                    <div class="swiper-slide" data-swiper-autoplay="2000">
                        <a>
                            <img src="<?php echo $url_path ?>/images/banner_data-14.jpg"  alt="anh14">
                            <div class="slider_caption text ">
                                <h2>Living</h2>
                                <h3>Beautiful Home</h3>
                            </div>
                        </a>
                    </div>
                    <!--/END-SLIDE-->
                    <!--SLIDE-CAPTION-->
                    <div class="swiper-slide" data-swiper-autoplay="2000">
                        <a>
                            <img src="<?php echo $url_path ?>/images/banner_data-13.jpg" title="" alt="">
                            <div class="slider_caption text ">
                                <h2>Living</h2>
                                <h3>Beautiful Home</h3>
                            </div>
                        </a>
                    </div>
                    <!--/END-SLIDE-->
                </div>
                <!--BUTTON PREV-->
                <div id="swiper_btn_prev" class="swiper_btn">
                    <i class="fa fa-angle-left"></i>
                </div>
                <!--BUTTON NEXT-->
                <div id="swiper_btn_next" class="swiper_btn">
                    <i class="fa fa-angle-right"></i>
                </div>
                <!--BUTTON DOWN-->
                <div id="swiper_btn_down" class="swiper_btn">
                    <i class="fa fa-angle-down"></i>
                </div>
            </div>
            <!--/SWIPER SLIDE-->
            <script>
                var swiper = new Swiper('.swiper-container', {
                    navigation: {
                        nextEl: '#swiper_btn_next',
                        prevEl: '#swiper_btn_prev',
                    },

                });
            </script>
        </div>
    </div>
</div>
