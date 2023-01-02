<?php 
/**
 * 
 */
class question extends DController
{
	
	public function __construct()
	{
		$data=array();
		$message=array();
		parent::__construct();
	}
	
	public function index(){
		$this->add_question();
	}
	

	public function add_question(){
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/question/add_question');
		$this->load->view('cpanel/footer');
	}
	public function insert_question(){
		$question=$_POST['question'];
		$answer =$_POST['answer'];
		$table='tbl_question';
		$data=array(
			'question'=>$question,
			'answer'=>$answer

		);
		$questionmodel=$this->load->model('questionmodel');
		$result=$questionmodel->insertquestion($table,$data);
		if ($result==1) {
			$message['msg']="Thêm câu hỏi thường gặp thành công";
			header("Location:".BASE_URL."question/list_question?msg=".urlencode(serialize($message)));
		}
		else{
			$message['msg']="Thêm câu hỏi thường gặp thất bại";
			header("Location:".BASE_URL."question/list_question?msg=".urlencode(serialize($message)));
		}
	}
	public function list_question(){
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$table='tbl_question';

		$questionmodel=$this->load->model('questionmodel');

		$data['question']=$questionmodel->question($table);
		$this->load->view('cpanel/question/list_question',$data);

		$this->load->view('cpanel/footer');
	}
	public function delete_question($id){
		
		$table='tbl_question';
		$cond="id_question='$id'";
		$questionmodel=$this->load->model('questionmodel');

		$result=$questionmodel->deletequestion($table,$cond);
		if ($result==1) {
			$message['msg']="Xóa câu hỏi thường gặp thành công";
			header("Location:".BASE_URL."question/list_question?msg=".urlencode(serialize($message)));
		}
		else{
			$message['msg']="Xóa câu hỏi thường gặp thất bại";
			header("Location:".BASE_URL."question/list_question?msg=".urlencode(serialize($message)));
		}
	}
	public function edit_question($id){

		$table='tbl_question';
		$cond="id_question='$id'";
		$questionmodel=$this->load->model('questionmodel');
		$data['questionbyid']=$questionmodel->questionbyid($table,$cond);
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/question/edit_question',$data);
		$this->load->view('cpanel/footer');
	}
	public function update_question($id){

		$table='tbl_question';
		$cond="id_question='$id'";
		$question=$_POST['question'];
		$answer =$_POST['answer'];

		$data=array(
			'question'=>$question,
			'answer'=>$answer

		);
		$questionmodel=$this->load->model('questionmodel');
		$result=$questionmodel->updatequestion($table,$data,$cond);
		if ($result==1) {
			$message['msg']="Cập nhật câu hỏi thường gặp thành công";
			header("Location:".BASE_URL."question/list_question?msg=".urlencode(serialize($message)));
		}
		else{
			$message['msg']="Cập nhật câu hỏi thường gặp thất bại";
			header("Location:".BASE_URL."question/list_question?msg=".urlencode(serialize($message)));
		}
	}


	
}
?>