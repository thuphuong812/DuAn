<?php 
/**
 * 
 */
class guide extends DController
{
	
	public function __construct()
	{
		$data=array();
		$message=array();
		parent::__construct();
	}
	
	public function index(){
		
	}
	
	public function edit_ordering_guide($id){

		$table='tbl_ordering_guide';
		$cond="id_ordering_guide='$id'";
		$guidemodel=$this->load->model('guidemodel');
		$data['ordering_guide_by_id']=$guidemodel->ordering_guide_by_id($table,$cond);
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/guide/ordering_guide/edit_ordering_guide',$data);
		$this->load->view('cpanel/footer');
	}
	public function update_ordering_guide($id){

		$table='tbl_ordering_guide';
		$cond="id_ordering_guide='$id'";
		$content=$_POST['content'];


		$data=array(
			'content_ordering_guide'=>$content
		

		);
		$guidemodel=$this->load->model('guidemodel');
		$result=$guidemodel->updated_ordering_guide($table,$data,$cond);
		if ($result==1) {
			$message['msg']="Cập nhật câu hỏi thường gặp thành công";
			header("Location:".BASE_URL."index/ordering_guide");
		}
		else{
			$message['msg']="Cập nhật câu hỏi thường gặp thất bại";
			header("Location:".BASE_URL."guide/edit_ordering_guide/$id?msg=".urlencode(serialize($message)));
		}
	}


	
}
?>