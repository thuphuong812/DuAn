        <div class="main-panel">
        	<div class="content-wrapper">

        		
            <div class="page-header">
          
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Thông tin cửa hàng</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Cập nhật thông tin cửa hàng</li>
                </ol>
              </nav>
            
</div>
        		<div class="row">


        			<div class="col-12 grid-margin stretch-card">
        				<div class="card">
        					<div class="card-body">
        						<h4 class="card-title" style="text-align: center;">CẬP NHẬT THÔNG TIN CỬA HÀNG</h4>

        						<p class="card-description"> 
        							<?php
        							if(!empty($_GET['msg'])){
        								$message = unserialize(urldecode($_GET['msg']));
        								foreach ($message as $key => $value){
        									echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
        								}
        							}
        							?> 

        						</p>
								
                    <?php 
foreach ($contact_by_id as $key => $contactid) {
                     ?>
        						<form class="forms-sample" action="<?php echo BASE_URL ?>contact/update_contact/<?php echo $contactid['id_contact'] ?>" method="POST">
								<div class="form-group">
								<label for="exampleInputName1">Khẩu hiệu cửa hàng</label>
        								<textarea class="form-control" id="title_textarea" rows="5" name="title" required><?php echo $contactid['title_contact'] ?></textarea>
        							</div>
									<div class="form-group">
									<label for="exampleInputName1">Địa chỉ</label>
        								<textarea class="form-control" id="address_textarea" rows="5" name="address" required><?php echo $contactid['address_contact'] ?></textarea>
        							</div>
									<div class="form-group">
        								<label for="exampleInputName1">Số điện thoại</label>
        								<input type="text" class="form-control" id="exampleInputName1" value="<?php echo $contactid['phone_contact'] ?>" name="phone" required>
        							</div>
									<div class="form-group">
        								<label for="exampleInputName1">Email</label>
        								<input type="text" class="form-control" id="exampleInputName1" value="<?php echo $contactid['email_contact'] ?>" name="email" required>
        							</div>
									<div class="form-group">
									<label for="exampleInputName1">Thời gian làm việc</label>
        								<textarea class="form-control" id="working_time_textarea" rows="5" name="working_time" required ><?php echo $contactid['working_time_contact'] ?></textarea>
        							</div>
									<div class="form-group">
									<label for="exampleInputName1">Vị trí trên bản đồ</label>
        								<textarea class="form-control" id="map_textarea" rows="5" name="map" ><?php echo $contactid['map_contact'] ?></textarea>
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