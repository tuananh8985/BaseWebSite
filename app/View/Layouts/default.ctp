<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="content-language" content="vi">
        <meta name="revisit-after" content="1 days">
        <meta name="robots" content="noodp,index,follow">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="icon" href="upload/images/logo(1).png" type="image/x-icon"/>
        <title>NHAKHOAHOANMY</title>
        <meta name="description" content="ss"/>
        <meta name="keywords" content="ss"/>
        <!-- Bootstrap core CSS -->
        <base href="http://demo3.skyvietnam.vn/nhakhoahoanmy/">
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
            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=160758074284044";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </head>
    <body>
        <?php echo $this->element('top_header') ?>
        <div class="main-header">
            <?php echo $this->element('menu') ?>
            <?php echo $this->element('slideshow') ?>
        </div>
        <div class="list_cate_home" style="display: none">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>
        <div class="body-wap">
            <?php echo $this->element('home/tin_noi_bat') ?>
            <?php echo $this->element('home/tin_tieu_bieu') ?>
            <div class="box_cus">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php echo $this->element('home/trai_nghiem') ?>
                        </div>
                        <div class="col-sm-6">
                            <?php echo $this->element('home/dang_ky_tu_van') ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php echo $this->element('home/dich_vu_khac') ?>

        </div>
        <?php echo $this->element('home/doi_tac') ?>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function () {
                jQuery(".widget-tabproduct-2-template:not(:first)").hide(); // Ẩn toàn bộ nội dung của tab
                jQuery("#uynh-widget-tabproduct-2-template ul li:first").addClass("active")
                jQuery(".widget-tabproduct-2-template:first").find(".list_product_item").addClass('list_product_item_slide');
                jQuery("#uynh-widget-tabproduct-2-template ul li ").click(function () { //Khai báo sự kiện khi click vào một tab nào đó
                    var activeTab = jQuery(this).children('a').attr("alt");
                    jQuery("#uynh-widget-tabproduct-2-template ul li ").removeClass("active");
                    jQuery(".widget-tabproduct-2-template").removeClass('list_product_item_slide');
                    jQuery(activeTab).find(".list_product_item").addClass('list_product_item_slide');
                    jQuery(this).addClass("active");
                    jQuery(".widget-tabproduct-2-template").hide(200);
                    jQuery(activeTab).stop().show(200);
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                jQuery('.scrollbar-light').scrollbar();
            })
        </script>
        <?php echo $this->element('home/footer') ?>

        <div class="copy_right">
            <div class="container">
                Copyright © 2017 skyvietnam.com.vn
            </div>
        </div>
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
</html>