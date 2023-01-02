<?php 
/**
 * 
 */
class category extends DController
{
	

	
	public function __construct()
	{
		$data=array();
		$message=array();
		parent::__construct();
	}
	
	public function index(){
		$this->add_category_product();
	}
	public function add_category_product(){
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/category/add_category_product');
		$this->load->view('cpanel/footer');
	}
	public function insert_category_product(){
		$title=$_POST['title_category_product'];
		$desc =$_POST['desc_category_product'];
		$table='tbl_category_product';
		$data=array(
			'title_category_product'=>$title,
			'desc_category_product'=>$desc

		);
		$categorymodel=$this->load->model('categorymodel');
		$result=$categorymodel->insertcategory($table,$data);
		if ($result==1) {
			$message['msg']="Thêm danh mục sản phẩm thành công";
			header("Location:".BASE_URL."category/list_category_product?msg=".urlencode(serialize($message)));
		}
		else{
			$message['msg']="Thêm danh mục sản phẩm thất bại";
			header("Location:".BASE_URL."category/list_category_product?msg=".urlencode(serialize($message)));
		}
	}
	public function list_category_product(){
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$table='tbl_category_product';

		$categorymodel=$this->load->model('categorymodel');

		$data['category']=$categorymodel->category($table);
		$this->load->view('cpanel/category/list_category_product',$data);

		$this->load->view('cpanel/footer');
	}
	public function delete_category_product($id){
		
		$table='tbl_category_product';
		$cond="id_category_product='$id'";
		$categorymodel=$this->load->model('categorymodel');

		$result=$categorymodel->deletecategory($table,$cond);
		if ($result==1) {
			$message['msg']="Xóa danh mục sản phẩm thành công";
			header("Location:".BASE_URL."category/list_category_product?msg=".urlencode(serialize($message)));
		}
		else{
			$message['msg']="Xóa danh mục sản phẩm thất bại";
			header("Location:".BASE_URL."category/list_category_product?msg=".urlencode(serialize($message)));
		}
	}
	public function edit_category_product($id){

		$table='tbl_category_product';
		$cond="id_category_product='$id'";
		$categorymodel=$this->load->model('categorymodel');
		$data['categorybyid']=$categorymodel->categorybyid($table,$cond);
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/category/edit_category_product',$data);
		$this->load->view('cpanel/footer');
	}
	public function update_category_product($id){

		$table='tbl_category_product';
		$cond="id_category_product='$id'";
		$title=$_POST['title_category_product'];
		$desc =$_POST['desc_category_product'];
		$data=array(
			'title_category_product'=>$title,
			'desc_category_product'=>$desc

		);
		$categorymodel=$this->load->model('categorymodel');
		$result=$categorymodel->updatecategory($table,$data,$cond);
		if ($result==1) {
			$message['msg']="Cập nhật danh mục sản phẩm thành công";
			header("Location:".BASE_URL."category/list_category_product?msg=".urlencode(serialize($message)));
		}
		else{
			$message['msg']="Cập nhật danh mục sản phẩm thất bại";
			header("Location:".BASE_URL."category/list_category_product?msg=".urlencode(serialize($message)));
		}
	}


}
?>