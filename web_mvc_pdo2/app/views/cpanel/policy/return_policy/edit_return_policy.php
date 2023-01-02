        <div class="main-panel">
        	<div class="content-wrapper">

        		
            <div class="page-header">
          
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Chính sách đổi trả</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Cập nhật chính sách đổi trả </li>
                </ol>
              </nav>
            
</div>
        		<div class="row">


        			<div class="col-12 grid-margin stretch-card">
        				<div class="card">
        					<div class="card-body">
        						<h4 class="card-title" style="text-align: center;">CẬP NHẬT CHÍNH SÁCH ĐỔI TRẢ</h4>

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
foreach ($return_policy_by_id as $key => $returnid) {
                     ?>
        						<form class="forms-sample" action="<?php echo BASE_URL ?>policy/update_return_policy/<?php echo $returnid['id_return_policy'] ?>" method="POST">
								<div class="form-group">
        								
        								<textarea class="form-control" id="return_policy_textarea" rows="20" name="content" ><?php echo $returnid['content_return_policy'] ?></textarea>
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