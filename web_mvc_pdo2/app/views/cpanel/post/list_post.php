  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Bài viết</a></li>
            <li class="breadcrumb-item active" aria-current="page">Liệt kê</li>
          </ol>
        </nav>
      </div>
      <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" style="text-align: center;">LIỆT KÊ BÀI VIẾT</h4>
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
                    <th> Tiêu đề bài viết </th>
                    <th > Hình ảnh</th>
                    <th > Tóm tắt</th>
                    <th > Thuộc danh mục</th>
                     
                    <th width="150px" > Quản lý </th>

                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $i=0;
                  foreach ($post as $key => $value) {
                    $i++;

                    ?>
                    <tr style='text-align: center;'>
                      <td ><?php echo $i ?> </td>
                      <td> <?php echo $value['title_post'] ?></td>
                      <td >
                     <img src="<?php echo BASE_URL ?>/public/uploads/post/<?php echo $value['image_post'] ?>" style="height:200px; width: 140px; border-radius: 0%;" >
                     </td>
                     <td> <?php echo substr($value['desc_post'],0,300) ?></td>
                     
                       <td><?php echo $value['title_category_post'] ?></td>
                     
                    
                     
                     <td style='text-align: center;'>
                    
   <form action="<?php echo BASE_URL ?>post/delete_post/<?php echo $value['id_post']  ?>" method="POST">       
                        <button onclick="return confirm('Bạn có thật sự muốn xóa không?');"class="btn btn-gradient-danger" id="xoabv">Xóa</button>
                        </form>
                        <br>

                      <a href="<?php echo BASE_URL ?>post/edit_post/<?php echo $value['id_post']?> " class="btn btn-gradient-warning" id="suabv"> Sửa </a> </td>
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


