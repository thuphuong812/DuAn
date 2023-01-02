<?php 
/**
 * 
 */
class product extends DController
{
	

	
	public function __construct()
	{
		$data=array();
		$message=array();
		parent::__construct();
	}
	
	public function index(){
		$this->add_product();
	}
	public function add_product(){
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$table='tbl_category_product';
		
		$categorymodel=$this->load->model('categorymodel');
		$data['category']=$categorymodel->category($table);
		$this->load->view('cpanel/product/add_product',$data);
		$this->load->view('cpanel/footer');
	}
	public function insert_product(){
		$title=$_POST['title_product'];
		$desc =$_POST['desc_product'];
		$hot =$_POST['product_hot'];
		$content =$_POST['content_product'];
		$price =$_POST['price_product'];
		$quantity =$_POST['quantity_product'];
        $detail=$_POST['detail_product'];
		$image = $_FILES['image_product']['name'];
		$discount=$_POST['discount'];
		$price_discount=$_POST['price_discount'];
		$tmp_image = $_FILES['image_product']['tmp_name'];
		
		$div = explode('.', $image);
		$file_ext = strtolower(end($div));
		$unique_image = $div[0].time().'.'.$file_ext;

		$path_uploads = "public/uploads/product/".$unique_image;
		$category =$_POST['id_category_product'];
		$table='tbl_product';
		$data=array(
			'title_product'=>$title,
			'desc_product'=>$desc,
			'product_hot'=>$hot,
			'content_product'=>$content,
			'price_product'=>$price,
			'quantity_product'=>$quantity,
			'detail_product'=>$detail,
			'image_product'=>$unique_image,
			'discount'=>$discount,
			'price_discount'=>$price_discount,
			'id_category_product'=>$category
		);
		$productmodel=$this->load->model('productmodel');
		$result=$productmodel->insertproduct($table,$data);
		if ($result==1) {
			move_uploaded_file($tmp_image, $path_uploads);
			$message['msg']="Thêm sản phẩm thành công";
			header("Location:".BASE_URL."product/list_product?msg=".urlencode(serialize($message)));
		}
		else{
			$message['msg']="Thêm sản phẩm thất bại";
			header("Location:".BASE_URL."product/list_product?msg=".urlencode(serialize($message)));
		}
	}
	public function list_product(){
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$table_product='tbl_product';
		$table_category='tbl_category_product';

		$productmodel=$this->load->model('productmodel');

		$data['product']=$productmodel->product($table_product,$table_category);
		$this->load->view('cpanel/product/list_product',$data);

		$this->load->view('cpanel/footer');
	}
	public function delete_product($id){
		
		$table='tbl_product';
		$cond="id_product='$id'";
		$productmodel=$this->load->model('productmodel');

		$data['productbyid'] = $productmodel->productbyid($table,$cond);
		foreach ($data['productbyid'] as $key => $value) {
			$path_unlink = "public/uploads/product/";
			unlink($path_unlink.$value['image_product']);
		}
		$result=$productmodel->deleteproduct($table,$cond);

		if ($result==1) {
			
			$message['msg']="Xóa sản phẩm thành công";
			header("Location:".BASE_URL."product/list_product?msg=".urlencode(serialize($message)));
		}
		else{
			$message['msg']="Xóa sản phẩm thất bại";
			header("Location:".BASE_URL."product/list_product?msg=".urlencode(serialize($message)));
		}
	}
	public function edit_product($id){

		$table='tbl_product';
		$cond="id_product='$id'";
		$table_category="tbl_category_product";
		$productmodel=$this->load->model('productmodel');
		$categorymodel=$this->load->model('categorymodel');
		$data['productbyid']=$productmodel->productbyid($table,$cond);
		$data['category']=$categorymodel->category($table_category);
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/product/edit_product',$data);
		$this->load->view('cpanel/footer');
	}
	public function update_product($id){
		$cond="id_product='$id'";
		$table='tbl_product';
		$productmodel=$this->load->model('productmodel');

		$title=$_POST['title_product'];
		$desc =$_POST['desc_product'];
		$hot =$_POST['product_hot'];
		$content =$_POST['content_product'];
		$detail=$_POST['detail_product'];
		$price =$_POST['price_product'];
		$quantity =$_POST['quantity_product'];
		$category =$_POST['id_category_product'];
		$image = $_FILES['image_product']['name'];
		$tmp_image = $_FILES['image_product']['tmp_name'];
		$discount=$_POST['discount'];
		$price_discount=$_POST['price_discount'];
		
		$div = explode('.', $image);
		$file_ext = strtolower(end($div));
		$unique_image = $div[0].time().'.'.$file_ext;
		$path_uploads = "public/uploads/product/".$unique_image;
		
		if($image){
			$data['productbyid'] = $productmodel->productbyid($table,$cond);
			foreach ($data['productbyid'] as $key => $value) {
				$path_unlink = "public/uploads/product/";
				unlink($path_unlink.$value['image_product']);
			}
			$data = array(
				'title_product' => $title,
				'desc_product' => $desc,
				'product_hot' => $hot,
				'content_product' => $content,
				'quantity_product' => $quantity,
				'detail_product'=>$detail,
				'price_product' => $price,
				'image_product' => $unique_image,
				'discount'=>$discount,
			    'price_discount'=>$price_discount,
				'id_category_product' => $category
			);
			move_uploaded_file($tmp_image, $path_uploads);
		}else{
			$data = array(
				'title_product' => $title,
				'desc_product' => $desc,
				'product_hot' => $hot,
				'content_product' => $content,
				'quantity_product' => $quantity,
				'price_product' => $price,
				'detail_product'=>$detail,
				'discount'=>$discount,
			    'price_discount'=>$price_discount, 
				'id_category_product' => $category
			);
		}
		
		
		$result=$productmodel->updateproduct($table,$data,$cond);

		if ($result==1) {
			
			$message['msg']="Cập nhật sản phẩm thành công";
			header("Location:".BASE_URL."product/list_product?msg=".urlencode(serialize($message)));
		}
		else{
			$message['msg']="Cập nhật sản phẩm thất bại";
			header("Location:".BASE_URL."product/list_product?msg=".urlencode(serialize($message)));
		}
	}

	

}
?>