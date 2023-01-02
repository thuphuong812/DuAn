<div class="row" id="all_product"><?php
									foreach ($all_product_hot as $key => $products) {
                                        $lastid=$products['id_product'];
									?>

		<div class="col-lg-3 col-md-4 col-sm-6"  id="demo1">
			<form action="<?php echo BASE_URL ?>cart/addtocart" method="post">
				<input type="hidden" value="<?php echo $products['id_product'] ?>" name="product_id">
				<input type="hidden" value="<?php echo $products['title_product'] ?>" name="product_title">
				<input type="hidden" value="<?php echo $products['image_product'] ?>" name="product_image">
				<?php
										if ($products['discount'] == 0) { ?>
					<input type="hidden" value="<?php echo $products['price_product'] ?>" name="product_price">
				<?php
										}
				?>
				<?php
										if ($products['discount'] == 1) { ?>
					<input type="hidden" value="<?php echo $products['price_product'] - ($products['price_product'] / 100 * $products['price_discount']) ?>" name="product_price">

				<?php
										}
				?>
				<?php
										if ($products['discount'] == 2) { ?>
					<input type="hidden" value="<?php echo $products['price_product'] - $products['price_discount'] ?>" name="product_price">
				<?php
										}
				?>

				<input type="hidden" value="1" name="product_quantity">
				<input type="hidden" value="<?php echo $products['quantity_product'] ?>" name="quantity_max">
				<div class="single_product">
					<div class="product_thumb">
						<a href="<?php echo BASE_URL ?>sanpham/detail_product/<?php echo $products['id_product'] ?>"><img src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $products['image_product'] ?>" alt="" width="252px" height="367px"></a>
						<?php
										if ($products['product_hot'] == 0) {
						?>

							<div class="img_icone">
								<img src="<?php echo BASE_URL ?>public\frontend\assets\img\cart\span-new.png" alt="">
							</div>
						<?php
										} else {
						?>
							<div class="hot_img">
								<img src="<?php echo BASE_URL ?>public\frontend\assets\img\cart\span-hot.png" alt="">
							</div>
						<?php
										}
						?>

						<?php

										if ($products['quantity_product'] > 0) {
						?>

							<div>

								<input type="submit" class="product_action" value="Thêm vào giỏ hàng" name="addcart">
							</div>
						<?php
										} ?>
					</div>
					<div class="product_content">
						<?php
										if ($products['quantity_product'] > 0) {
											if ($products['discount'] == 0) { ?>
								<span class="product_price"><?php echo number_format($products['price_product'], 0, ',', '.') . ' VNĐ' ?></span>
							<?php
											}
							?>
							<?php
											if ($products['discount'] == 1) { ?>
								<span class="product_price"><del><?php echo number_format($products['price_product'], 0, ',', '.') . ' VNĐ' ?></del></span>
								<span class="product_price" style="color: red;"> <?php echo number_format($products['price_product'] - ($products['price_product'] / 100 * $products['price_discount']), 0, ',', '.') . ' VNĐ'; ?></span>
							<?php
											}
							?>
							<?php
											if ($products['discount'] == 2) { ?>
								<span class="product_price"><del><?php echo number_format($products['price_product'], 0, ',', '.') . ' VNĐ' ?></del></span>
								<span class="product_price" style="color: red;"> <?php echo number_format($products['price_product'] - $products['price_discount'], 0, ',', '.') . ' VNĐ' ?></span>
							<?php
											}
							?>
						<?php
										} else {

						?>
							<span class="product_price">Hết hàng</span>
						<?php
										}
						?>

						<h3 class="product_title"><a href="single-product.html"><?php echo $products['title_product'] ?></a></h3>
					</div>
					<div class="product_info" >
						<ul>

							<li><a href="<?php echo BASE_URL ?>sanpham/detail_product/<?php echo $products['id_product'] ?>">Xem thêm</a></li>
						</ul>
					</div>
				</div>
			</form>
		</div>

	<?php
									}
	?>
</div>




</div>
							


<!--blog area end-->

<!--brand logo strat-->

<!--brand logo end-->
<br>
<!--pos home section end-->
</div>
<!--pos page inner end-->
</div>
</div>
</div>