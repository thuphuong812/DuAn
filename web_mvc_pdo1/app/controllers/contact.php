<?php 
/**
 * 
 */
class contact extends DController
{
	
	public function __construct()
	{
		$data=array();
		$message=array();
		parent::__construct();
	}
	
	public function index(){
		
	}
	
   
	public function edit_contact($id){

		$table='tbl_contact';
		$cond="id_contact='$id'";
		$contactmodel=$this->load->model('contactmodel');
		$data['contact_by_id']=$contactmodel->contact_by_id($table,$cond);
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/contact/edit_contact',$data);
		$this->load->view('cpanel/footer');
	}
	public function update_contact($id){

		$table='tbl_contact';
		$cond="id_contact='$id'";
		$title=$_POST['title'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $working_time=$_POST['working_time'];
        $map=$_POST['map'];


		$data=array(
			'title_contact'=>$title,
            'address_contact'=>$address,
            'phone_contact'=>$phone,
            'email_contact'=>$email,
            'working_time_contact'=>$working_time,
            'map_contact'=>$map
		

		);
		$contactmodel=$this->load->model('contactmodel');
		$result=$contactmodel->updated_contact($table,$data,$cond);
		if ($result==1) {
			
			header("Location:".BASE_URL."index/contact");
		}
		else{
			$message['msg']="Cập nhật thất bại";
			header("Location:".BASE_URL."contact/edit_contact/$id?msg=".urlencode(serialize($message)));
		}
	}
	public function contact_me()
	{
		
		$table_contact_customer = "tbl_contact_customer";
		
		$contactmodel=$this->load->model('contactmodel');
		$name = $_POST['name'];
		$sodienthoai = $_POST['sodienthoai'];
		$diachi = $_POST['diachi'];
		$email = $_POST['email'];
		$noidung = $_POST['noidung'];
	
		date_default_timezone_set('asia/Ho_chi_minh');
		$date=date("d/m/Y");
		$hour=date("h:i:sa");
		$contact_date=$date.' '.$hour;
		$data_contact_customer=array(
			'contact_status'=>0,
			'name_customer'=>$name,
			'phone_customer'=>$sodienthoai,
			'email_customer'=>$email,
			'address_customer'=>$diachi,
			'message_customer'=>$noidung,
			'contact_date'=>$contact_date
		);
		$result_contact_customer=$contactmodel->insert_contact($table_contact_customer,$data_contact_customer);
		if($result_contact_customer){
		$message['msg']= "Gửi liên hệ thành công";
		header("Location:".BASE_URL."index/contact?msg=".urlencode(serialize($message)));
		}
	}
	public function contact_customer_new(){
		Session::checkSession();
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$contactmodel=$this->load->model('contactmodel');
		$tbl_contact_customer='tbl_contact_customer';
		$data['contact']=$contactmodel->list_contact($tbl_contact_customer);
		$this->load->view('cpanel/contact/contact_customer_new',$data);
		$this->load->view('cpanel/footer');
	}

	public function contact_customer_processed(){
		Session::checkSession();
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$contactmodel=$this->load->model('contactmodel');
		$tbl_contact_customer='tbl_contact_customer';
		$data['contact_customer_processed']=$contactmodel->list_contact_customer_processed($tbl_contact_customer);
		$this->load->view('cpanel/contact/contact_customer_processed',$data);
		$this->load->view('cpanel/footer');
	}
	public function contact_confirm($id_contact_customer){
		$contactmodel=$this->load->model('contactmodel');
		$tbl_contact_customer='tbl_contact_customer';
		$cond="$tbl_contact_customer.id_contact_customer='$id_contact_customer'";
		$data=array(
			'contact_status'=>1
		);
		$result=$contactmodel->contact_confirm($tbl_contact_customer,$data,$cond);
		if ($result==1) {
			$message['msg']="Liên hệ thành công";
			header("Location:".BASE_URL."contact/contact_customer_new?msg=".urlencode(serialize($message)));
		}
		else{
			$message['msg']="Liên hệ thất bại";
			header("Location:".BASE_URL."contact/contact_customer_new?msg=".urlencode(serialize($message)));
		}
	}
	public function delete_contact_customer($id){
		
		$table='tbl_contact_customer';
		$cond="id_contact_customer='$id'";
		$contactmodel=$this->load->model('contactmodel');

		$result=$contactmodel->delete_contact($table,$cond);
		if ($result==1) {
			$message['msg']="Xóa liên hệ thành công";
			header("Location:".BASE_URL."contact/contact_customer_processed?msg=".urlencode(serialize($message)));
		}
		else{
			$message['msg']="Xóa liên hệ thất bại";
			header("Location:".BASE_URL."contact/contact_customer_processed?msg=".urlencode(serialize($message)));
		}
	}
}
?>