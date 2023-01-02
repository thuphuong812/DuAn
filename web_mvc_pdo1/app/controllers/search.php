<?php 
/**
 * 
 */
class search extends DController
{
	public function __construct()
	{
		$data=array();
		parent::__construct();
	}
	public function index(){
		
	}
    public function timkiem(){
		Session::init();
        $tukhoa = $_GET['tukhoa'];
        $table='tbl_category_product';
		$categorymodel=$this->load->model('categorymodel');
        $data['category']=$categorymodel->category_home($table);
        $table_post = 'tbl_category_post';
		$postmodel = $this->load->model('postmodel');
		$data['category_post'] = $postmodel->category_home_post($table_post);
        $table_product = 'tbl_product';
		$post='tbl_post';
        $productmodel=$this->load->model('productmodel');
        $data['search_product'] = $productmodel->searchhome($table_product,$tukhoa);
		$data['search_post']=$postmodel->searchhome($post,$tukhoa);
		$table_contact= 'tbl_contact';
		$contactmodel = $this->load->model('contactmodel');
		$data['contact'] = $contactmodel->contact($table_contact);
        $this->load->view('header',$data);
		$this->load->view('search',$data);
		$this->load->view('footer',$data);
	}
   
	
	
}
?>