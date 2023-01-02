        <div class="main-panel">
        	<div class="content-wrapper">

        		
            <div class="page-header">
          
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Chính sách bảo mật</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Cập nhật chính sách bảo mật </li>
                </ol>
              </nav>
            
</div>
        		<div class="row">


        			<div class="col-12 grid-margin stretch-card">
        				<div class="card">
        					<div class="card-body">
        						<h4 class="card-title" style="text-align: center;">CẬP NHẬT CHÍNH SÁCH BẢO MẬT</h4>

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
foreach ($privacy_policy_by_id as $key => $privacyid) {
                     ?>
        						<form class="forms-sample" action="<?php echo BASE_URL ?>policy/update_privacy_policy/<?php echo $privacyid['id_privacy_policy'] ?>" method="POST">
								<div class="form-group">
        								
        								<textarea class="form-control" id="privacy_policy_textarea" rows="20" name="content" ><?php echo $privacyid['content_privacy_policy'] ?></textarea>
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