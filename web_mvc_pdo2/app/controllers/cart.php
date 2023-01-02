<?php

/**
 * 
 */
class cart extends DController
{



	public function __construct()
	{
		$data = array();
		parent::__construct();
	}
	public function index()
	{
		$this->giohang();
	}

	public function giohang()
	{
		Session::init();
		$table = 'tbl_category_product';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category_home($table);
		$table_post = 'tbl_category_post';
		$postmodel = $this->load->model('postmodel');
		$data['category_post'] = $postmodel->category_home_post($table_post);
		$table_contact= 'tbl_contact';
		$contactmodel = $this->load->model('contactmodel');
		$data['contact'] = $contactmodel->contact($table_contact);
		
		$this->load->view('header', $data);
		$this->load->view('cart');
		$this->load->view('footer',$data);
	}
	public function addtocart()
	{
		Session::init();
		//Session::destroy();
		if (isset($_SESSION["shopping_cart"])) {
			$available = 0;
			foreach ($_SESSION["shopping_cart"] as $key => $values) {
				if ($_SESSION["shopping_cart"][$key]['product_id'] == $_POST['product_id'] ) {
					$available++;
					if($_SESSION["shopping_cart"][$key]['product_quantity']< $_POST['quantity_max']){
					$_SESSION["shopping_cart"][$key]['product_quantity'] = $_SESSION["shopping_cart"][$key]['product_quantity'] + $_POST['product_quantity'];
				}}
			}
			if ($available == 0) {
				$item = array(
					'product_id' => $_POST["product_id"],
					'product_title' => $_POST["product_title"],
					'product_price' => $_POST["product_price"],
					'product_image' => $_POST["product_image"],
					'product_quantity' => $_POST["product_quantity"],
					'max_quantity' => $_POST["quantity_max"]
				);
				$_SESSION["shopping_cart"][] = $item;
			}
		} else {
			$item = array(
				'product_id' => $_POST["product_id"],
				'product_title' => $_POST["product_title"],
				'product_price' => $_POST["product_price"],
				'product_image' => $_POST["product_image"],
				'product_quantity' => $_POST["product_quantity"],
				'max_quantity' => $_POST["quantity_max"]
			);
			$_SESSION["shopping_cart"][] = $item;
		}
		header("Location:" . BASE_URL . 'cart');
	}
	public function updategiohang()
	{
		Session::init();
		if (isset($_POST['delete_cart'])) {
			if (isset($_SESSION["shopping_cart"])) {
				foreach ($_SESSION["shopping_cart"] as $key => $values) {

					if ($_SESSION["shopping_cart"][$key]['product_id'] == $_POST['delete_cart']) {
						unset($_SESSION["shopping_cart"][$key]);
					}
				}
				header('Location:' . BASE_URL . 'cart');
			} else {
				header('Location:' . BASE_URL);
			}
		} else {
			foreach ($_POST['qty'] as $key => $qty) {
				foreach ($_SESSION["shopping_cart"] as $session => $values) {
					if ($values['product_id'] == $key && $qty >= 1) {
						$_SESSION["shopping_cart"][$session]['product_quantity'] = $qty;
					} elseif ($values['product_id'] == $key && $qty <= 0) {
						unset($_SESSION["shopping_cart"][$session]);
					}
				}
			}
			header('Location:' . BASE_URL . 'cart');
		}
	}
	public function usecoupon()
	{
		Session::init();
		
		$coupon_code=$_POST['coupon_code'];
		
		$tbl_coupon='tbl_coupon';
		$cond="coupon_code='$coupon_code'";
		$couponmodel = $this->load->model('couponmodel');
		$data['coupon'] = $couponmodel->coupon_use($tbl_coupon,$cond);
		$this->load->view('header', $data);
		
		$this->load->view('cart',$data);

		$this->load->view('footer',$data);
        
        
	}

	public function dathang()
	{
		Session::init();
		$table = 'tbl_product';
		$table_order = "tbl_order";
		$table_order_details = "tbl_order_details";
		$table_coupon="tbl_coupon";
		$ordermodel = $this->load->model('ordermodel');
		$name = $_POST['name'];
		$sodienthoai = $_POST['sodienthoai'];
		$diachi = $_POST['diachi'];
		$email = $_POST['email'];
		$noidung = $_POST['noidung'];
		$coupon_code=$_POST['coupon_code'];
		
	
		
		$order_code = rand(0, 999999);
		date_default_timezone_set('asia/Ho_chi_minh');
		$date = date("d/m/Y");
		$hour = date("h:i:sa");
		$order_date = $date . ' ' . $hour;
		$data_order = array(
			'order_status' => 0,
			'order_code' => $order_code,
			'order_date' => $order_date
		);
		$result_order = $ordermodel->insert_order($table_order, $data_order);
		if (Session::get("shopping_cart") == true) {
			foreach (Session::get("shopping_cart") as $key => $value) {
				$data_details = array(
					'order_code' => $order_code,
					'product_id' => $value['product_id'],
					'product_quantity' => $value['product_quantity'],
					'coupon_code'=>$coupon_code,
					'price_now'=>$value['product_price'],
					'name' => $name,
					'sodienthoai' => $sodienthoai,
					'email' => $email,
					'diachi' => $diachi,
					'noidung' => $noidung

				);
				$id = $value['product_id'];
				$cond = "id_product='$id'";
				$quantity = $value['product_quantity'];
				$quantity_max=$value['max_quantity'];
				$data = array(
					'quantity_product' => (int)$quantity_max - $quantity
				);
				
				$coupon_id = $_POST['coupon_id'];
				$cond_coupon = "coupon_id='$coupon_id'";
				
				$coupon_number=$_POST['coupon_number'];
				$data_coupon = array(
					'coupon_number' => (int)$coupon_number - 1
				);
				$result_order_details = $ordermodel->insert_order_details($table_order_details, $data_details);
				$result = $ordermodel->update_quantity($table, $data, $cond);
				$result_coupon = $ordermodel->update_coupon($table_coupon, $data_coupon, $cond_coupon);
			}
			unset($_SESSION["shopping_cart"]);
		}
		if ($result_order_details) {

			$message['msg'] = "Đặt hàng thành công";
			header("Location:" . BASE_URL . "cart?msg=" . urlencode(serialize($message)));
		}
	}
}
