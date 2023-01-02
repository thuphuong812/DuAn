<?php 
/**
 * 
 */
class productmodel extends DModel
{
	
	function __construct()
	{
		parent::__construct();
		
	}
	//Admin
	
	public function product($table_product,$table_category_product){
		$sql="SELECT * FROM $table_product, $table_category_product WHERE $table_product.id_category_product=$table_category_product.id_category_product ORDER BY $table_product.id_product DESC ";
		return $this->db->select($sql);

	}
	
	
	public function productbyid($table,$cond){
		$sql="SELECT * FROM $table WHERE $cond";
		return $this->db->select($sql);
	}

	public function insertproduct($table,$data){
		return $this->db->insert($table,$data);

	}
	public function updateproduct($table,$data,$cond){
		return $this->db->update($table,$data,$cond);
		
	}
		public function deleteproduct($table,$cond){
		return $this->db->delete($table,$cond);
		
	}
	//Home
	public function category_home_by_id($table_category_product,$table_product,$id){
		$sql="SELECT * FROM $table_product, $table_category_product WHERE $table_product.id_category_product=$table_category_product.id_category_product AND $table_product.id_category_product='$id' ORDER BY $table_product.id_product DESC ";
		return $this->db->select($sql);

	}
	public function list_product_home($table_product){
		$sql="SELECT * FROM $table_product ORDER BY $table_product.id_product DESC ";
		return $this->db->select($sql);

	}
	public function list_product_index($table_product){
		$sql="SELECT * FROM $table_product ORDER BY $table_product.id_product DESC LIMIT 8";
		return $this->db->select($sql);

	}
	public function product_hot($table_product){
		$sql="SELECT * FROM $table_product WHERE product_hot=1 ORDER BY $table_product.id_product DESC";
		return $this->db->select($sql);

	}
	public function product_hot_page($table_product,$start,$limit){
		$sql="SELECT * FROM $table_product WHERE product_hot=1 ORDER BY $table_product.id_product DESC LIMIT $start,$limit";
		return $this->db->select($sql);

	}
	public function new_product_index($table_product){
		$sql="SELECT * FROM $table_product ORDER BY RAND() ";
		return $this->db->select($sql);

	}
	public function hot_product_index($table_product){
		$sql="SELECT * FROM $table_product WHERE product_hot=1 ORDER BY $table_product.id_product DESC LIMIT 8 ";
		return $this->db->select($sql);

	}
	// public function product_new($table_product){
	// 	$sql="SELECT * FROM $table_product ORDER BY $table_product.id_product DESC LIMIT 24 ";
	// 	return $this->db->select($sql);

	// }
	public function all_product_hot($table_product){
		$sql="SELECT * FROM $table_product ORDER BY $table_product.id_product DESC LIMIT 12 ";
		return $this->db->select($sql);

	}
	public function load_more($table_product){
		$sql="SELECT * FROM $table_product WHERE id_product".$_POST["id"]."DESC LIMIT 8 ";
		return $this->db->select($sql);

	}
	public function detail_product_home($table, $table_product,$cond){
		$sql="SELECT * FROM $table_product,$table WHERE $cond ";
		return $this->db->select($sql);
	}

	public function related_product_home($table,$table_product,$cond_related){
		$sql="SELECT * FROM $table_product,$table WHERE $cond_related ORDER BY $table_product.id_product DESC ";
		return $this->db->select($sql);
	}
	public function searchhome($table_product,$tukhoa){
		$sql="SELECT * FROM $table_product WHERE title_product LIKE '%$tukhoa%' ";
		return $this->db->select($sql);
	}
	public function insert_comment($table_comment,$data){
        return $this->db->insert($table_comment,$data);
    }
	public function comment($table_comment,$table_product,$cond_comment){
		$sql="SELECT * FROM $table_comment,$table_product WHERE $cond_comment ORDER BY $table_comment.id_product DESC LIMIT 5";
		return $this->db->select($sql);
	}

	
}
?>