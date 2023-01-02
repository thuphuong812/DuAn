<?php 
/**
 * 
 */
class policy extends DController
{
	
	public function __construct()
	{
		$data=array();
		$message=array();
		parent::__construct();
	}
	
	public function index(){
		
	}
	
    //privacy_policy
	public function edit_privacy_policy($id){

		$table='tbl_privacy_policy';
		$cond="id_privacy_policy='$id'";
		$policymodel=$this->load->model('policymodel');
		$data['privacy_policy_by_id']=$policymodel->privacy_policy_by_id($table,$cond);
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/policy/privacy_policy/edit_privacy_policy',$data);
		$this->load->view('cpanel/footer');
	}
	public function update_privacy_policy($id){

		$table='tbl_privacy_policy';
		$cond="id_privacy_policy='$id'";
		$content=$_POST['content'];


		$data=array(
			'content_privacy_policy'=>$content
		

		);
		$policymodel=$this->load->model('policymodel');
		$result=$policymodel->updated_privacy_policy($table,$data,$cond);
		if ($result==1) {
			
			header("Location:".BASE_URL."index/privacy_policy");
		}
		else{
			$message['msg']="Cập nhật chính sách bảo mật thất bại";
			header("Location:".BASE_URL."policy/edit_privacy_policy/$id?msg=".urlencode(serialize($message)));
		}
	}
    //return_policy
    public function edit_return_policy($id){

		$table='tbl_return_policy';
		$cond="id_return_policy='$id'";
		$policymodel=$this->load->model('policymodel');
		$data['return_policy_by_id']=$policymodel->return_policy_by_id($table,$cond);
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/policy/return_policy/edit_return_policy',$data);
		$this->load->view('cpanel/footer');
	}
	public function update_return_policy($id){

		$table='tbl_return_policy';
		$cond="id_return_policy='$id'";
		$content=$_POST['content'];


		$data=array(
			'content_return_policy'=>$content
		

		);
		$policymodel=$this->load->model('policymodel');
		$result=$policymodel->updated_return_policy($table,$data,$cond);
		if ($result==1) {
		
			header("Location:".BASE_URL."index/return_policy");
		}
		else{
			$message['msg']="Cập nhật chính sách đổi trả thất bại";
			header("Location:".BASE_URL."policy/edit_return_policy/$id?msg=".urlencode(serialize($message)));
		}
	}

    //warrantly_policy
    public function edit_warrantly_policy($id){

		$table='tbl_warrantly_policy';
		$cond="id_warrantly_policy='$id'";
		$policymodel=$this->load->model('policymodel');
		$data['warrantly_policy_by_id']=$policymodel->warrantly_policy_by_id($table,$cond);
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/policy/warrantly_policy/edit_warrantly_policy',$data);
		$this->load->view('cpanel/footer');
	}
	public function update_warrantly_policy($id){

		$table='tbl_warrantly_policy';
		$cond="id_warrantly_policy='$id'";
		$content=$_POST['content'];


		$data=array(
			'content_warrantly_policy'=>$content
		

		);
		$policymodel=$this->load->model('policymodel');
		$result=$policymodel->updated_warrantly_policy($table,$data,$cond);
		if ($result==1) {
			
			header("Location:".BASE_URL."index/warrantly_policy");
		}
		else{
			$message['msg']="Cập nhật chính sách bảo hành thất bại";
			header("Location:".BASE_URL."policy/edit_warrantly_policy/$id?msg=".urlencode(serialize($message)));
		}
	}


	
}
?>