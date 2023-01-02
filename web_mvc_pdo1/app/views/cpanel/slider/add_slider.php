        <div class="main-panel">
          <div class="content-wrapper">


            <div class="page-header">

              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Slider</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Thêm Slider </li>
                </ol>
              </nav>

            </div>
            <div class="row">


              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">THÊM SLIDER</h4>

                    <p class="card-description">
                      <?php
                      if (!empty($_GET['msg'])) {
                        $msg = unserialize(urldecode($_GET['msg']));
                        foreach ($msg as $key => $value) {
                          echo '<span style="color:blue;font-weight:bold">' . $value . '</span>';
                        }
                      }
                      ?>

                    </p>
                    <form class="forms-sample" action="<?php echo BASE_URL ?>slider/insert_slider" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Tên slider</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Tên slider" name="title_slider">
                      </div>
                    
                      <div class="form-group">
                        <label for="exampleTextarea1">Mô tả slider</label>
                        <textarea class="form-control" id="desc_slider_textarea" rows="4" name="desc_slider"></textarea>
                      </div>
                     

                      <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" name="image_slider">

                        </div>
                      </div>
                    
                      <button type="submit" class="btn btn-gradient-primary mr-2" name="themslider">Thêm slider</button>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>