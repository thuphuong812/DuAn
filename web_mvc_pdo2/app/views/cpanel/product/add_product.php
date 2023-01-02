<style>
  .message-error{
	color: red;
	font-size: 12px;
}
</style>

       
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
                    <form class="forms-sample" id="addProduct" action="<?php echo BASE_URL ?>product/insert_product" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <div>
                          <label for="exampleInputName1">Tên sản phẩm</label>
                          <label style="color: red">*</label>
                      </div>                        
                        <input type="text" class="form-control" id="product_title" placeholder="Tên sản phẩm" onkeyup="validateForm()" name="title_product"  minlength="3" maxlength="253">
                        <p id="product_title_error" class="message-error"></p>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Giá *</label>
                        <input type="text" class="form-control" id="product_price" placeholder="Giá" onkeyup="validateForm()" name="price_product" >
                        <p id="product_price_error" class="message-error"></p>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Mô tả sản phẩm </label>
                        <textarea class="form-control" id="desc_product_textarea" rows="4" onkeyup="validateForm()" name="desc_product"></textarea>
                        <p id="desc_product_textarea_error" class="message-error"></p>
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
                        <label for="exampleInputEmail3">Số lượng</label>
                        <input type="text"  class="form-control" id="quantity_product"  placeholder="Số lượng" onkeyup="validateForm()" name="quantity_product" >
                        <p id="quantity_product_error" class="message-error"></p>
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

                      <button type="button" onclick="validateForm()" class="btn btn-gradient-primary mr-2" name="themsanpham">Thêm sản phẩm</button>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

<script>
  function validateForm() {
    const regNumber = new RegExp('^[0-9]+$');
    let productTitle = document.getElementById("product_title").value;
    let productPrice = document.getElementById("product_price").value;
    let productDetail = document.getElementById("desc_product_textarea").value;
    let quantity_product = document.getElementById("quantity_product").value;
    let form = document.getElementById("addProduct");
    let isError = false;
    let errors = {};
    if (!productTitle) {
      errors["productTitle"] = "Vui lòng nhập tên sản phẩm";
      isError = true;
    }else{
      errors["productTitle"] = "";
      if(productTitle.length < 3){
        errors["productTitle"] = "Tên sản phẩm phải lớn hơn 3 kí tự";
        isError = true;
      }
      if(productTitle.length > 20){
        errors["productTitle"] = "Tên sản phẩm phải nhỏ hơn 20 kí tự";
        isError = true;
      }
    }

    
    if (!productPrice) {
      errors["productPrice"] = "Vui lòng nhập giá sản phẩm";
      isError = true;
    }else{
      errors["productPrice"] = "";
      if(!regNumber.test(productPrice)){
        errors["productPrice"] = "Dữ liệu không hợp lệ";
        isError = true;
      }
      if(productPrice.length > 9){
        errors["productPrice"] = "Giá sản phẩm phải nhỏ hơn 999999999";
        isError = true;
      }
    }
    if (!productDetail) {
      errors["productDetail"] = "Vui lòng nhập mô tả sản phẩm";
      isError = true;
    }else{
      errors["productDetail"] = "";
      if(productDetail.length < 3){
        errors["productDetail"] = "Mô tả sản phẩm phải lớn hơn 3 kí tự";
        isError = true;
      }
      if(productDetail.length > 20){
        errors["productDetail"] = "Mô tả sản phẩm phải nhỏ hơn 20 kí tự";
        isError = true;
      }
    }
    
    // const regNumber = new RegExp('^[0-9]+$');
    if (!quantity_product) {
      errors["quantity_product"] = "Vui lòng nhập số lượng sản phẩm";
      isError = true;
    }else{
      errors["quantity_product"] = "";
      if(!regNumber.test(quantity_product)){
        errors["quantity_product"] = "Dữ liệu không hợp lệ";
        isError = true;
      }
      
    }

    document.getElementById("product_title_error").innerHTML = errors["productTitle"];
    document.getElementById("product_price_error").innerHTML = errors["productPrice"];
    document.getElementById("desc_product_textarea_error").innerHTML = errors["productDetail"];
    document.getElementById("quantity_product_error").innerHTML = errors["quantity_product"];

    if(!isError){
      form.submit();
    }
  }
</script>