<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Liên hệ khách hàng</a></li>
            <li class="breadcrumb-item"><a href="#">Tất cả tin nhắn đã phản hồi</a></li>
            
          </ol>
        </nav>
      </div>
      <div class="row">

        <div class="col-lg-12 grid-margin stretch-card" >
          <div class="card" style="overflow-x: auto;">
            <div class="card-body" >
              <h4 class="card-title" style="text-align: center;">LIỆT KÊ TIN NHẮN ĐÃ PHẢN HỒI</h4>
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
              <table class="table table-bordered" id="example"  >
                <thead>
                  <tr style="text-align: center;">
                    <th width=50px> # </th>
                    <th> Tên khách hàng </th>
                    <th> Số điện thoại </th>
                    <th> Địa chỉ </th>
                    <th> Email </th>
                    <th> Tin nhắn </th>
                    <th> Ngày đặt</th>
                    <th> Tình trạng</th>
                    <th width="150px" > Quản lý </th>

                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $i=0;
                  foreach($contact_customer_processed as $key => $con) {
                    $i++;

                    ?>
                    <tr>
                      <td style='text-align: center;'><?php echo $i ?> </td>
                      <td> <?php echo $con['name_customer'] ?></td>
                      <td >
                       <?php echo $con['phone_customer'] ?>
                     </td>
                     <td >
                       <?php echo $con['address_customer'] ?>
                     </td>
                     <td >
                       <?php echo $con['email_customer'] ?>
                     </td>
                     <td >
                       <?php echo $con['message_customer'] ?>
                     </td>
                     <td >
                       <?php echo $con['contact_date'] ?>
                     </td>
                     <td >
                       <?php if($con['contact_status']==0){echo 'Đơn hàng mới';}else{echo 'Đã xử lý';} ?>
                     </td>
                     
                      
 
                      <td>

                     <form action="<?php echo BASE_URL ?>contact/delete_contact_customer/<?php echo $con['id_contact_customer']  ?>" method="POST">       
                        <button onclick="return confirm('Bạn có thật sự muốn xóa không?');"class="btn btn-gradient-danger">Xóa</button>
                        </form></td>

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


