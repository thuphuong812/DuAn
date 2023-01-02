  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
            <li class="breadcrumb-item active" aria-current="page">Liệt kê</li>
          </ol>
        </nav>
      </div>
      <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card"  >
            <div class="card-body"style="overflow-x: auto;" >
              <h4 class="card-title" style="text-align: center;">LIỆT KÊ SẢN PHẨM</h4>
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
              <table class="table table-bordered" id="example">
                <thead>
                  <tr style="text-align: center;">
                    <th width=50px> # </th>
                    <th> Tên sản phẩm </th>
                    <th> Hình ảnh</th>
                    <th> Thuộc danh mục</th>
                    <th> Giá</th>
                    <th> Số lượng</th>
                    <th> Sản phẩm hot</th>
                    <th>Sản phẩm giảm giá</th>
                    <th width="150px" > Quản lý </th>

                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $i=0;
                  foreach ($product as $key => $pro) {
                    $i++;

                    ?>
                    <tr style='text-align: center;'>
                      <td ><?php echo $i ?> </td>
                      <td> <?php echo $pro['title_product'] ?></td>
                      <td >
                     <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $pro['image_product'] ?>" style="height:200px; width: 140px; border-radius: 0%;" >
                     </td>
                     
                       <td><?php echo $pro['title_category_product'] ?></td>
                     
                     <td >
                      <?php echo number_format($pro['price_product'],0,',','.').' VNĐ' ?>
                     </td>
                     <td >
                       <?php echo $pro['quantity_product'] ?>
                     </td>
                     <td><?php
                     if($pro['product_hot']==0){
                       echo "Không có";
                     }else{
                       echo "Hot";
                     }
                     ?>
                     
                     </td>
                     <td><?php
                     if($pro['discount']==0){
                       echo "Không giảm giá";
                     
                     }
                     ?>
                     <?php
                     if($pro['discount']==1){
                       echo "Giảm giá theo phần trăm";
                       echo '<br>';
                       echo '<br>';
                       echo "Số phần trăm giảm: ".$pro['price_discount'].' %';
                       echo '<br>';
                       echo '<br>';
                       echo "Giá sau khi giảm: ".number_format($pro['price_product']-($pro['price_product']/100*$pro['price_discount']),0,',','.').' VNĐ';
                     
                     }
                     ?>
                     <?php
                     if($pro['discount']==2){
                       echo "Giảm giá theo số tiền";
                       echo '<br>';
                       echo '<br>';
                       echo "Số tiền giảm: ".number_format($pro['price_discount'],0,',','.').' VNĐ';
                       echo '<br>';
                       echo '<br>';
                       echo "Giá sau khi giảm: ".number_format($pro['price_product']-$pro['price_discount'],0,',','.').' VNĐ'; 
                     
                     }
                     ?>
                     
                     </td>
                     <td style='text-align: center;'>
                    
   <form action="<?php echo BASE_URL ?>product/delete_product/<?php echo $pro['id_product']  ?>" method="POST">       
                        <button onclick="return confirm('Bạn có thật sự muốn xóa không?');"class="btn btn-gradient-danger" id="xoasp">Xóa</button>
                        </form>
                        <br>

                      <a href="<?php echo BASE_URL ?>product/edit_product/<?php echo $pro['id_product']?> " class="btn btn-gradient-warning" id="suasp"> Sửa </a> </td>

                   </tr>

                   <?php 
                 } ?>
               </tbody>
             </table>
           </div>
         </div>
       </div>

     </div>
   </div>


