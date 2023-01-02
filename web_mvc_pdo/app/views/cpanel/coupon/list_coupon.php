  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Mã giảm giá</a></li>
            <li class="breadcrumb-item active" aria-current="page">Liệt kê</li>
          </ol>
        </nav>
      </div>
      <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card" style="overflow-x: auto;">
            <div class="card-body" >
              <h4 class="card-title" style="text-align: center;">LIỆT KÊ MÃ GIẢM GIÁ</h4>
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
                    <th> Tên mã giảm giá </th>
                    <th> Hình ảnh</th>
                    <th> Mã giảm giá</th>
                    <th> Số lượng mã giảm giá</th>
                    <th> Loại giảm giá</th>

                    
                    <th width="150px" > Quản lý </th>

                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $i=0;
                  foreach ($coupon as $key => $cou) {
                    $i++;

                    ?>
                    <tr style='text-align: center;'>
                      <td ><?php echo $i ?> </td>
                      <td> <?php echo $cou['coupon_name'] ?></td>
                      <td >
                     <img src="<?php echo BASE_URL ?>/public/uploads/coupon/<?php echo $cou['coupon_image'] ?>" style="height:200px; width: 140px; border-radius: 0%;" >
                     </td>
                     
                       <td><?php echo $cou['coupon_code'] ?></td>
                     
                     
                     <td >
                       <?php echo $cou['coupon_number'] ?>
                     </td>
                     <td><?php
                     if($cou['coupon_condition']==1){
                       echo 'Giảm giá theo phần trăm';
                       echo '<br>';
                       echo '<br>';
                       echo 'Số phần trăm giảm: '.$cou['coupon_amount'] .' %' ;
                     }
                     ?>
                      <?php
                     if($cou['coupon_condition']==2){
                        echo 'Giảm giá theo số tiền';
                        echo '<br>';
                        echo '<br>';
                        echo 'Số tiên giảm: '.number_format($cou['coupon_amount'],0,',','.').' VNĐ' ;
                     }
                     ?>
                     
                     </td>
                 
                   
                     
                     <td style='text-align: center;'>
                    
   <form action="<?php echo BASE_URL ?>coupon/delete_coupon/<?php echo $cou['coupon_id']  ?>" method="POST">       
                        <button onclick="return confirm('Bạn có thật sự muốn xóa không?');"class="btn btn-gradient-danger">Xóa</button>
                        </form>
                        <br>

                      <a href="<?php echo BASE_URL ?>coupon/edit_coupon/<?php echo $cou['coupon_id']?> " class="btn btn-gradient-warning"> Sửa </a> </td>

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


