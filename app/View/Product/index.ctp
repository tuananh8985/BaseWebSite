 <?php 
//echo $this->Session->read('language'); die;
if($this->Session->read('language')=='vie') 
{  
  include('../Vendor/lang_vn.php');
  $duoi=null; 
} 
else { $duoi="_eg"; include('../Vendor/lang_eng.php');
 }?>
<div class="content">
	<?php if(!empty($listProduct)){ foreach ($listProduct as $key => $value){?>
						<div class="khung2">
						<div class="khung">
							<img width="315px" height="163px" src="<?php echo DOMAINAD?><?php echo $value['Product']['images']?>" alt="<?php echo $value['Product']['name']?>"class="anh"/>
							<div style="margin-left:10px">
								<div class="font"><?php echo $value['Product']['name']?></div>
								<div class="content1"><?php echo $value['Product']['content']?> </div>
								<a href="<?php echo DOMAIN?>ct-sp/<?php echo $value['Product']['id']?>" title="" >
								<div class="chitiet">
									<div style="margin-top: 7px;margin-left: -15px;">Chi tiết</div><img src="<?php echo DOMAIN?>img/play.png" style="margin-top: -19px;margin-left: 45px;"/>
								</div>
								</a>
							</div>
						</div>
						</div>
	<?php }}?>
						
					</div>



