        <div class="main-panel">
          <div class="content-wrapper">


            <div class="page-header">

              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Cập nhật sản phẩm </li>
                </ol>
              </nav>

            </div>
            <div class="row">


              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">CẬP NHẬT SẢN PHẨM</h4>

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
                    foreach ($postbyid as $key => $pro) {
                     ?>
                     <form class="forms-sample" action="<?php echo BASE_URL ?>post/update_post/<?php echo $pro['id_post'] ?>" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Tiêu đề bài viết</label>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $pro['title_post'] ?>" name="title_post" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Mô tả bài viết</label>
                        <textarea class="form-control" id="desc_post_textarea" rows="4" name="desc_post"><?php echo $pro['desc_post'] ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Chi tiết bài viết</label>
                        <textarea class="form-control" id="content_post_textarea" rows="4" name="content_post" required><?php echo $pro['content_post'] ?></textarea>
                      </div>


                      <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info"  name="image_post">

                        </div>
                        <br>
                        <img src="<?php echo BASE_URL ?>/public/uploads/post/<?php echo $pro['image_post'] ?>" style="height:200px; width: 140px; border-radius: 0%;" >
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Thuộc danh mục</label>
                        <select class="form-control" id="exampleSelectGender" name="id_category_post">
                          <?php 
                          foreach ($category as $key => $cate) {
                           ?>
                           <option <?php if($pro['id_category_post']==$cate['id_category_post']){ echo 'selected'; }?> value="<?php echo $cate['id_category_post'] ?>"><?php echo $cate['title_category_post'] ?></option>
                           <?php 
                         } ?>
                       </select>
                     </div>


                     <button type="submit" class="btn btn-gradient-primary mr-2" name="capnhatbaiviet">Cập nhật bài viết</button>

                   </form>
                 <?php } ?>
               </div>
             </div>
           </div>
         </div>
       </div>