<header class="page-child">
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
    <div id="menu-primary" class="menu" style="background: url(<?php echo DOMAIN ?>resources/upload/images/a.html);">
        <div class="container">
            <div class="row row-top" style="display: none">
                <div class="col-sm-8">
                    <div class="slogan">
                        Trung tâm nha khoa thẩm mỹ & implant
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="other-top">
                        <a href="index.html">
                        <img src="<?php echo DOMAIN ?>resources/skin/frontend/images/vi.png" alt="tiếng việt">
                        </a>
                        <a href="index.html">
                        <img src="<?php echo DOMAIN ?>resources/skin/frontend/images/en.png" alt="tiếng anh">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row row-menu">
                <div class="col-sm-10 col-menu">
                    <div class="nav">
                        <ul>
                            <li><a class="" href="index.html">
                                <span class="icon_menu"><img src="<?php echo DOMAIN ?>resources/skin/frontend/img/icon_home.png"></span>
                                Trang chủ                                    </a>
                            </li>
                            <li>
                                <a class="" href="gioi-thieu.html"
                                    title="Giới thiệu">
                                <span class="icon_menu"><img src="<?php echo DOMAIN ?>resources/upload/images/icon/icon_about.png"></span>
                                Giới thiệu                                            </a>
                                <div class="togger-menu-sub"><i class="fa fa-chevron-down"
                                    aria-hidden="true"></i></div>
                                <ul class="sub-menu">
                                    <li><a href="gioi-thieu-chung.html"
                                        title="Giới thiệu chung">Giới thiệu chung</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="" href="dich-vu.html"
                                    title="Dịch vụ">
                                <span class="icon_menu"><img src="<?php echo DOMAIN ?>resources/upload/images/icon/icon_ser.png"></span>
                                Dịch vụ                                            </a>
                                <div class="togger-menu-sub"><i class="fa fa-chevron-down"
                                    aria-hidden="true"></i></div>
                                <ul class="sub-menu">
                                    <li><a href="nieng-rang-khong-mac-cai.html"
                                        title="Niềng răng không mắc cài">Niềng răng không mắc cài</a>
                                    </li>
                                    <li><a href="rang-toan-su-cao-cap.html"
                                        title="Răng toàn sứ cao cấp">Răng toàn sứ cao cấp</a>
                                    </li>
                                    <li><a href="cam-ghep-implant.html"
                                        title="Cắm ghép Implant">Cắm ghép Implant</a>
                                    </li>
                                    <li><a href="tay-trang-rang-laser-whitening.html"
                                        title="Tẩy trắng răng (Laser Whitening)">Tẩy trắng răng (Laser Whitening)</a>
                                    </li>
                                    <li><a href="cac-dich-vu-tieu-bieu-khac.html"
                                        title="Các dịch vụ tiêu biểu khác">Các dịch vụ tiêu biểu khác</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="" href="bang-gia.html"
                                    title="Bảng giá">
                                <span class="icon_menu"><img src="<?php echo DOMAIN ?>resources/upload/images/icon/icon_bg.png"></span>
                                Bảng giá                                            </a>
                            </li>
                            <li>
                                <a class="" href="khach-hang.html"
                                    title="Khách hàng">
                                <span class="icon_menu"><img src="<?php echo DOMAIN ?>resources/upload/images/icon/icon_cus.png"></span>
                                Khách hàng                                            </a>
                            </li>
                            <li>
                                <a class="" href="tin-tuc.html"
                                    title="Tin tức">
                                <span class="icon_menu"><img src="<?php echo DOMAIN ?>resources/upload/images/icon/icon_news.png"></span>
                                Tin tức                                            </a>
                            </li>
                            <li>
                                <a class="active" href="lien-he.html"
                                    title="Liên hệ">
                                <span class="icon_menu"><img src="<?php echo DOMAIN ?>resources/upload/images/icon/icon_cont.png"></span>
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