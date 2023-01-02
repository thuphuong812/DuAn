<?php 
/**
 * 
 */
class postmodel extends DModel
{
	
	function __construct()
	{
		parent::__construct();
		
	}
	
	public function category_post($table){
		$sql="SELECT * FROM $table ORDER BY id_category_post DESC ";
		return $this->db->select($sql);
	}
		


	public function post($table_post,$table_category_post){
		$sql="SELECT * FROM $table_post, $table_category_post WHERE $table_post.id_category_post=$table_category_post.id_category_post ORDER BY $table_post.id_post DESC ";
		return $this->db->select($sql);

	}
	
	public function postbyid($table,$cond){
		$sql="SELECT * FROM $table WHERE $cond";
		return $this->db->select($sql);
	}

	public function insertpost($table,$data){
		return $this->db->insert($table,$data);

	}
	public function updatepost($table,$data,$cond){
		return $this->db->update($table,$data,$cond);
		
	}
		public function deletepost($table,$cond){
		return $this->db->delete($table,$cond);
		
	}
	//Home
	public function category_home_post($table){
		$sql="SELECT * FROM $table ORDER BY id_category_post DESC ";
		return $this->db->select($sql);
	}
	public function listpost_home($table_post,$table_category_post,$cond){
		$sql="SELECT * FROM $table_post,$table_category_post WHERE $cond ORDER BY $table_post.id_post DESC ";
		return $this->db->select($sql);

	}
	public function postbyid_home($table_category_post,$table_post,$id){
		$sql="SELECT * FROM $table_post, $table_category_post WHERE $table_post.id_category_post=$table_category_post.id_category_post AND $table_post.id_category_post='$id' ORDER BY $table_post.id_post DESC ";
		return $this->db->select($sql);

	}
	public function detail_post_home($table_category_post,$table_post,$cond){
		$sql="SELECT * FROM $table_post,$table_category_post WHERE $cond ";
		return $this->db->select($sql);
	}
	public function related_post_home($table_category_post,$table_post,$cond_related){
		$sql="SELECT * FROM $table_category_post,$table_post WHERE $cond_related ORDER BY $table_post.id_post DESC";
		return $this->db->select($sql);
	}
	public function post_new($table_post){
		$sql="SELECT * FROM $table_post ORDER BY id_post DESC LIMIT 3";
		return $this->db->select($sql);

	}
	public function insert_comment($table_comment,$data){
        return $this->db->insert($table_comment,$data);
    } 
	public function comment($table_comment,$table_post,$cond_comment){
		$sql="SELECT * FROM $table_comment,$table_post WHERE $cond_comment ORDER BY $table_comment.id_post DESC LIMIT 5";
		return $this->db->select($sql);
	}
	public function searchhome($table_post,$tukhoa){
		$sql="SELECT * FROM $table_post WHERE title_post LIKE '%$tukhoa%' ";
		return $this->db->select($sql);
	}
}
