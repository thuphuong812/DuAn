<!--footer area start-->
<div class="footer_area">
	<div class="footer_top">
		<div class="container">
			<div class="row">
				<?php
				foreach ($contact as $key => $value) {
				?>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="footer_widget">
							<h3>Về Chúng Tôi</h3>
							<p><?php echo $value['title_contact'] ?></p>
							<div class="footer_widget_contect">
								<p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $value['address_contact'] ?></p>

								<p><i class="fa fa-mobile" aria-hidden="true"></i> <?php echo $value['phone_contact'] ?> </p>
								<p><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo $value['email_contact'] ?> </p>
							</div>
						</div>
					</div>
				<?php
				}
				?>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="footer_widget">
						<h3>Thông tin</h3>
						<ul>

							<li><a href="<?php echo BASE_URL ?>sanpham/tatcatruyen">Toàn bộ truyện</a></li>
							<li><a href="<?php echo BASE_URL ?>tintuc/tatcatintuc">Tin tức</a></li>
							<li><a href="<?php echo BASE_URL ?>index/coupon"> Các mã giảm giá </a></li>

						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="footer_widget">
						<h3>Chính sách</h3>
						<ul>
							<li><a href="<?php echo BASE_URL ?>index/privacy_policy"> Chính sách bảo mật</a></li>
							<li><a href="<?php echo BASE_URL ?>index/return_policy"> Chính sách đổi trả</a></li>
							<li><a href="<?php echo BASE_URL ?>index/warrantly_policy"> Chính sách bảo hành </a></li>



						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="footer_widget">
						<h3>Hướng dẫn</h3>
						<ul>
							<li><a href="<?php echo BASE_URL ?>index/ordering_guide">Hướng dẫn đặt hàng</a></li>
							<li><a href="<?php echo BASE_URL ?>index/question"> Câu hỏi thường gặp </a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer_bottom">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6">
					<div class="copyright_area">

						<p> &copy; 2021 <a href="<?php echo BASE_URL ?>index">SallyShop</a>. Đã đăng ký bản quyền. </p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="footer_social text-right">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>

							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--footer area end-->






<!-- all js here -->
<script src="<?php echo BASE_URL ?>public\frontend\assets\js\vendor\jquery-1.12.0.min.js"></script>
<script src="<?php echo BASE_URL ?>public\frontend\assets\js\popper.js"></script>
<script src="<?php echo BASE_URL ?>public\frontend\assets\js\bootstrap.min.js"></script>
<script src="<?php echo BASE_URL ?>public\frontend\assets\js\ajax-mail.js"></script>
<script src="<?php echo BASE_URL ?>public\frontend\assets\js\plugins.js"></script>
<script src="<?php echo BASE_URL ?>public\frontend\assets\js\main.js"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0&appId=300848028198302&autoLogAppEvents=1" nonce="HTkQpvHq"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo BASE_URL ?>public/frontend/paginationjs/src/pagination.js"></script>

<script>
	//  $(document).ready(function(){  
	//       load_data();
	//       function load_data(page)  
	//       {  
	//            $.ajax({  
	//                 url:"<?php echo BASE_URL ?>sanpham/sanphamhot",  
	//                 method:"POST",  
	//                 data:{page:page},  
	//                 success:function(data){  
	//                      $('#pagination_data').html(data);  
	//                 }  
	//            })  
	//       }  
	//       $(document).on('click', '.pagination_link', function(){  
	//            var page = $(this).attr("id");  
	//            load_data(page);  
	//       });  
	//  });  
</script>

<!-- <script type="text/javascript">
	load_more_product();

	function load_more_product() {
		$.ajax({
			url: '<?php echo BASE_URL ?>index/load_more_product',
			method: "GET",

			success: function(data) {
				$('#all_product').html(data);
			}
		});
	}
	$(document).on('click','#load_more_button',function(){
		var id=$(this).data('id');
		alert(id)
	})
</script> -->

<script>
$(function() {
  (function(name) {
    var container = $('#pagination-' + name);
   
    alert(sources);
    var options = {
      dataSource: $.ajax({
			url: '<?php echo BASE_URL ?>index/homepage',
			method: "GET",
			success: function(data) {
				$('#all_product').html(data);
			}
		}),
      callback: function (response, pagination) {
        window.console && console.log(response, pagination);

        var dataHtml = '<ul>';

        $.each(response, function (index, item) {
          dataHtml += '<li>' + item + '</li>';
        });

        dataHtml += '</ul>';

        container.prev().html(dataHtml);
      }
    };

    //$.pagination(container, options);

    container.addHook('beforeInit', function () {
      window.console && console.log('beforeInit...');
    });
    container.pagination(options);

    container.addHook('beforePageOnClick', function () {
      window.console && console.log('beforePageOnClick...');
      //return false
    });
  })('demo1');

});

</script>

</body>

</html>