<?php
$setActive = $this->request->url;
$setActive = explode("/", $setActive);
$setActive = $setActive[0];
$tabindex = "";
?>
<script type="text/javascript">
    ddaccordion.init({
        headerclass: "submenuheader",
        contentclass: "submenu",
        revealtype: "click",
        mouseoverdelay: 200,
        collapseprev: true,
        defaultexpanded: [<?php echo $tabindex; ?>],
        onemustopen: false,
        animatedefault: false,
        persiststate: false,
        toggleclass: ["", ""],
        animatespeed: "fast",
        oninit:function(headers, expandedindices){
            //do nothing
        },
        onopenclose:function(header, index, state, isuseractivated){
            //do nothing
        }
    })
</script>

<div id="sidebar">
    <div id="sidebar-wrapper">
        <h1 id="sidebar-title"><a href="#"></a></h1>
        <a href="#"><img id="logo" width="80px" src="<?php echo DOMAINAD ?>images/logo_admin.png" alt="Design by Quảng cáo vip" /></a>
        <div id="profile-links"> Xin chào, <a href="#" title="Edit your profile"><?php echo $this->Session->read('name'); ?></a><br />
            <br />
            <a href="<?php echo DOMAIN; ?>" title="View the Site" target="_blank">Xem trang chủ</a> | <a href="<?php echo DOMAINAD ?>login/logout" title="Sign Out">Thoát</a> </div>
        <div id="list">
            <ul id="main-nav">
                <li id="arrayorder_1"> <a href="<?php echo DOMAINAD ?>home" class="nav-top-item no-submenu"> Trang chủ </a> </li>
             	 <li id="arrayorder_3"> <a href="#" class="nav-top-item submenuheader">Quản lý danh mục</a>
                    <div class="submenu">
                        <ul>
                        <li><a href="<?php echo DOMAINAD ?>catalogues" <?php

?>>Danh mục tin tức</a></li>
                            <li><a href="<?php echo DOMAINAD ?>catproducts" <?php

?>>Danh mục sản phẩm</a></li>

                        </ul>
                    </div>
                </li>


  		         	 <li id="arrayorder_4"> <a href="<?php echo DOMAINAD ?>news" class="nav-top-item">Quản lý Tin Tức</a> </li>

					 <li id="arrayorder_4"> <a href="<?php echo DOMAINAD ?>products" class="nav-top-item">Quản lý Sản phẩm</a> </li>


  <li id="arrayorder_7"> <a href="<?php echo DOMAINAD ?>posts" class="nav-top-item">Quản lý danh sách tin</a> </li>
  
				  <li id="arrayorder_7"> <a href="<?php echo DOMAINAD ?>banners" class="nav-top-item">Quản lý Banner</a> </li>
                  
		<!--<li id="arrayorder_7"> <a href="<?php echo DOMAINAD ?>supports" class="nav-top-item">Quản lý hỗ trợ trực tuyến</a> </li>  -->
        
        
        <li id="arrayorder_8"> <a href="<?php echo DOMAINAD ?>slideshows" class="nav-top-item">Quản lý Slideshow</a> </li>
        
        
        
        <li id="arrayorder_7"> <a href="<?php echo DOMAINAD ?>advertisements" class="nav-top-item">Quản lý Quảng Cáo</a> </li>
        <!-- <li id="arrayorder_7"> <a href="<?php echo DOMAINAD ?>contacts" class="nav-top-item">Quản lý Danh sách học viên đăng ký học Online</a> </li> -->
        <!-- <li id="arrayorder_7"> <a href="<?php echo DOMAINAD ?>email" class="nav-top-item">Quản lý Email nhận thông tin</a> </li> -->
        <!-- <li id="arrayorder_7"> <a href="<?php echo DOMAINAD ?>emaildk" class="nav-top-item">Quản lý câu hỏi</a> </li> -->
        <li id="arrayorder_7"> <a href="<?php echo DOMAINAD ?>image" class="nav-top-item">Quản lý ảnh</a> </li>
        <li id="arrayorder_7"> <a href="<?php echo DOMAINAD ?>listimage" class="nav-top-item">Quản lý danh mục ảnh</a> </li>
        <li id="arrayorder_7"> <a href="<?php echo DOMAINAD ?>slideshows" class="nav-top-item">Quản lý Slideshow</a> </li>
        <li id="arrayorder_7"> <a href="<?php echo DOMAINAD ?>supports" class="nav-top-item">Quản lý hộ trợ trực tuyến</a> </li>
        <li id="arrayorder_4"> <a href="<?php echo DOMAINAD ?>settings" class="nav-top-item">Cấu hình Website</a> </li>
 <li id="arrayorder_7"> <a href="<?php echo DOMAINAD ?>administrators" class="nav-top-item">Quản lý Tài khoản</a> </li>


            </ul>
        </div>
    </div>
</div>


<style type='text/css'>
#sidebar #main-nav li a.nav-top-item {
    text-align: left !important;
}

#sidebar #main-nav ul li a{
    text-align: left !important;
}
</style>
