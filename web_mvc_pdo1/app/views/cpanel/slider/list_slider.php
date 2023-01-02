  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Slider</a></li>
            <li class="breadcrumb-item active" aria-current="page">Liệt kê</li>
          </ol>
        </nav>
      </div>
      <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" style="text-align: center;">LIỆT KÊ SLIDER</h4>
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
                    <th> Tiêu đề </th>
                    <th> Mô tả</th>
                    <th> Hình ảnh</th>
                    <th width="150px" > Quản lý </th>

                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $i=0;
                  foreach ($slider as $key => $sli) {
                    $i++;

                    ?>
                    <tr style='text-align: center;'>
                      <td ><?php echo $i ?> </td>
                      <td> <?php echo $sli['title_slider'] ?></td>
                      <td> <?php echo $sli['desc_slider'] ?></td>
                      <td >
                     <img src="<?php echo BASE_URL ?>/public/uploads/slider/<?php echo $sli['image_slider'] ?>" style="height:110px; width: 256px; border-radius: 0%;" >
                     </td>
                     
                       
                     
                     
                     
                  
                     <td style='text-align: center;'>
                    
   <form action="<?php echo BASE_URL ?>slider/delete_slider/<?php echo $sli['id_slider']  ?>" method="POST">       
                        <button onclick="return confirm('Bạn có thật sự muốn xóa không?');"class="btn btn-gradient-danger">Xóa</button>
                        </form>
                        <br>

                      <a href="<?php echo BASE_URL ?>slider/edit_slider/<?php echo $sli['id_slider']?> " class="btn btn-gradient-warning"> Sửa </a> </td>

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


