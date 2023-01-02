<?php 
/**
 * 
 */
class slider extends DController
{
	

	
	public function __construct()
	{
		$data=array();
		$message=array();
		parent::__construct();
	}
	
	public function index(){
		$this->add_slider();
	}
	public function add_slider(){
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/slider/add_slider');
		$this->load->view('cpanel/footer');
	}
	public function insert_slider(){
		$title=$_POST['title_slider'];
		$desc =$_POST['desc_slider'];
		$image = $_FILES['image_slider']['name'];
		$tmp_image = $_FILES['image_slider']['tmp_name'];
		
		$div = explode('.', $image);
		$file_ext = strtolower(end($div));
		$unique_image = $div[0].time().'.'.$file_ext;

		$path_uploads = "public/uploads/slider/".$unique_image;
		
		$table='tbl_slider';
		$data=array(
			'title_slider'=>$title,
			'desc_slider'=>$desc,
			'image_slider'=>$unique_image,
		);
		$slidermodel=$this->load->model('slidermodel');
		$result=$slidermodel->insertslider($table,$data);
		if ($result==1) {
			move_uploaded_file($tmp_image, $path_uploads);
			$message['msg']="Thêm slider thành công";
			header("Location:".BASE_URL."slider/list_slider?msg=".urlencode(serialize($message)));
		}
		else{
			$message['msg']="Thêm slider thất bại";
			header("Location:".BASE_URL."slider/list_slider?msg=".urlencode(serialize($message)));
		}
	}
	public function list_slider(){
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$table_slider='tbl_slider';
		

		$slidermodel=$this->load->model('slidermodel');

		$data['slider']=$slidermodel->slider($table_slider);
		$this->load->view('cpanel/slider/list_slider',$data);

		$this->load->view('cpanel/footer');
	}
	public function delete_slider($id){
		
		$table='tbl_slider';
		$cond="id_slider='$id'";
		$slidermodel=$this->load->model('slidermodel');

		$data['sliderbyid'] = $slidermodel->sliderbyid($table,$cond);
		foreach ($data['sliderbyid'] as $key => $value) {
			$path_unlink = "public/uploads/slider/";
			unlink($path_unlink.$value['image_slider']);
		}
		$result=$slidermodel->deleteslider($table,$cond);

		if ($result==1) {
			
			$message['msg']="Xóa slider thành công";
			header("Location:".BASE_URL."slider/list_slider?msg=".urlencode(serialize($message)));
		}
		else{
			$message['msg']="Xóa slider thất bại";
			header("Location:".BASE_URL."slider/list_slider?msg=".urlencode(serialize($message)));
		}
	}
	public function edit_slider($id){

		$table='tbl_slider';
		$cond="id_slider='$id'";
		$slidermodel=$this->load->model('slidermodel');
		$data['sliderbyid']=$slidermodel->sliderbyid($table,$cond);
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/slider/edit_slider',$data);
		$this->load->view('cpanel/footer');
	}
	public function update_slider($id){
		$cond="id_slider='$id'";
		$table='tbl_slider';
		$slidermodel=$this->load->model('slidermodel');

		$title=$_POST['title_slider'];
		$desc =$_POST['desc_slider'];
		
		$image = $_FILES['image_slider']['name'];
		$tmp_image = $_FILES['image_slider']['tmp_name'];
		
		$div = explode('.', $image);
		$file_ext = strtolower(end($div));
		$unique_image = $div[0].time().'.'.$file_ext;
		$path_uploads = "public/uploads/slider/".$unique_image;
		
		if($image){
			$data['sliderbyid'] = $slidermodel->sliderbyid($table,$cond);
			foreach ($data['sliderbyid'] as $key => $value) {
				$path_unlink = "public/uploads/slider/";
				unlink($path_unlink.$value['image_slider']);
			}
			$data = array(
				'title_slider' => $title,
				'desc_slider' => $desc,
				'image_slider' => $unique_image,
				
			);
			move_uploaded_file($tmp_image, $path_uploads);
		}else{
			$data = array(
				'title_slider' => $title,
				'desc_slider' => $desc,
				
			);
		}
		
		
		$result=$slidermodel->updateslider($table,$data,$cond);

		if ($result==1) {
			
			$message['msg']="Cập nhật slider thành công";
			header("Location:".BASE_URL."slider/list_slider?msg=".urlencode(serialize($message)));
		}
		else{
			$message['msg']="Cập nhật slider thất bại";
			header("Location:".BASE_URL."slider/list_slider?msg=".urlencode(serialize($message)));
		}
	}

	

}
?>