

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo BASE_URL?>public/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL?>public/admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo BASE_URL?>public/admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo BASE_URL?>public/admin/assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="<?php echo BASE_URL?>public/admin/assets/images/logo.png">
                </div>
                <h4>Xin chào!</h4>
                <h6 class="font-weight-light">Đăng nhập để tiếp tục.</h6>
                <form class="pt-3" action="<?php echo BASE_URL  ?>login/authentication_login" method="POST" autocomplete="off">
				<?php 
		if (isset($msg)) {
			echo '<span style="color:red" id="msg">'.$msg.'</span>';
		}
	 ?>
                  <div class="form-group">
  </br>
					<input type="text" name="username" required="1" class="form-control form-control-lg" placeholder="Username">
                  </div>
                  <div class="form-group">
                   
					<input type="password" name="password" required="1" class="form-control form-control-lg" placeholder="Password">
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Ghi nhớ </label>
                    </div>
                  
                  </div>
                  <div class="mt-3">
                    <input type="submit" name="login" value="Đăng nhập" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                  </div>
                  
                  <div class="mb-2">

                      
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo BASE_URL?>public/admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo BASE_URL?>public/admin/assets/js/off-canvas.js"></script>
    <script src="<?php echo BASE_URL?>public/admin/assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo BASE_URL?>public/admin/assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>