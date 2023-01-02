<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Đơn hàng</a></li>
          <li class="breadcrumb-item active" aria-current="page">Chi tiết đơn hàng </li>

        </ol>
      </nav>
    </div>
    <div class="row">

      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title" style="text-align: center;">CHI TIẾT ĐƠN HÀNG</h4>
            <p class="card-description">


            </p>
            <table class="table table-bordered">
              <thead>
                <tr style="text-align: center;">
                  <th width=50px> # </th>
                  <th> Tên người đặt</th>
                  <th> Email</th>
                  <th> Số điện thoại</th>
                  <th> Địa chỉ</th>
                  <th> Ghi chú</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 0;
                foreach ($order_infor as $key => $ord) {
                  $i++;

                ?>
                  <tr>
                    <td style='text-align: center;'><?php echo $i ?> </td>
                    <td> <?php echo $ord['name'] ?></td>
                    <td><?php echo $ord['email'] ?></td>
                    <td>
                      <?php echo $ord['sodienthoai'] ?>
                    </td>
                    <td>
                      <?php echo $ord['diachi'] ?>
                    </td>
                    <td><?php echo $ord['noidung'] ?></td>







                  </tr>

                <?php
                } ?>

              </tbody>
            </table>
            <br>
            <br>
            <table class="table table-bordered" id="example">
              <thead>
                <tr style="text-align: center;">
                  <th width=50px> # </th>
                  <th> Tên sản phẩm</th>
                  <th> Hình ảnh</th>
                  <th> Số lượng</th>
                  <th> Đơn giá</th>
                  <th> Thành tiền</th>


                </tr>
              </thead>
              <tbody>
                <?php
                $total = 0;
                $total_coupon=0;
                $total_order=0;
                $ship = 30000;
                $i = 0;
                foreach ($order_details as $key => $ord_dt) {
                  if ($ord_dt['coupon_code'] == NULL) {
                    $i++;
                    $total += $ord_dt['product_quantity'] * $ord_dt['price_now'];
                ?>
                    <tr>
                      <td style='text-align: center;'><?php echo $i ?> </td>
                      <td> <?php echo $ord_dt['title_product'] ?></td>
                      <td><img src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $ord_dt['image_product'] ?>" style="height:200px; width: 140px; border-radius: 0%;"> </td>
                      <td>
                        <?php echo $ord_dt['product_quantity'] ?>
                      </td>
                      <td>
                        <?php echo number_format($ord_dt['price_now'], 0, ',', '.') . ' VNĐ' ?>
                      </td>
                      <td><?php echo number_format($ord_dt['product_quantity'] * $ord_dt['price_now'], 0, ',', '.') . ' VNĐ' ?></td>
                    </tr>

                  <?php
                  } else {

                    $i++;
                    $total += $ord_dt['product_quantity'] * $ord_dt['price_now'];
                  ?>
                    <tr>
                      <td style='text-align: center;'><?php echo $i ?> </td>
                      <td> <?php echo $ord_dt['title_product'] ?></td>
                      <td><img src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $ord_dt['image_product'] ?>" style="height:200px; width: 140px; border-radius: 0%;"> </td>
                      <td>
                        <?php echo $ord_dt['product_quantity'] ?>
                      </td>
                      <td>
                        <?php echo number_format($ord_dt['price_now'], 0, ',', '.') . ' VNĐ' ?>
                      </td>
                      <td><?php echo number_format($ord_dt['product_quantity'] * $ord_dt['price_now'], 0, ',', '.') . ' VNĐ' ?></td>
                    </tr>

                    <?php
                    foreach ($coupon_code as $key => $coupon)
                      if ($coupon['coupon_condition'] == 1) {

                       
                        $total_coupon = ($total * $coupon['coupon_amount']) / 100;
                        $total_order = $total + $ship - $total_coupon;

                    ?><?php
                      } elseif ($coupon['coupon_condition'] == 2) {
                        $total_coupon = $coupon['coupon_amount'];
                        $total_order = $total + $ship - $total_coupon; ?>


              <?php
                      }
                  }
                }
              ?>
              
              <?php
              if($ord_dt['coupon_code'] == NULL){
              ?>
              <tr>
                <td colspan="6">Tổng tiền hàng: <?php echo number_format($total, 0, ',', '.') . ' VNĐ' ?></td>
              </tr>
              <tr>
                <td colspan="6">Phí ship: <?php echo number_format($ship, 0, ',', '.') . ' VNĐ' ?> </td>
              </tr>
              <tr>
                <td colspan="6">Tổng tiền có ship: <?php echo number_format($total + 30000, 0, ',', '.') . ' VNĐ' ?></td>
              </tr>
              <tr>
              <?php
              }else{
              ?>
              <tr>
                <td colspan="6">Tổng tiền hàng: <?php echo number_format($total, 0, ',', '.') . ' VNĐ' ?></td>
              </tr>
              <tr>
                <td colspan="6">Phí ship: <?php echo number_format($ship, 0, ',', '.') . ' VNĐ' ?> </td>
              </tr>
              <tr>
                <td colspan="6">Tổng tiền có ship: <?php echo number_format($total + 30000, 0, ',', '.') . ' VNĐ' ?></td>
              </tr>
              <tr>
                <td colspan="6">Mã giảm giá: <?php echo $coupon['coupon_code']?></td>
              </tr>
              <tr>

              <td colspan="6">Tổng tiền khuyến mãi: <?php echo number_format($total_coupon, 0, ',', '.') . ' VNĐ' ?></td>
              </tr>
              <tr>
                <td colspan="6">Tổng tiền đơn hàng: <?php echo number_format($total_order, 0, ',', '.') . ' VNĐ' ?></td>
              </tr>
              <?php
              }
              ?>
              
              
              <form method="POST" action="<?php echo BASE_URL ?>order/order_confirm/<?php echo $ord_dt['order_code'] ?>">
                <tr>
                  <td colspan="6"><input type="submit" value="<?php if ($ord_dt['order_status'] == 1) {
                                                                echo 'Đã xử lý';
                                                              } else {
                                                                echo 'Xử lý đơn hàng';
                                                              } ?>" name="update_order" class="btn btn-gradient-success btn-rounded btn-fw"></td>
                </tr>
              </form>




              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>