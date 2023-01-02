        <div class="main-panel">
          <div class="content-wrapper">


            <div class="page-header">

              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Thêm Sản phẩm </li>
                </ol>
              </nav>

            </div>
            <div class="row">


              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">THÊM SẢN PHẨM</h4>

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
                    <form class="forms-sample" action="<?php echo BASE_URL ?>product/insert_product" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Tên sản phẩm" name="title_product" required minlength = 3 maxlength="255">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Giá</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Giá" name="price_product" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Mô tả sản phẩm</label>
                        <textarea class="form-control" id="desc_product_textarea" rows="4" name="desc_product"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Thông tin thêm</label>
                        <textarea class="form-control" id="content_product_textarea" rows="4" name="content_product"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Thông tin chi tiết</label>
                        <textarea class="form-control" id="detail_product_textarea" rows="4" name="detail_product" ></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Số lượng</label>
                        <input type="number" min="1" class="form-control" id="exampleInputPassword4" placeholder="Số lượng" name="quantity_product" required>
                      </div>

                      <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" name="img[]" class="file-upload-default" >
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" name="image_product" id="img">

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Thuộc danh mục</label>
                        <select class="form-control" id="exampleSelectGender" name="id_category_product">
                          <?php
                          foreach ($category as $key => $cate) {
                            // code...

                          ?>
                            <option value="<?php echo $cate['id_category_product'] ?>" id="select_danhmuc"><?php echo $cate['title_category_product'] ?></option>
                          <?php
                          } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Sản phẩm hot</label>
                        <select class="form-control" id="exampleSelectGender" name="product_hot">
                            <option value="0">Không có</option>
                            <option value="1">Có</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Giảm giá</label>
                        <select class="form-control" id="exampleSelectGender" name="discount">
                            <option value="0">Không giảm</option>
                            <option value="1">Giảm theo phần trăm</option>
                            <option value="2">Giảm theo số tiền</option>
                        </select>
                      </div>
                     
                      <div class="form-group">
                        <label for="exampleInputPassword4">Nhập số phần trăm hoặc số tiền giảm</label>
                        <input type="text" name="price_discount" class="form-control" id="exampleInputEmail1">
                      </div>

                      <button type="submit" class="btn btn-gradient-primary mr-2" name="themsanpham">Thêm sản phẩm</button>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>