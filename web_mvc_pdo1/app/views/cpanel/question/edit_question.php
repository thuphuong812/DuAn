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
foreach ($questionbyid as $key => $quesid) {
                     ?>
        						<form class="forms-sample" action="<?php echo BASE_URL ?>question/update_question/<?php echo $quesid['id_question'] ?>" method="POST">
								<div class="form-group">
        								<label for="exampleTextarea1">Câu hỏi thường gặp</label>
        								<textarea class="form-control" id="question_textarea" rows="10" name="question" ><?php echo $quesid['question'] ?></textarea>
        							</div>




        							<div class="form-group">
        								<label for="exampleTextarea1">Câu trả lời</label>
        								<textarea class="form-control" id="answer_textarea" rows="10" name="answer" ><?php echo $quesid['answer'] ?></textarea>
        							</div>
        							<button type="submit" class="btn btn-gradient-primary mr-2" name="capnhatdanhmuc">Cập nhật câu hỏi thường gặp</button>

        						</form>
                    <?php 
                    } ?>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>