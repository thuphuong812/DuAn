<?php 
/**
 * 
 */
class order extends DController
{
	
	public function __construct (){
		parent::__construct();
		
	}
	public function index(){
		
	}
	public function order_new(){
		Session::checkSession();
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$ordermodel=$this->load->model('ordermodel');
		$table_order='tbl_order';
		$data['order']=$ordermodel->list_order($table_order);
		$this->load->view('cpanel/order/order_new',$data);
		$this->load->view('cpanel/footer');
	}

	public function order_processed(){
		Session::checkSession();
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$ordermodel=$this->load->model('ordermodel');
		$table_order='tbl_order';
		$data['order_processed']=$ordermodel->list_order_processed($table_order);
		$this->load->view('cpanel/order/order_processed',$data);
		$this->load->view('cpanel/footer');
	}

	public function order_details($order_code){
		Session::checkSession();
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/search');
		$this->load->view('cpanel/menu');
		$ordermodel=$this->load->model('ordermodel');
		$table_order_details='tbl_order_details';
		$table_product="tbl_product";
		$table_coupon="tbl_coupon";
		$table_order="tbl_order";
		$cond="$table_product.id_product=$table_order_details.product_id AND $table_order_details.order_code='$order_code' AND $table_order.order_code=$table_order_details.order_code";
		$cond_infor="$table_order_details.order_code='$order_code'";
		$data['order_details']=$ordermodel->list_order_details($table_product,$table_order_details,$table_order,$cond);
		$data['order_infor']=$ordermodel->list_infor($table_order_details,$cond_infor);
		$cond_coupon="$table_coupon.coupon_code=$table_order_details.coupon_code";
		$data['coupon_code']=$ordermodel->coupon_code($table_coupon,$table_order_details,$cond_coupon);
		$this->load->view('cpanel/order/orderdetails',$data);
		$this->load->view('cpanel/footer');
	} 
	public function order_confirm($order_code){
		$ordermodel=$this->load->model('ordermodel');
		$table_order='tbl_order';
		$cond="$table_order.order_code='$order_code'";
		$data=array(
			'order_status'=>1
		);
		$result=$ordermodel->order_confirm($table_order,$data,$cond);
		if ($result==1) {
			$message['msg']="Đã xử lý đơn hàng thành công";
			header("Location:".BASE_URL."order/order_new?msg=".urlencode(serialize($message)));
		}
		else{
			$message['msg']="Đã xử lý đơn hàng thất bại";
			header("Location:".BASE_URL."order/order_new?msg=".urlencode(serialize($message)));
		}
	}
	public function delete_order($id){
		
		$table='tbl_order';
		$cond="order_id='$id'";
		$ordermodel=$this->load->model('ordermodel');

		$result=$ordermodel->delete_order($table,$cond);
		if ($result==1) {
			$message['msg']="Xóa đơn hàng thành công";
			header("Location:".BASE_URL."order/order_processed?msg=".urlencode(serialize($message)));
		}
		else{
			$message['msg']="Xóa đơn hàng thất bại";
			header("Location:".BASE_URL."order/order_processed?msg=".urlencode(serialize($message)));
		}
	}

}
?>