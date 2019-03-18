 <?php
            $banner = $this->requestAction('comment/banner');
            foreach ($banner as $banner) {
                ?>

<img height="186" width="1004" src="<?php echo IMAGEAD; ?>banner/<?php echo $banner['Banner']['images']; ?>" alt=""/>
<?php
                }
    ?>  
	<script src="<?php echo DOMAIN?>js/dropdown.js"></script>
	<script src="<?php echo DOMAIN?>js/menu.js"></script>
	
					<div id="menu1">
						<ul id="menu"> 
							<a href="<?php echo DOMAIN?>" title=""><img src="<?php echo DOMAIN?>img/home.png" alt="" class="home"/></a>
							<li><a href="<?php echo DOMAIN?>" title="">TRANG CHỦ</a></li>
							<li><a href="<?php echo DOMAIN?>gioi-thieu.html" title="">GIỚI THIỆU</a></li>
							<li><a href="<?php echo DOMAIN?>san-pham.html" title="">SẢN PHẨM</a>
								<ul>
									<?php  
              $catproduct = $this->requestAction('comment/menu_sanpham');
								$i=1;
                         foreach ($catproduct as $row) {
                                $i++;
                      ?>	
									<li class="submenu"><a href="<?php echo DOMAIN ?>san-pham/<?php echo $row['Catproduct']['id'] ?>/<?php echo $row['Catproduct']['alias'] ?>" title="" ><?php echo $row['Catproduct']["name"] ?></a>
										<ul>
											<?php $menu2 = $this->requestAction('comment/menu_sanpham/' . $row['Catproduct']['id']);
                                                                foreach ($menu2 as $row1) {
                                                                               
                                                                                ?>
											<li><a href="<?php echo DOMAIN ?>san-pham/<?php echo $row1['Catproduct']['id'] ?>/<?php echo $row1['Catproduct']['alias'] ?>"><?php echo $row1['Catproduct']['name'] ?></a>
											</li>
																<?php }?>
										</ul>
									</li>
						 <?php }?>
								</ul>
							</li>
								<?php  
				$product = $this->requestAction('comment/menu_top');
				$i=1;
                foreach ($product as $row) {
				$i++;
				?>
							<li><a href="<?php echo DOMAIN ?>tin-tuc/<?php echo $row['Catalogue']['id']?>/<?php echo $row['Catalogue']['alias']?>" title="<?php echo $row['Catalogue']["name"] ?>"><?php echo $row['Catalogue']["name"] ?></a></li>
							
				<?php }?>
							<li><a href="<?php echo DOMAIN?>lien-he.html" title="">LIÊN HỆ</a></li>
						</ul>
					</div>
					<script type="text/javascript">
var dropdown=new TINY.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>