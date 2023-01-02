  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
            <li class="breadcrumb-item active" aria-current="page">Liệt kê</li>
          </ol>
        </nav>
      </div>
      <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" style="text-align: center;">LIỆT KÊ DANH MỤC SẢN PHẨM</h4>
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
                    <th> Tên danh mục </th>
                    <th > Mô tả danh mục</th>
                    <th width="150px" > Quản lý </th>

                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $i=0;
                  foreach ($category as $key => $cate) {
                    $i++;

                    ?>
                    <tr>
                      <td style='text-align: center;'><?php echo $i ?> </td>
                      <td> <?php echo $cate['title_category_product'] ?></td>
                      <td >
                       <?php echo $cate['desc_category_product'] ?>
                     </td>
                     <td style='text-align: center;'>
                      

                      <form action="<?php echo BASE_URL ?>category/delete_category_product/<?php echo $cate['id_category_product']  ?>" method="POST">       
                        <button onclick="return confirm('Bạn có thật sự muốn xóa không?');"class="btn btn-gradient-danger" id="xoadmsp">Xóa</button>
                      </form>
                      <br>

                      <a id="suadmsp" href="<?php echo BASE_URL ?>category/edit_category_product/<?php echo $cate['id_category_product']?> " class="btn btn-gradient-warning" id="suadmsp"> Sửa </a> </td>

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


