        <div class="main-panel">
        	<div class="content-wrapper">

        		
            <div class="page-header">
          
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Câu hỏi thường gặp</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Thêm câu hỏi thường gặp </li>
                </ol>
              </nav>
            
</div>
        		<div class="row">


        			<div class="col-12 grid-margin stretch-card">
        				<div class="card">
        					<div class="card-body">
        						<h4 class="card-title" style="text-align: center;">THÊM CÂU HỎI THƯỜNG GẶP</h4>

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
        						<form class="forms-sample" action="<?php echo BASE_URL ?>question/insert_question" method="POST">
								<div class="form-group">
        								<label for="exampleTextarea1">Câu hỏi thường gặp</label>
        								<textarea class="form-control" id="question_textarea" rows="10" name="question"></textarea>
        							</div>




        							<div class="form-group">
        								<label for="exampleTextarea1">Câu trả lời</label>
        								<textarea class="form-control" id="answer_textarea" rows="10" name="answer"></textarea>
        							</div>
        							<button type="submit" class="btn btn-gradient-primary mr-2" name="themdanhmuc">Thêm câu hỏi thường gặp</button>

        						</form>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>