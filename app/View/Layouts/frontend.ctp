<!DOCTYPE html>
<html lang="en">
    <!-- Mirrored from demo3.skyvietnam.vn/nhakhoahoanmy/lien-he by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 06:17:22 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- /Added by HTTrack -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="content-language" content="vi">
        <meta name="revisit-after" content="1 days">
        <meta name="robots" content="noodp,index,follow">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="icon" href="<?php echo DOMAIN ?>resources/upload/images/logo(1).png" type="image/x-icon"/>
        <title>NHAKHOAHOANMY</title>
        <meta name="description" content="ss"/>
        <meta name="keywords" content="ss"/>
        <!-- Bootstrap core CSS -->
        <base >
        <link href="<?php echo DOMAIN ?>resources/skin/frontend/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="<?php echo DOMAIN ?>resources/skin/frontend/css/owl.carousel.css" rel="stylesheet"/>
        <link href="<?php echo DOMAIN ?>resources/skin/frontend/css/owl.theme.css" rel="stylesheet"/>
        <link href="<?php echo DOMAIN ?>resources/skin/frontend/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo DOMAIN ?>resources/skin/frontend/css/style.css" rel="stylesheet"/>
        <link href="<?php echo DOMAIN ?>resources/skin/frontend/css/responsive.css" rel="stylesheet"/>
        <link href="<?php echo DOMAIN ?>resources/skin/frontend/css/theme-default.css" rel="stylesheet"/>
        <link href="<?php echo DOMAIN ?>resources/skin/frontend/css/datepicker.css" rel="stylesheet"/>
        <script src="<?php echo DOMAIN ?>resources/skin/frontend/js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="<?php echo DOMAIN ?>resources/skin/frontend/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo DOMAIN ?>resources/skin/frontend/js/owl.carousel.js" type="text/javascript"></script>
        <script src="<?php echo DOMAIN ?>resources/skin/frontend/js/jquery.form-validator.min.js" type="text/javascript"></script>
        <script src="<?php echo DOMAIN ?>resources/skin/frontend/js/custom.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo DOMAIN ?>resources/skin/frontend/js/jquery.scrollbar.js"></script>
        <script type="text/javascript" src="<?php echo DOMAIN ?>resources/skin/frontend/js/datepicker.js"></script>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "../../connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=160758074284044";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </head>
    <body>
        <?php echo $this->element('top_header') ?>
        <div class="main-header">
            <?php echo $this->element('frontend/menu') ?>
            <?php echo $this->element('frontend/banner') ?>
        </div>

        <div class="container">
            <div class="drection">
                <div class="link">
                    <span><a href="index.html">Trang chủ</a></span>
                    <span class="divider"></span>
                    <span class="active">Liên hệ</span>
                </div>
            </div>
        </div>
        <div class="body-wap">
            <section class="body-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <?php echo $this->element('frontend/sidebar_dichvu') ?>
                            <?php echo $this->element('frontend/sidebar_tintuc') ?>
                        </div>
                        <div class="col-sm-9">
                            <?php echo $this->element('frontend/main-content') ?>
                        </div>
                    </div>
                </div>
        </div>
        </section>
        </div>
        <?php echo $this->element('frontend/footer') ?>
        <!--Included Plugins Javascript-->
        <script src="<?php echo DOMAIN ?>resources/skin/frontend/js/wow.min.js"></script>
        <a href="#0" class="cd-top">Top</a>
        <script>
            jQuery(document).ready(function($){
                // browser window scroll (in pixels) after which the "back to top" link is shown
                var offset = 300,
                    //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
                    offset_opacity = 1200,
                    //duration of the top scrolling animation (in ms)
                    scroll_top_duration = 700,
                    //grab the "back to top" link
                    $back_to_top = $('.cd-top');

                //hide or show the "back to top" link
                $(window).scroll(function(){
                    ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
                    if( $(this).scrollTop() > offset_opacity ) {
                        $back_to_top.addClass('cd-fade-out');
                    }
                });

                //smooth scroll to top
                $back_to_top.on('click', function(event){
                    event.preventDefault();
                    $('body,html').animate({
                            scrollTop: 0 ,
                        }, scroll_top_duration
                    );
                });

            });
        </script>
    </body>
    <!-- Mirrored from demo3.skyvietnam.vn/nhakhoahoanmy/lien-he by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 06:17:22 GMT -->
</html>
