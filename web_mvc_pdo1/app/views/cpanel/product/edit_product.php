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
                      if (!empty($_GET['msg'])) {
                        $msg = unserialize(urldecode($_GET['msg']));
                        foreach ($msg as $key => $value) {
                          echo '<span style="color:blue;font-weight:bold">' . $value . '</span>';
                        }
                      }
                      ?>

                    </p>
                    <?php
                    foreach ($productbyid as $key => $pro) {
                    ?>
                      <form class="forms-sample" action="<?php echo BASE_URL ?>product/update_product/<?php echo $pro['id_product'] ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="exampleInputName1">Tên sản phẩm</label>
                          <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $pro['title_product'] ?>" name="title_product" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail3">Giá</label>
                          <input type="text" class="form-control" id="exampleInputEmail3" value="<?php echo $pro['price_product'] ?>" name="price_product" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleTextarea1">Mô tả sản phẩm</label>
                          <textarea class="form-control" id="desc_product_textarea" rows="10" name="desc_product"><?php echo $pro['desc_product'] ?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleTextarea1">Thông tin thêm</label>
                          <textarea class="form-control" id="content_product_textarea" rows="10" name="content_product"><?php echo $pro['content_product'] ?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleTextarea1">Thông tin chi tiết</label>
                          <textarea class="form-control" id="detail_product_textarea" rows="10" name="detail_product" ><?php echo $pro['detail_product'] ?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword4">Số lượng</label>
                          <input type="number" min="1" class="form-control" id="exampleInputPassword4" value="<?php echo $pro['quantity_product'] ?>" name="quantity_product" required>
                        </div>

                        <div class="form-group">
                          <label>Hình ảnh</label>
                          <input type="file" name="img[]" class="file-upload-default">
                          <div class="input-group col-xs-12">
                            <input type="file" class="form-control file-upload-info" name="image_product" id="img">

                          </div>
                          <br>
                          <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $pro['image_product'] ?>" style="height:200px; width: 140px; border-radius: 0%;">
                        </div>
                        <div class="form-group">
                          <label for="exampleSelectGender">Thuộc danh mục</label>
                          <select class="form-control" id="exampleSelectGender" name="id_category_product">
                            <?php
                            foreach ($category as $key => $cate) {


                            ?>
                              <option <?php if ($pro['id_category_product'] == $cate['id_category_product']) {
                                        echo 'selected';
                                      } ?> value="<?php echo $cate['id_category_product'] ?>"><?php echo $cate['title_category_product'] ?></option>
                            <?php
                            } ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleSelectGender">Sản phẩm hot</label>
                          <select class="form-control" id="exampleSelectGender" name="product_hot">
                            <?php
                            if ($pro['product_hot'] == 0) {
                            ?>
                              <option selected value="0">Không</option>
                              <option value="1">Có</option>
                            <?php
                            } else {
                            ?>
                              <option value="0">Không</option>
                              <option selected value="1">Có</option>
                            <?php
                            }
                            ?>

                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleSelectGender">Giảm giá</label>
                          <select class="form-control" id="exampleSelectGender" name="discount">
                            <?php
                            if ($pro['discount'] == 0) {

                            ?>
                              <option selected value="0">Không có</option>
                              <option value="1">Giảm theo phần trăm</option>
                              <option value="2">Giảm theo số tiền</option>
                            <?php
                            }
                            ?>

                            <?php
                            if ($pro['discount'] == 1) {

                            ?>
                              <option value="0">Không có</option>
                              <option selected value="1">Giảm theo phần trăm</option>
                              <option value="2">Giảm theo số tiền</option>
                            <?php
                            }
                            ?>

                            <?php
                            if ($pro['discount'] == 2) {

                            ?>
                              <option value="0">Không có</option>
                              <option value="1">Giảm theo phần trăm</option>
                              <option selected value="2">Giảm theo số tiền</option>
                            <?php
                            }
                            ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword4">Nhập số phần trăm hoặc số tiền giảm</label>
                          <input type="text" name="price_discount" class="form-control" id="exampleInputEmail1" value="<?php echo $pro['price_discount'] ?>">
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2" name="capnhatsanpham">Cập nhật sản phẩm</button>
                      </form>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>