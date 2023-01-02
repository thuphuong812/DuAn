<?php

/**
 * 
 */

class coupon extends DController
{



	public function __construct()
	{
		$data = array();
		$message = array();
		parent::__construct();
	}

	public function index()
	{
		$this->add_coupon();
	}
	public function add_coupon()
	{
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/coupon/add_coupon');
		$this->load->view('cpanel/footer');
	}
	public function insert_coupon()
	{
		$coupon_name = $_POST['coupon_name'];
		
		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$input_length = strlen($permitted_chars);
		$strength = 16;
		$random_string = '';
		for ($i = 0; $i < $strength; $i++) {
			$random_character = $permitted_chars[mt_rand(0, $input_length - 1)];
			$random_string .= $random_character;
		}

		$coupon_code = $random_string;
		
		
		$coupon_number = $_POST['coupon_number'];
		$coupon_condition = $_POST['coupon_condition'];
		$coupon_amount = $_POST['coupon_amount'];

		$image = $_FILES['coupon_image']['name'];

		$tmp_image = $_FILES['coupon_image']['tmp_name'];

		$div = explode('.', $image);
		$file_ext = strtolower(end($div));
		$unique_image = $div[0] . time() . '.' . $file_ext;

		$path_uploads = "public/uploads/coupon/" . $unique_image;

		$table = 'tbl_coupon';
		$data = array(
			'coupon_name' => $coupon_name,
			'coupon_code' => $coupon_code,
			'coupon_number' => $coupon_number,
			'coupon_condition' => $coupon_condition,
			'coupon_amount' => $coupon_amount,


			'coupon_image' => $unique_image

		);
		$couponmodel = $this->load->model('couponmodel');
		$result = $couponmodel->insertcoupon($table, $data);
		if ($result == 1) {
			move_uploaded_file($tmp_image, $path_uploads);
			$message['msg'] = "Thêm mã giảm giá thành công";
			header("Location:" . BASE_URL . "coupon/list_coupon?msg=" . urlencode(serialize($message)));
		} else {
			$message['msg'] = "Thêm mã giảm giá thất bại";
			header("Location:" . BASE_URL . "coupon/list_coupon?msg=" . urlencode(serialize($message)));
		}
	}


	public function list_coupon()
	{
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$table_coupon = 'tbl_coupon';


		$couponmodel = $this->load->model('couponmodel');

		$data['coupon'] = $couponmodel->coupon($table_coupon);
		$this->load->view('cpanel/coupon/list_coupon', $data);

		$this->load->view('cpanel/footer');
	}
	public function delete_coupon($id)
	{

		$table = 'tbl_coupon';
		$cond = "coupon_id='$id'";
		$couponmodel = $this->load->model('couponmodel');

		$data['couponbyid'] = $couponmodel->couponbyid($table, $cond);
		foreach ($data['couponbyid'] as $key => $value) {
			$path_unlink = "public/uploads/coupon/";
			unlink($path_unlink . $value['image_coupon']);
		}
		$result = $couponmodel->deletecoupon($table, $cond);

		if ($result == 1) {

			$message['msg'] = "Xóa mã giảm giá thành công";
			header("Location:" . BASE_URL . "coupon/list_coupon?msg=" . urlencode(serialize($message)));
		} else {
			$message['msg'] = "Xóa mã giảm giá thất bại";
			header("Location:" . BASE_URL . "coupon/list_coupon?msg=" . urlencode(serialize($message)));
		}
	}
	public function edit_coupon($id)
	{

		$table = 'tbl_coupon';
		$cond = "coupon_id='$id'";

		$couponmodel = $this->load->model('couponmodel');

		$data['couponbyid'] = $couponmodel->couponbyid($table, $cond);

		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/coupon/edit_coupon', $data);
		$this->load->view('cpanel/footer');
	}

 
	public function update_coupon($id)
	{
		$cond = "coupon_id='$id'";
		$table = 'tbl_coupon';
		$couponmodel = $this->load->model('couponmodel');

		$coupon_name = $_POST['coupon_name'];

		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$input_length = strlen($permitted_chars);
		$strength = 16;
		$random_string = '';
		for ($i = 0; $i < $strength; $i++) {
			$random_character = $permitted_chars[mt_rand(0, $input_length - 1)];
			$random_string .= $random_character;
		}
		
		$coupon_code = $random_string;
		
		
		$coupon_number = $_POST['coupon_number'];
		$coupon_condition = $_POST['coupon_condition'];
		$coupon_amount = $_POST['coupon_amount'];

		$image = $_FILES['coupon_image']['name'];

		$tmp_image = $_FILES['coupon_image']['tmp_name'];

		$div = explode('.', $image);
		$file_ext = strtolower(end($div));
		$unique_image = $div[0] . time() . '.' . $file_ext;
		$path_uploads = "public/uploads/coupon/" . $unique_image;

		if ($image) {
			$data['couponbyid'] = $couponmodel->couponbyid($table, $cond);
			foreach ($data['couponbyid'] as $key => $value) {
				$path_unlink = "public/uploads/coupon/";
				unlink($path_unlink . $value['coupon_image']);
			}
			$data = array(
				'coupon_name' => $coupon_name,
				'coupon_code' => $coupon_code,
				'coupon_number' => $coupon_number,
				'coupon_condition' => $coupon_condition,
				'coupon_amount' => $coupon_amount,


				'coupon_image' => $unique_image
			);
			move_uploaded_file($tmp_image, $path_uploads);
		} else {
			$data = array(
				'coupon_name' => $coupon_name,
				'coupon_code' => $coupon_code,
				'coupon_number' => $coupon_number,
				'coupon_condition' => $coupon_condition,
				'coupon_amount' => $coupon_amount,


				'coupon_image' => $unique_image
			);
		}


		$result = $couponmodel->updatecoupon($table, $data, $cond);

		if ($result == 1) {

			$message['msg'] = "Cập nhật mã giảm giá thành công";
			header("Location:" . BASE_URL . "coupon/list_coupon?msg=" . urlencode(serialize($message)));
		} else {
			$message['msg'] = "Cập nhật mã giảm giá thất bại";
			header("Location:" . BASE_URL . "coupon/list_coupon?msg=" . urlencode(serialize($message)));
		}
	}
}
