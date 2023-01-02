<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Đơn hàng</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Đơn hàng đã xử lý</li>

        </ol>
      </nav>
    </div>
    <div class="row">

      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title" style="text-align: center;">LIỆT KÊ ĐƠN HÀNG ĐÃ XỬ LÝ</h4>
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
            <table class="table table-bordered" id="example">
              <thead>
                <tr style="text-align: center;">
                  <th width=50px> # </th>
                  <th> Code đơn hàng </th>
                  <th> Ngày đặt</th>
                  <th> Tình trạng</th>
                  <th width="150px"> Quản lý </th>

                </tr>
              </thead>
              <tbody>
                <?php
                $i = 0;
                foreach ($order_processed as $key => $ord) {
                  $i++;

                ?>
                  <tr>
                    <td style='text-align: center;'><?php echo $i ?> </td>
                    <td> <?php echo $ord['order_code'] ?></td>
                    <td>
                      <?php echo $ord['order_date'] ?>
                    </td>
                    <td>
                      <?php if ($ord['order_status'] == 1) {
                        echo 'Đã xử lý';
                      } else {
                        echo 'Chưa xử lý';
                      } ?>
                    </td>

                    
                    <td style='text-align: center;'>




                    

                      <form action="<?php echo BASE_URL ?>order/delete_order/<?php echo $ord['order_id']  ?>" method="POST">
                        <button onclick="return confirm('Bạn có thật sự muốn xóa không?');" class="btn btn-gradient-danger">Xóa</button>
                      </form> <br>
                      <a href="<?php echo BASE_URL ?>order/order_details/<?php echo $ord['order_code']?> " class="btn btn-gradient-warning"> Xem đơn hàng </a> 
                     
                    </td>

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