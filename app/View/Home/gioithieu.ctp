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