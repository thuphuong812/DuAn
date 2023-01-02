<!--new product area start-->
<div class="new_product_area product_page">
	<div class="row">
		<div class="col-12">
			<div class="block_title">
				<h3>SẢN PHẨM ĐỀ CỬ MỚI NHẤT</h3>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="single_p_active owl-carousel">
			<?php
			foreach ($product_new as $key => $values) {

			?>
				<form action="<?php echo BASE_URL ?>cart/addtocart" method="post">
					<input type="hidden" value="<?php echo $values['id_product'] ?>" name="product_id">
					<input type="hidden" value="<?php echo $values['title_product'] ?>" name="product_title">
					<input type="hidden" value="<?php echo $values['image_product'] ?>" name="product_image">
					<?php
					if ($values['discount'] == 0) { ?>
						<input type="hidden" value="<?php echo $values['price_product'] ?>" name="product_price">
					<?php
					}
					?>
					<?php
					if ($values['discount'] == 1) { ?>
						<input type="hidden" value="<?php echo $values['price_product'] - ($values['price_product'] / 100 * $values['price_discount']) ?>" name="product_price">

					<?php
					}
					?>
					<?php
					if ($values['discount'] == 2) { ?>
						<input type="hidden" value="<?php echo $values['price_product'] - $values['price_discount'] ?>" name="product_price">
					<?php
					}
					?>
					<input type="hidden" value="1" name="product_quantity">
					<input type="hidden" value="<?php echo $values['quantity_product'] ?>" name="quantity_max">

					<div class="col-lg-3">
						<div class="single_product">
							<div class="product_thumb">
								<a href="<?php echo BASE_URL ?>sanpham/detail_product/<?php echo $values['id_product'] ?>"><img src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $values['image_product'] ?>" alt="" width="252px" height="367px"></a>
								<?php
								if ($values['product_hot'] == 0) {
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

								if ($values['quantity_product'] > 0) {
								?>

									<div>

										<input type="submit" class="product_action" value="Thêm vào giỏ hàng" name="addcart">
									</div>
								<?php
								} ?>
							</div>
							<div class="product_content">
								<?php
								if ($values['quantity_product'] > 0) {
									if ($values['discount'] == 0) { ?>
										<span class="product_price"><?php echo number_format($values['price_product'], 0, ',', '.') . ' VNĐ' ?></span>
									<?php
									}
									?>
									<?php
									if ($values['discount'] == 1) { ?>
										<span class="product_price"><del><?php echo number_format($values['price_product'], 0, ',', '.') . ' VNĐ' ?></del></span>
										<span class="product_price" style="color: red;"> <?php echo number_format($values['price_product'] - ($values['price_product'] / 100 * $values['price_discount']), 0, ',', '.') . ' VNĐ'; ?></span>
									<?php
									}
									?>
									<?php
									if ($values['discount'] == 2) { ?>
										<span class="product_price"><del><?php echo number_format($values['price_product'], 0, ',', '.') . ' VNĐ' ?></del></span>
										<span class="product_price" style="color: red;"> <?php echo number_format($values['price_product'] - $values['price_discount'], 0, ',', '.') . ' VNĐ' ?></span>
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
								<h3 class="product_title"><a href="<?php echo BASE_URL ?>sanpham/detail_product/<?php echo $values['id_product'] ?>"><?php echo $values['title_product'] ?></a></h3>
							</div>
							<div class="product_info">
								<ul>
									<li><a href="<?php echo BASE_URL ?>sanpham/detail_product/<?php echo $values['id_product'] ?>">Xem thêm</a></li>
								</ul>
							</div>
						</div>
					</div>
				</form>
			<?php
			}
			?>
		</div>
	</div>
	<!-- <div class="blog_fullwidth_desc">
		<p></p>
		<a href="<?php echo BASE_URL ?>sanpham/sanphamdecu">Xem toàn bộ</a>
	</div> -->

</div>
<!--new product area start-->
<br>
<div class="new_product_area product_page">
	<div class="row">
		<div class="col-12">
			<div class="block_title">
				<h3>SẢN PHẨM HOT</h3>
			</div>
		</div>
	</div>




		