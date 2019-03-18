<div class="content">
	<?php if(!empty($sanpham)){ foreach ($sanpham as $key => $value){?>
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
					<div>
					<?php
        echo $this->Paginator->first('« Đầu ', null, null, array('class' => 'disabled'));     
        echo $this->Paginator->prev('« Trước ', null, null, array('class' => 'disabled')); 
        echo $this->Paginator->numbers()." ";
        echo $this->Paginator->next(' Tiếp »', null, null, array('class' => 'disabled')); 
        echo $this->Paginator->last('« Cuối ', null, null, array('class' => 'disabled')); 
    ?>	
	</div>
					<div class="gioithieu">
						<div class="doitac1">GIỚI THIỆU</div>
						<?php foreach($gt as $value){?>
						<div class="gioithieu1">
							<div class="left">
								<img width="337" height="190" src="<?php echo DOMAINAD?>img/post/<?php echo $value['Post']['images']?>" alt="<?php echo $value['Post']['name']?>" style="float:left"/>
							</div>
							<div class="gioithieu-right">
							<div class="gioithieu12">
							<span style="font-weight:bold"><?php echo $value['Post']['name']?></span></br></br>
							<span style="color:#545454;line-height: 15px;" >
							<?php echo $value['Post']['content']?>
							</span>
							</div>
							</div>
						</div>
						<?php }?>
					</div>