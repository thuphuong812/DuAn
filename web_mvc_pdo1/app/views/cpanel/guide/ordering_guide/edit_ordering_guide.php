        <div class="main-panel">
        	<div class="content-wrapper">

        		
            <div class="page-header">
          
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Hướng dẫn đặt hàng</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Cập nhật hướng dẫn đặt hàng </li>
                </ol>
              </nav>
            
</div>
        		<div class="row">


        			<div class="col-12 grid-margin stretch-card">
        				<div class="card">
        					<div class="card-body">
        						<h4 class="card-title" style="text-align: center;">CẬP NHẬT HƯỚNG DẪN ĐẶT HÀNG</h4>

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
foreach ($ordering_guide_by_id as $key => $guideid) {
                     ?>
        						<form class="forms-sample" action="<?php echo BASE_URL ?>guide/update_ordering_guide/<?php echo $guideid['id_ordering_guide'] ?>" method="POST">
								<div class="form-group">
        								
        								<textarea class="form-control" id="ordering_guide_textarea" rows="20" name="content" ><?php echo $guideid['content_ordering_guide'] ?></textarea>
        							</div>




        							<button type="submit" class="btn btn-gradient-primary mr-2" name="capnhatdanhmuc">Cập nhật</button>

        						</form>
                    <?php 
                    } ?>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>