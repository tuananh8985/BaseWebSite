<div class="gioithieu">
						<div class="doitac1"><?php echo $typeName['Catalogue']['name']?></div>
						<?php foreach($listNews as $value){?>
						<div class="gioithieu1">
							<div class="left">
								<a href="<?php echo DOMAIN ?>ct-tin/<?php echo $value['News']['id']?>"><img width="337" height="190" src="<?php echo DOMAINAD;?>img/news/<?php echo $value['News']['images']?>" alt="<?php echo $value['News']['name']?>" style="float:left"/></a>
							</div>
							<div class="gioithieu-right">
								<div class="gioithieu12">
									<a href="<?php echo DOMAIN ?>ct-tin/<?php echo $value['News']['id']?>"><span style="font-weight:bold"><?php echo $value['News']['name']?></span></a></br></br>
									<span style="color:#545454;line-height: 15px;" >
									</span>
								</div>
							</div>	
										
									
						</div>
						<?php }?>
								
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