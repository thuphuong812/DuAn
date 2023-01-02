        <div class="main-panel">
          <div class="content-wrapper">


            <div class="page-header">

              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Mã giảm giá</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Thêm mã giảm giá </li>
                </ol>
              </nav>

            </div>
            <div class="row">


              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">THÊM MÃ GIẢM GIÁ</h4>

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
                    <form class="forms-sample" action="<?php echo BASE_URL ?>coupon/insert_coupon" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                                <label for="exampleInputEmail1">Tên mã giảm giá</label>
                                <input type="text" name="coupon_name" class="form-control" id="exampleInputEmail1" data-validation="length" data-validation-length="min1" data-validation-error-msg="Vui lòng điền ít nhất 1 ký tự">
                            </div>
                         
                            <div class="form-group">
                                <label for="exampleInputPassword1">Số lượng mã</label>
                                <input type="text" name="coupon_number" class="form-control" id="exampleInputEmail1"  required>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputPassword1">Tính năng mã</label>
                                <select name="coupon_condition" class="form-control input-sm m-bot15">
                                    <option value="0">---Chọn---</option>
                                    <option value="1">Giảm theo phần trăm</option>
                                    <option value="2">Giảm theo số tiền</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nhập số phần trăm hoặc số tiền giảm</label>
                                <input type="text" name="coupon_amount" class="form-control" id="exampleInputEmail1"  required>
                            </div>

                      <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" name="coupon_image">

                        </div>
                      </div>
                      <button type="submit" name="add_coupon" class="btn btn-info">Thêm mã giảm giá</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>