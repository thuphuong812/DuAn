<?php

/**
 * 
 */
class sanpham extends DController
{
	public function __construct()
	{
		$data = array();
		parent::__construct();
	}
	public function index()
	{
	}
	public function tatcatruyen()
	{
		Session::init();
		$table = 'tbl_category_product';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category_home($table);
		$table_post = 'tbl_category_post';
		$postmodel = $this->load->model('postmodel');
		$data['category_post'] = $postmodel->category_home_post($table_post);
		$table_product = 'tbl_product';
		$productmodel = $this->load->model('productmodel');
		$data['list_product'] = $productmodel->list_product_home($table_product);
		$table_contact = 'tbl_contact';
		$contactmodel = $this->load->model('contactmodel');
		$data['contact'] = $contactmodel->contact($table_contact);
		$this->load->view('header', $data);
		$this->load->view('listproduct', $data);
		$this->load->view('footer', $data);
	}
	// public function sanphamhot()
	// {

	// 	$table = 'tbl_category_product';
	// 	$categorymodel = $this->load->model('categorymodel');
	// 	$data['category'] = $categorymodel->category_home($table);
	// 	$table_post = 'tbl_category_post';
	// 	$postmodel = $this->load->model('postmodel');
	// 	$data['category_post'] = $postmodel->category_home_post($table_post);
	// 	$table_product = 'tbl_product';
	// 	$productmodel = $this->load->model('productmodel');
	// 	$data['product_hot'] = $productmodel->product_hot($table_product);
	// 	// $total_records = 0;
	// 	// $limit = 8;
	// 	// $total_records = count($data);
	// 	// $total_pages = ceil($total_records / $limit);
	// 	// $current_page = 1;
	// 	// if (isset($_REQUEST["trang"]) && is_numeric($_REQUEST["trang"])) {
	// 	// 	$current_page = $_REQUEST["trang"];
	// 	// }
	// 	// if ($current_page <= 0)
	// 	// 	$current_page = 1;
	// 	// if ($current_page > $total_pages)
	// 	// 	$current_page = $total_pages;
	// 	// $start = ($current_page - 1) * $limit;
		
	// 	// $data['product_hot_page'] = $productmodel->product_hot_page($table_product,$start,$limit);

	// 	$table_contact = 'tbl_contact';
	// 	$contactmodel = $this->load->model('contactmodel');
	// 	$data['contact'] = $contactmodel->contact($table_contact);
	// 	$this->load->view('header', $data);
	// 	$this->load->view('producthot', $data);
	// 	$this->load->view('footer', $data);
	// }

	// public function sanphamdecu()
	// {

	// 	$table = 'tbl_category_product';
	// 	$categorymodel = $this->load->model('categorymodel');
	// 	$data['category'] = $categorymodel->category_home($table);
	// 	$table_post = 'tbl_category_post';
	// 	$postmodel = $this->load->model('postmodel');
	// 	$data['category_post'] = $postmodel->category_home_post($table_post);
	// 	$table_product = 'tbl_product';
	// 	$productmodel = $this->load->model('productmodel');
	// 	$data['product_new'] = $productmodel->product_new($table_product);
	// 	$table_contact = 'tbl_contact';
	// 	$contactmodel = $this->load->model('contactmodel');
	// 	$data['contact'] = $contactmodel->contact($table_contact);
	// 	$this->load->view('header', $data);
	// 	$this->load->view('productnew', $data);
	// 	$this->load->view('footer', $data);
	// }
	public function danhmuc($id)
	{
		Session::init();
		$table = 'tbl_category_product';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category_home($table);
		$table_post = 'tbl_category_post';
		$postmodel = $this->load->model('postmodel');
		$data['category_post'] = $postmodel->category_home_post($table_post);
		$table_product = 'tbl_product';
		$productmodel = $this->load->model('productmodel');
		$data['category_by_id'] = $productmodel->category_home_by_id($table, $table_product, $id);
		$table_contact = 'tbl_contact';
		$contactmodel = $this->load->model('contactmodel');
		$data['contact'] = $contactmodel->contact($table_contact);
		$this->load->view('header', $data);
		$this->load->view('categoryproduct', $data);
		$this->load->view('footer', $data);
	}
	public function detail_product($id)
	{
		Session::init();
		$table = 'tbl_category_product';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category_home($table);
		$table_post = 'tbl_category_post';
		$postmodel = $this->load->model('postmodel');
		$data['category_post'] = $postmodel->category_home_post($table_post);

		$table_product = 'tbl_product';
		$cond = "$table_product.id_category_product=$table.id_category_product AND $table_product.id_product='$id'";

		$productmodel = $this->load->model('productmodel');
		$data['detail_product'] = $productmodel->detail_product_home($table, $table_product, $cond);

		foreach ($data['detail_product'] as $key => $cate) {
			$id_cate = $cate['id_category_product'];
			$this->load->title = $cate['title_product'];
			$this->load->desc = $cate['desc_product'];
			$this->load->image = BASE_URL . 'public/uploads/product/' . $cate['image_product'];
		}
		$cond_related = "$table_product.id_category_product=$table.id_category_product AND $table.id_category_product='$id_cate' AND $table_product.id_product NOT IN('$id')";

		$data['related'] = $productmodel->related_product_home($table, $table_product, $cond_related);
		$table_comment = 'tbl_comment';
		$cond_comment = "$table_product.id_product=$table_comment.id_product AND $table_product.id_product='$id'";
		$data['comment'] = $postmodel->comment($table_comment, $table_product, $cond_comment);
		$table_contact = 'tbl_contact';
		$contactmodel = $this->load->model('contactmodel');
		$data['contact'] = $contactmodel->contact($table_contact);
		$this->load->view('header', $data);
		$this->load->view('detailproduct', $data);
		$this->load->view('footer', $data);
	}
	public function insert_comment()
	{
		Session::init();
		$name = $_POST['name'];
		$comment = $_POST['comment'];
		$email = $_POST['email'];
		$id_product = $_POST['id_product_comment'];
		date_default_timezone_set('asia/Ho_chi_minh');
		$date = date("d/m/Y");
		$hour = date("h:i:sa");
		$date_comment = $date . ' ' . $hour;


		$table_comment = 'tbl_comment';
		$data = array(
			'name_comment' => $name,
			'comment' => $comment,
			'id_product' => $id_product,
			'email_comment' => $email,
			'createdDate' => $date_comment
		);
		$productmodel = $this->load->model('productmodel');
		$result = $productmodel->insert_comment($table_comment, $data);
		if ($result == 1) {

			$message['msg'] = "Bình luận thành công";
			header("Location:" . BASE_URL . "sanpham/detail_product/$id_product?msg=" . urlencode(serialize($message)));
		} else {
			$message['msg'] = "Bình luận thất bại";

			header("Location:" . BASE_URL . "sanpham/detail_product/$id_product?msg=" . urlencode(serialize($message)));
		}
	}
}
