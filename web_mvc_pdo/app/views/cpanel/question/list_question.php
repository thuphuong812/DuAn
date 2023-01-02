  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Câu hỏi thường gặp</a></li>
            <li class="breadcrumb-item active" aria-current="page">Liệt kê</li>
          </ol>
        </nav>
      </div>
      <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" style="text-align: center;">LIỆT KÊ CÂU HỎI THƯỜNG GẶP</h4>
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
                    <th> Câu hỏi thường gặp </th>
                   
                    <th width="150px" > Quản lý </th>

                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $i=0;
                  foreach ($question as $key => $value) {
                    $i++;

                    ?>
                    <tr>
                      <td style='text-align: center;'><?php echo $i ?> </td>
                      <td> <?php echo $value['question'] ?></td>
                
                     <td style='text-align: center;'>
                      

                      <form action="<?php echo BASE_URL ?>question/delete_question/<?php echo $value['id_question']  ?>" method="POST">       
                        <button onclick="return confirm('Bạn có thật sự muốn xóa không?');"class="btn btn-gradient-danger">Xóa</button>
                      </form>
                      <br>

                      <a href="<?php echo BASE_URL ?>question/edit_question/<?php echo $value['id_question']?> " class="btn btn-gradient-warning"> Sửa </a> </td>

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


