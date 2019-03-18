
<div class="gioithieu">
						<div class="doitac1"><?php echo $typeName['Catproduct']["name"]; ?></div>
						<div class="gioithieu1">

							<div class="left">
								<img width="337" height="190" src="<?php echo DOMAINAD?><?php echo $detailNews['Product']['images'] ?>" alt="<?php echo $detailNews['Product']['name']?>" style="float:left"/>
							</div>
							<div class="gioithieu-right">
							<div class="gioithieu12">
							<span style="font-weight:bold">
								<p style="font-weight:bold;">Tên sản phẩm:&nbsp;<?php echo $detailNews['Product']['name']?></p></br>
								<p style="font-weight:bold;">Mã sản phẩm :&nbsp;<?php echo $detailNews['Product']['code']?></p></br>
								<p style="text-align:left;font-weight:bold;color:red;">Giá :&nbsp;<?php echo number_format($detailNews['Product']['price']);?>&nbsp; VNĐ </p>
							</span></br></br>
							<span style="color:#545454;line-height: 15px;" >
								<?php echo $detailNews['Product']['content']?>
							</span>
							</div>
							</div>

 


      
	
		
	</div>
</div>

<h2>Sản phẩm liên quan</h2>
	<div class="content">
	<?php  foreach ($listProduct as $row1){?>
						<div class="khung2">
						<div class="khung">
						<a  title="<?php echo $row1['Product']["name"]; ?>" alt="<?php echo $row1['Product']["name"]; ?>" href="<?php echo DOMAIN ?>ct-sp/<?php echo $row1['Product']['id'] ?>/<?php echo $row1['Product']['alias'].'.html' ?>">
							<img width="315px" height="163px" src="<?php echo DOMAINAD ?>
<?php echo $row1['Product']['images'] ?>" alt="<?php echo $row1['Product']["name"]; ?>"class="anh"/>
							<div style="margin-left:10px;text-algin">
								<div class="font1"><?php echo $row1['Product']["name"]; ?></div>
								<div class="content2">
								Giá :  <?php echo number_format($row1['Product']['price']);?>&nbsp; VNĐ
								</div>
								
							</div>
							</a>
						</div>
						</div>
	<?php }?>
						
					</div>
	
        <div class="pt">
            <div class="pt-pagi">
<?php echo $this->Paginator->numbers(); ?>
            </div><!-- End pt-pagi-->
        </div><!-- End pt-->	
		
		


  