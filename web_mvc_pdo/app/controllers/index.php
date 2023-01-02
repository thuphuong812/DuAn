<?php

/**
 * 
 */
class index extends DController
{
	public function __construct()
	{
		// $data=array();
		parent::__construct();
	}
	public function index()
	{
		$this->homepage();
		
	}
	public function homepage()
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
		$data['product_home'] = $productmodel->list_product_index($table_product);
		$data['product_new'] = $productmodel->new_product_index($table_product);

		$post = 'tbl_post';
		$data['postnew'] = $postmodel->post_new($post);
		$table_slider = 'tbl_slider';
		$slidermodel = $this->load->model('slidermodel');
		$data['slider'] = $slidermodel->slider_home($table_slider);
		$table_contact = 'tbl_contact';
		$contactmodel = $this->load->model('contactmodel');
		$data['contact'] = $contactmodel->contact($table_contact);
		$data['all_product_hot'] = $productmodel->all_product_hot($table_product);
		$this->load->view('header', $data);
		$this->load->view('slider', $data);
		$this->load->view('product_new_home', $data);
	    $this->load->view('product_hot_home', $data);
		$this->load->view('footer', $data);
	}
	



	public function contact()
	{
		Session::init();
		$table = 'tbl_category_product';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category_home($table);
		$table_post = 'tbl_category_post';
		$postmodel = $this->load->model('postmodel');
		$data['category_post'] = $postmodel->category_home_post($table_post);
		$table_contact = 'tbl_contact';
		$contactmodel = $this->load->model('contactmodel');
		$data['contact'] = $contactmodel->contact($table_contact);
		$this->load->view('header', $data);
		$this->load->view('contact', $data);
		$this->load->view('footer', $data);
	}
	public function notfound()
	{
		$table = 'tbl_category_product';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category_home($table);
		$table_post = 'tbl_category_post';
		$postmodel = $this->load->model('postmodel');
		$data['category_post'] = $postmodel->category_home_post($table_post);
		$table_contact = 'tbl_contact';
		$contactmodel = $this->load->model('contactmodel');
		$data['contact'] = $contactmodel->contact($table_contact);
		$this->load->view('header', $data);
		$this->load->view('404');
		$this->load->view('footer', $data);
	}
	public function question()
	{
		Session::init();
		$table = 'tbl_category_product';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category_home($table);
		$table_post = 'tbl_category_post';
		$postmodel = $this->load->model('postmodel');
		$data['category_post'] = $postmodel->category_home_post($table_post);
		$table_question = 'tbl_question';
		$questionmodel = $this->load->model('questionmodel');
		$data['question'] = $questionmodel->question($table_question);
		$table_contact = 'tbl_contact';
		$contactmodel = $this->load->model('contactmodel');
		$data['contact'] = $contactmodel->contact($table_contact);
		$this->load->view('header', $data);
		$this->load->view('question', $data);
		$this->load->view('footer', $data);
	}
	public function ordering_guide()
	{
		Session::init();
		$table = 'tbl_category_product';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category_home($table);
		$table_post = 'tbl_category_post';
		$postmodel = $this->load->model('postmodel');
		$data['category_post'] = $postmodel->category_home_post($table_post);
		$table_ordering_guide = 'tbl_ordering_guide';
		$guidemodel = $this->load->model('guidemodel');
		$data['ordering_guide'] = $guidemodel->ordering_guide($table_ordering_guide);
		$table_contact = 'tbl_contact';
		$contactmodel = $this->load->model('contactmodel');
		$data['contact'] = $contactmodel->contact($table_contact);
		$this->load->view('header', $data);
		$this->load->view('ordering_guide', $data);
		$this->load->view('footer', $data);
	}
	public function privacy_policy()
	{
		Session::init();
		$table = 'tbl_category_product';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category_home($table);
		$table_post = 'tbl_category_post';
		$postmodel = $this->load->model('postmodel');
		$data['category_post'] = $postmodel->category_home_post($table_post);
		$table_privacy_policy = 'tbl_privacy_policy';
		$policymodel = $this->load->model('policymodel');
		$data['privacy_policy'] = $policymodel->privacy_policy($table_privacy_policy);
		$table_contact = 'tbl_contact';
		$contactmodel = $this->load->model('contactmodel');
		$data['contact'] = $contactmodel->contact($table_contact);
		$this->load->view('header', $data);
		$this->load->view('privacy_policy', $data);
		$this->load->view('footer', $data);
	}
	public function warrantly_policy()
	{
		Session::init();
		$table = 'tbl_category_product';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category_home($table);
		$table_post = 'tbl_category_post';
		$postmodel = $this->load->model('postmodel');
		$data['category_post'] = $postmodel->category_home_post($table_post);
		$table_warrantly_policy = 'tbl_warrantly_policy';
		$policymodel = $this->load->model('policymodel');
		$data['warrantly_policy'] = $policymodel->warrantly_policy($table_warrantly_policy);
		$table_contact = 'tbl_contact';
		$contactmodel = $this->load->model('contactmodel');
		$data['contact'] = $contactmodel->contact($table_contact);
		$this->load->view('header', $data);
		$this->load->view('warrantly_policy', $data);
		$this->load->view('footer', $data);
	}
	public function return_policy()
	{
		Session::init();
		$table = 'tbl_category_product';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category_home($table);
		$table_post = 'tbl_category_post';
		$postmodel = $this->load->model('postmodel');
		$data['category_post'] = $postmodel->category_home_post($table_post);
		$table_return_policy = 'tbl_return_policy';
		$policymodel = $this->load->model('policymodel');
		$data['return_policy'] = $policymodel->return_policy($table_return_policy);
		$table_contact = 'tbl_contact';
		$contactmodel = $this->load->model('contactmodel');
		$data['contact'] = $contactmodel->contact($table_contact);
		$this->load->view('header', $data);
		$this->load->view('return_policy', $data);
		$this->load->view('footer', $data);
	}
	public function coupon()
	{
		Session::init();
		$table = 'tbl_category_product';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category_home($table);
		$table_post = 'tbl_category_post';
		$postmodel = $this->load->model('postmodel');
		$data['category_post'] = $postmodel->category_home_post($table_post);
		$tbl_coupon = 'tbl_coupon';
		$couponmodel = $this->load->model('couponmodel');
		$data['coupon'] = $couponmodel->coupon_home($tbl_coupon);
		$table_contact = 'tbl_contact';
		$contactmodel = $this->load->model('contactmodel');
		$data['contact'] = $contactmodel->contact($table_contact);
		$this->load->view('header', $data);
		$this->load->view('coupon', $data);
		$this->load->view('footer', $data);
	}
	public function load_more_product()
	{
		// $table_product = 'tbl_product';
		// $productmodel = $this->load->model('productmodel');
		// $data['all_product_hot'] = $productmodel->all_product_hot($table_product);
		
	// 	foreach($data['all_product_hot'] as $key=>$product){
	// 		$lastid=$product['id_product'];
	// 	}
	// 	$output='';
	// 	if(!empty($data['all_product_hot'])){
	// 	$this->load->view('product_hot_home', $data);
		
		
	// 	$output.='<div id="load_more" class="order_button">
	// 	<p></p>
	// 	<button type="button" name="load_more_button" data-id="'.$lastid.'" id="load_more_button"  >Xem thêm sản phẩm</button>
	// </div>';
	// echo $output;}
	// else{
	// 	$output.='<div id="load_more" class="order_button">
	// 	<p></p>
	// 	<button type="button" name="load_more_button" data-id="'.$lastid.'"  >Dữ liệu đang cập nhật thêm</button>
	// </div>';

	// echo $output;}
	}
}

	


