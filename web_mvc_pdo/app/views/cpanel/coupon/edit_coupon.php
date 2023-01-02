        <div class="main-panel">
          <div class="content-wrapper">


            <div class="page-header">

              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Mã giảm giá</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Cập nhật mã giảm giá </li>
                </ol>
              </nav>

            </div>
            <div class="row">


              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">CẬP NHẬT MÃ GIẢM GIÁ</h4>

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
                    <?php
                    foreach ($couponbyid as $key => $cou) {
                    ?>
                      <form class="forms-sample" action="<?php echo BASE_URL ?>coupon/update_coupon/<?php echo $cou['coupon_id'] ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="exampleInputName1">Tên mã giảm giá</label>
                          <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $cou['coupon_name'] ?>" name="coupon_name">
                        </div>
                    
                        <div class="form-group">
                          <label for="exampleInputEmail3">Số lượng mã</label>
                          <input type="text" class="form-control" id="exampleInputEmail3" value="<?php echo $cou['coupon_number'] ?>" name="coupon_number">
                        </div>



                        <div class="form-group">
                          <label for="exampleSelectGender">Tính năng mã </label>
                          <select class="form-control" id="exampleSelectGender" name="coupon_condition">
                            <?php
                            if ($cou['coupon_condition'] == 1) {

                            ?>
                              <option value="0">---Chọn---</option>
                              <option selected value="1">Giảm giá theo phần trăm</option>
                              <option value="2">Giảm giá theo số tiền</option>
                            <?php
                            } else {
                            ?>
                              <option value="0">---Chọn---</option>
                              <option value="1">Giảm giá theo phần trăm</option>
                              <option selected value="2">Giảm giá theo số tiền</option>
                            <?php
                            }
                            ?>

                          </select>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword4">Số phần trăm hoặc số tiền giảm</label>
                          <input type="text" name="coupon_amount" class="form-control" id="exampleInputEmail1" value="<?php echo $cou['coupon_amount'] ?>">
                        </div>

                        <div class="form-group">
                          <label>Hình ảnh</label>
                          <input type="file" name="img[]" class="file-upload-default">
                          <div class="input-group col-xs-12">
                            <input type="file" class="form-control file-upload-info" name="coupon_image">

                          </div>
                          <br>
                          <img src="<?php echo BASE_URL ?>/public/uploads/coupon/<?php echo $cou['coupon_image'] ?>" style="height:200px; width: 140px; border-radius: 0%;">
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2" name="capnhatsanpham">Cập nhật mã giảm giá</button>
                      </form>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>