<div class="doitac1">ĐỐI TÁC</div>
						<div class="slidedt">
							<span class="prev1"><img src="<?php echo DOMAIN?>img/pve.png"/></span>
							<div class="V">
												
								<div id="V1">
									 <?php
									$doitac = $this->requestAction('comment/adv_doitac');
									foreach ($doitac as $row) {
               
									?>				
									<div class="thumbnail adv" style="">
										<div style="margin-top: 40px;">
										<a href="<?php echo $row['Slideshow']['link'] ?>" title="<?php echo $row['Slideshow']['name'] ?>">
											<img width="160" title="<?php echo $row['Slideshow']['name'] ?>" src="<?php echo DOMAINAD . $row['Slideshow']['images'] ?>" alt="<?php echo $row['Slideshow']['name'] ?>" style="margin-bottom:10px"/>
											<div>
											<span style="color:black">MỄ ĐÌNH - Cicenco 3</span></br>
										<span style="color:#8b8b8b">( 9/2010 - 10/2014 )</span></div>
										</a>
										</div>
									</div>
									 <?php
                    
										}
										?> 
								</div>
							</div>
							
							<span class="next1"><img src="<?php echo DOMAIN?>img/next.png"/></span>
						</div>