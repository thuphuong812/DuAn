<?php 
/**
 * 
 */
class categorymodel extends DModel
{
	
	function __construct()
	{
		parent::__construct();
		
	}
	//category product
	public function category($table){
		$sql="SELECT * FROM $table ORDER BY id_category_product DESC ";
		return $this->db->select($sql);

	}
	public function category_home($table){
		$sql="SELECT * FROM $table ORDER BY id_category_product DESC  ";
		return $this->db->select($sql);

	}
	public function categorybyid($table,$cond){
		$sql="SELECT * FROM $table WHERE $cond";
		return $this->db->select($sql);
	}

	public function insertcategory($table_category_product,$data){
		return $this->db->insert($table_category_product,$data);

	}
	public function updatecategory($table_category_product,$data,$cond){
		return $this->db->update($table_category_product,$data,$cond);
		
	}
		public function deletecategory($table_category_product,$cond){
		return $this->db->delete($table_category_product,$cond);
		
	}

	//category post
	public function category_post($table){
		$sql="SELECT * FROM $table ORDER BY id_category_post DESC ";
		return $this->db->select($sql);

	}
	public function postbyid($table,$cond){
		$sql="SELECT * FROM $table WHERE $cond";
		return $this->db->select($sql);
	}

	public function insertcategory_post($table,$data){
		return $this->db->insert($table,$data);

	}
	public function updatecategory_post($table,$data,$cond){
		return $this->db->update($table,$data,$cond);
		
	}
		public function deletecategory_post($table,$cond){
		return $this->db->delete($table,$cond);
		
	}
}
?>