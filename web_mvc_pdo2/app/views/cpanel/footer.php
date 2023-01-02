<footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates </a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo BASE_URL ?>public/admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo BASE_URL ?>public/admin/assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo BASE_URL ?>public/admin/assets/js/off-canvas.js"></script>
    <script src="<?php echo BASE_URL ?>public/admin/assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo BASE_URL ?>public/admin/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo BASE_URL ?>public/admin/assets/js/dashboard.js"></script>
    <script src="<?php echo BASE_URL ?>public/admin/assets/js/todolist.js"></script>
    <!-- <script src="<?php echo BASE_URL ?>public/admin/assets/ckeditor/ckeditor.js"></script> -->
    <script type="text/javascript">
 $(document).ready(function(){
    CKEDITOR.replace('category_ckeditor');
    CKEDITOR.replace('category_post_ckeditor');
    CKEDITOR.replace('desc_post_ckeditor');
    CKEDITOR.replace('content_post_ckeditor');
    CKEDITOR.replace('desc_product_ckeditor');
    CKEDITOR.replace('content_product_ckeditor');
    
    CKEDITOR.replace('desc_slider_ckeditor');
    CKEDITOR.replace('detail_product_ckeditor');
    CKEDITOR.replace('answer_ckeditor');
    CKEDITOR.replace('question_ckeditor');
    CKEDITOR.replace('ordering_guide_ckeditor');
    CKEDITOR.replace('warrantly_policy_ckeditor');
    CKEDITOR.replace('return_policy_ckeditor');
    CKEDITOR.replace('privacy_policy_ckeditor');
    CKEDITOR.replace('title_ckeditor');
    CKEDITOR.replace('address_ckeditor');
    CKEDITOR.replace('map_ckeditor');
    CKEDITOR.replace('working_time_ckeditor');
   

});

</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src=" https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
$('#example').DataTable();
} );
</script>

    <!-- End custom js for this page -->
  </body>
</html>