<header class="">
<script>
    $(document).ready(function () {
        $('.togger-menu').on('click', function () {
            $('#menu-primary').toggle();
        })
        $('.togger-menu-sub').on('click', function () {
            $('#sub-menu').toggle();
        })
    })
</script>
<div class="togger-menu"><i class="fa fa-list"></i>
</div>
<div id="menu-primary" class="menu" style="background: url(upload/images/a.jpg);">
    <div class="container">
        <div class="row row-top" style="display: none">
            <div class="col-sm-8">
                <div class="slogan">
                    Trung tâm nha khoa thẩm mỹ & implant
                </div>
            </div>
            <div class="col-sm-4">
                <div class="other-top">
                    <a href="http://demo3.skyvietnam.vn/nhakhoahoanmy/language-vi">
                    <img src="<?php echo DOMAIN ?>resources/skin/frontend/images/vi.png" alt="tiếng việt">
                    </a>
                    <a href="http://demo3.skyvietnam.vn/nhakhoahoanmy/language-en">
                    <img src="<?php echo DOMAIN ?>resources/skin/frontend/images/en.png" alt="tiếng anh">
                    </a>
                </div>
            </div>
        </div>
        <div class="row row-menu">
            <div class="col-sm-10 col-menu">
                <div class="nav">
                    <ul>
                        <li><a class="active" href="http://demo3.skyvietnam.vn/nhakhoahoanmy/">
                            <span class="icon_menu"><img src="<?php echo DOMAIN ?>resources/skin/frontend/img/icon_home.png"></span>
                            Trang chủ                                    </a>
                        </li>
                        <li>
                            <a class="" href="http://demo3.skyvietnam.vn/nhakhoahoanmy/gioi-thieu"
                                title="Giới thiệu">
                            <span class="icon_menu"><img src="upload/images/icon/icon_about.png"></span>
                            Giới thiệu                                            </a>
                            <div class="togger-menu-sub"><i class="fa fa-chevron-down"
                                aria-hidden="true"></i></div>
                            <ul class="sub-menu">
                                <li><a href="http://demo3.skyvietnam.vn/nhakhoahoanmy/gioi-thieu-chung"
                                    title="Giới thiệu chung">Giới thiệu chung</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="" href="http://demo3.skyvietnam.vn/nhakhoahoanmy/dich-vu"
                                title="Dịch vụ">
                            <span class="icon_menu"><img src="upload/images/icon/icon_ser.png"></span>
                            Dịch vụ                                            </a>
                            <div class="togger-menu-sub"><i class="fa fa-chevron-down"
                                aria-hidden="true"></i></div>
                            <ul class="sub-menu">
                                <li><a href="http://demo3.skyvietnam.vn/nhakhoahoanmy/nieng-rang-khong-mac-cai"
                                    title="Niềng răng không mắc cài">Niềng răng không mắc cài</a>
                                </li>
                                <li><a href="http://demo3.skyvietnam.vn/nhakhoahoanmy/rang-toan-su-cao-cap"
                                    title="Răng toàn sứ cao cấp">Răng toàn sứ cao cấp</a>
                                </li>
                                <li><a href="http://demo3.skyvietnam.vn/nhakhoahoanmy/cam-ghep-implant"
                                    title="Cắm ghép Implant">Cắm ghép Implant</a>
                                </li>
                                <li><a href="http://demo3.skyvietnam.vn/nhakhoahoanmy/tay-trang-rang-laser-whitening"
                                    title="Tẩy trắng răng (Laser Whitening)">Tẩy trắng răng (Laser Whitening)</a>
                                </li>
                                <li><a href="http://demo3.skyvietnam.vn/nhakhoahoanmy/cac-dich-vu-tieu-bieu-khac"
                                    title="Các dịch vụ tiêu biểu khác">Các dịch vụ tiêu biểu khác</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="" href="http://demo3.skyvietnam.vn/nhakhoahoanmy/bang-gia"
                                title="Bảng giá">
                            <span class="icon_menu"><img src="upload/images/icon/icon_bg.png"></span>
                            Bảng giá                                            </a>
                        </li>
                        <li>
                            <a class="" href="http://demo3.skyvietnam.vn/nhakhoahoanmy/khach-hang"
                                title="Khách hàng">
                            <span class="icon_menu"><img src="upload/images/icon/icon_cus.png"></span>
                            Khách hàng                                            </a>
                        </li>
                        <li>
                            <a class="" href="http://demo3.skyvietnam.vn/nhakhoahoanmy/tin-tuc"
                                title="Tin tức">
                            <span class="icon_menu"><img src="upload/images/icon/icon_news.png"></span>
                            Tin tức                                            </a>
                        </li>
                        <li>
                            <a class="" href="http://demo3.skyvietnam.vn/nhakhoahoanmy/lien-he"
                                title="Liên hệ">
                            <span class="icon_menu"><img src="upload/images/icon/icon_cont.png"></span>
                            Liên hệ                                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="search">
                    <form method="get" class="td-search-form"
                        action="http://demo3.skyvietnam.vn/nhakhoahoanmy/tim-kiem">
                        <div role="search" class="td-head-form-search-wrap">
                            <input value="" name="key"  type="text" placeholder="Search">
                            <button class="btn-submit" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</header>