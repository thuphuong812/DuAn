<?php 
/**
 * 
 */
class tintuc extends DController
{
	public function __construct()
	{
		$data=array();
		parent::__construct();
	}
	public function index(){
		
	}


	public function tatcatintuc(){
		Session::init();
		//seo
		$this->load->title="Tất cả tin tức- SallyShop.com";
		$this->load->desc="Tất cả tin tức về thế giới sách truyện - SallyShop.com";
		$this->load->image = BASE_URL.'public/frontend/assets/img/favicon.png';
		
        $table_category_post = 'tbl_category_post';
		$postmodel = $this->load->model('postmodel');
		$data['category_post'] = $postmodel->category_home_post($table_category_post);
		$table='tbl_category_product';
		$categorymodel=$this->load->model('categorymodel');
        $data['category']=$categorymodel->category_home($table);
		$table_post='tbl_post';
		$cond="$table_post.id_category_post=$table_category_post.id_category_post";
		$data['list_post']=$postmodel->listpost_home($table_post,$table_category_post,$cond);
        $table_contact= 'tbl_contact';
		$contactmodel = $this->load->model('contactmodel');
		$data['contact'] = $contactmodel->contact($table_contact);
		$this->load->view('header',$data);
		$this->load->view('listpost',$data);
		$this->load->view('footer',$data);
	}

	public function danhmuc($id){
		Session::init();
        $table_category_post = 'tbl_category_post';
		$postmodel = $this->load->model('postmodel');
		$data['category_post'] = $postmodel->category_home_post($table_category_post);
		$table='tbl_category_product';
		$categorymodel=$this->load->model('categorymodel');
        $data['category']=$categorymodel->category_home($table);
		$table_post='tbl_post';
		$data['postbyid']=$postmodel->postbyid_home($table_category_post,$table_post,$id);
		$table_contact= 'tbl_contact';
		$contactmodel = $this->load->model('contactmodel');
		$data['contact'] = $contactmodel->contact($table_contact);
        $this->load->view('header',$data);
		$this->load->view('categorypost',$data);
		$this->load->view('footer',$data);
	}
	public function detail_post($id){
		Session::init();
        $table_category_post = 'tbl_category_post';
		$postmodel = $this->load->model('postmodel');
		$data['category_post'] = $postmodel->category_home_post($table_category_post);
		$table='tbl_category_product';
		$categorymodel=$this->load->model('categorymodel');
        $data['category']=$categorymodel->category_home($table);
		
		$table_post='tbl_post';
		$cond="$table_post.id_category_post=$table_category_post.id_category_post AND $table_post.id_post='$id'";
		$data['detail_post']=$postmodel->detail_post_home($table_category_post,$table_post,$cond);
	
		foreach($data['detail_post'] as $key =>$cate){
			$id_cate=$cate['id_category_post'];
			$this->load->title=$cate['title_post'];
			$this->load->desc=$cate['desc_post'];
			$this->load->image = BASE_URL.'public/uploads/post/'.$cate['image_post'];
		}
		$cond_related="$table_post.id_category_post=$table_category_post.id_category_post AND $table_category_post.id_category_post='$id_cate' AND $table_post.id_post NOT IN('$id')";
		
		$data['related'] = $postmodel->related_post_home($table_category_post,$table_post,$cond_related);

		$table_comment='tbl_comment';
        $cond_comment="$table_post.id_post=$table_comment.id_post AND $table_post.id_post='$id'";
		$data['comment'] = $postmodel->comment($table_comment,$table_post,$cond_comment);
		$table_contact= 'tbl_contact';
		$contactmodel = $this->load->model('contactmodel');
		$data['contact'] = $contactmodel->contact($table_contact);
		$this->load->view('header',$data);
		// $this->load->view('slider');
		$this->load->view('detailpost',$data);
		$this->load->view('footer',$data);
	}

	public function insert_comment(){
		Session::init();
        $name=$_POST['name'];
		$comment =$_POST['comment'];
		$email =$_POST['email'];
		$id_post =$_POST['id_post_comment'];
		date_default_timezone_set('asia/Ho_chi_minh');
		$date=date("d/m/Y");
		$hour=date("h:i:sa");
		$date_comment=$date.' '.$hour;
		
		
		$table_comment='tbl_comment';
		$data=array(
			'name_comment'=>$name,
			'comment'=>$comment,
			'id_post'=>$id_post,
			'email_comment'=>$email,
			'createdDate'=>$date_comment
		);
		$postmodel=$this->load->model('postmodel');
		$result=$postmodel->insert_comment($table_comment,$data);
		if ($result==1) {
			
			$message['msg']="Bình luận thành công";
			header("Location:".BASE_URL."tintuc/detail_post/$id_post?msg=".urlencode(serialize($message)));
		}
		else{
			$message['msg']="Bình luận thất bại";
			
			header("Location:".BASE_URL."tintuc/detail_post/$id_post?msg=".urlencode(serialize($message)));
		}
    }
	
}
?>