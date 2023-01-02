<?php

/**
 * 
 */
class khachhang extends DController
{
	public function __construct()
	{
		// $data=array();
		parent::__construct();
	}
	public function index()
	{
		
	}
	public function lichsudonhang()
	{
		// $table = 'tbl_category_product';
		// $categorymodel = $this->load->model('categorymodel');
		// $data['category'] = $categorymodel->category_home($table);
		
		// $table_post = 'tbl_category_post';
		// $postmodel = $this->load->model('postmodel');
		// $data['category_post'] = $postmodel->category_home_post($table_post);
		
		// $table_product = 'tbl_product';
		// $productmodel = $this->load->model('productmodel');
		// $data['product_home'] = $productmodel->list_product_index($table_product);
		// $data['product_new'] = $productmodel->new_product_index($table_product);
		// $post='tbl_post';
		// $data['postnew']=$postmodel->post_new($post);
		// $this->load->view('header', $data);
		// $this->load->view('slider');
		// $this->load->view('home',$data);
		// $this->load->view('footer');
	}
    public function dangxuat(){
		
        Session::init();
        Session::unset('customer');
        $message['msg'] = "Đăng xuất tài khoản thành công";
        header('Location:'.BASE_URL."khachhang/dangnhap?msg=".urlencode(serialize($message)));	
    
    
    
}
    public function login_customer(){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $table_customer = 'tbl_customers';
        $customermodel = $this->load->model('customermodel');

        $count = $customermodel->login($table_customer,$username,$password);

        if($count==0){
            $message['msg'] = "Tên tài khoản hoặc mật khẩu sai,xin kiểm tra lại";
            header('Location:'.BASE_URL."khachhang/dangnhap?msg=".urlencode(serialize($message)));
        }else{

            $result = $customermodel->getLogin($table_customer,$username,$password);
            Session::init();
            Session::set('customer',true);
            Session::set('customer_name',$result[0]['customer_name']);
            Session::set('customer_id',$result[0]['customer_id']);
            $message['msg'] = "Đăng nhập tài khoản thành công";
            header('Location:'.BASE_URL."khachhang/dangnhap?msg=".urlencode(serialize($message)));
        }
    }
 
	public function dangnhap()
	{
        
		$table = 'tbl_category_product';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category_home($table);
		
		$table_post = 'tbl_category_post';
		$postmodel = $this->load->model('postmodel');
		$data['category_post'] = $postmodel->category_home_post($table_post);
		$post='tbl_post';
		$data['postnew']=$postmodel->post_new($post);
        Session::init();
		$this->load->view('header', $data);
		// $this->load->view('slider');
		$this->load->view('customerlogin');
		$this->load->view('footer');
	}
    public function insert_dangky(){
        $name=$_POST['txtname'];
		$address =$_POST['txtdiachi'];
		$phone =$_POST['txtsodienthoai'];
		$email =$_POST['txtemail'];
		$password =$_POST['txtpassword'];
	

		
		$table_customer='tbl_customers';
		$data=array(
			'customer_name'=>$name,
			'customer_phone'=>$phone,
			'customer_address'=>$address,
			'customer_email'=>$email,
			'customer_password'=>md5($password)
		);
		$customermodel=$this->load->model('customermodel');
		$result=$customermodel->insert_customer($table_customer,$data);
		if ($result==1) {
			
			$message['msg']="Đăng ký thành công";
			header("Location:".BASE_URL."khachhang/dangnhap?msg=".urlencode(serialize($message)));
		}
		else{
			$message['msg']="Đăng ký thất bại";
			header("Location:".BASE_URL."khachhang/dangnhap?msg=".urlencode(serialize($message)));
		}
    }
}
