<div class="breadcrumbs_area">
<div class="row">
         <div class="col-12">
             <div class="breadcrumb_content">
                 <ul>
                 <li><a href="<?php echo BASE_URL ?>index">Trang Chủ</a></li>
                     <li><i class="fa fa-angle-right"></i></li>
                     <li>Câu hỏi thường gặp</li>
                 </ul>
             </div>
         </div>
     </div>
                        </div>
                        <!--breadcrumbs area end-->
                        <!--faq area start-->
                        <div class="faq_content_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="faq_content_wrapper">
                                        <h4>Dưới đây là những câu hỏi thường gặp, bạn có thể tìm thấy câu trả lời mà bạn mong muốn</h4>
                                       
                                    </div>
                                </div>
                            </div>  
                        </div>
                        
                        
                         <!--Accordion area-->
                        <div class="accordion_area">
                            <div class="row">
                                <div class="col-12"> 
                                    <div id="accordion" class="card__accordion">
                                      <?php
                                      foreach($question as $key=>$values){
                                    ?>
                                      <div class="card card_dipult">
                                        <div class="card-header card_accor" id="headingOne">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                             <p><?php echo $values['question']?></p>

                                              <i class="fa fa-plus"></i>
                                              <i class="fa fa-minus"></i>

                                            </button>

                                        </div>

                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                          <div class="card-body">
                                          <?php echo $values['answer']?>
                                          </div>
                                        </div>
                                      </div>
                                      <?php
                                      }
                                      ?>
                                      
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Accordion area end-->
                        <!--faq area end-->
                    </div>
                    <!--pos page inner end-->
                </div>
            </div>