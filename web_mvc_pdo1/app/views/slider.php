
					<!--pos home section-->
					<div class=" pos_home_section">
						<div class="row pos_home">
						
							<div class="col-lg-12 col-md-12">
								<!--banner slider start-->
								<div class="banner_slider slider_1">
							
									<div class="slider_active owl-carousel">
									<?php
								
								foreach($slider as $key=>$values){
								?>
										<div class="single_slider" style="background-image: url(<?php echo BASE_URL ?>public/uploads/slider/<?php echo $values['image_slider'] ?>">
											<div class="slider_content">
												<div class="slider_content_inner">  
													<h1><?php echo $values['title_slider'] ?></h1>
													<p><?php echo $values['desc_slider'] ?> </p>
													<a href="<?php echo BASE_URL ?>sanpham/tatcatruyen">Mua sắm ngay</a>
												</div>     
											</div>    
										</div>
										<?php
								}
										?>
									</div>
								</div> 
								<!--banner slider start-->




							</div>
						</div>
