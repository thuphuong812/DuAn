        <div class="main-panel">
        	<div class="content-wrapper">

        		
            <div class="page-header">
          
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Cập nhật danh mục </li>
                </ol>
              </nav>
            
</div>
        		<div class="row">


        			<div class="col-12 grid-margin stretch-card">
        				<div class="card">
        					<div class="card-body">
        						<h4 class="card-title" style="text-align: center;">CẬP NHẬT DANH MỤC SẢN PHẨM</h4>

        						<p class="card-description"> 
        							<?php
        							if(!empty($_GET['msg'])){
        								$msg = unserialize(urldecode($_GET['msg']));
        								foreach ($msg as $key => $value){
        									echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
        								}
        							}
        							?> 

        						</p>
                    <?php 
foreach ($categorybyid as $key => $cateid) {
                     ?>
        						<form class="forms-sample" action="<?php echo BASE_URL ?>category/update_category_product/<?php echo $cateid['id_category_product'] ?>" method="POST">
        							<div class="form-group">
        								<label for="exampleInputName1">Tên danh mục</label>
        								<input type="text" class="form-control" id="exampleInputName1" value="<?php echo $cateid['title_category_product'] ?>" name="title_category_product" required>
        							</div>




        							<div class="form-group">
        								<label for="exampleTextarea1">Mô tả danh mục</label>
        								<textarea class="form-control" id="exampleTextarea1" rows="10" name="desc_category_product" ><?php echo $cateid['desc_category_product'] ?></textarea>
        							</div>
        							<button type="submit" class="btn btn-gradient-primary mr-2" name="capnhatdanhmuc">Cập nhật danh mục</button>

        						</form>
                    <?php 
                    } ?>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>