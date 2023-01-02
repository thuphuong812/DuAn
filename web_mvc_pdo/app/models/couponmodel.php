<?php 
/**
 * 
 */
class couponmodel extends DModel
{
	
	function __construct()
	{
		parent::__construct();
		
	}
	//Admin
	
	public function coupon($table_coupon){
		$sql="SELECT * FROM $table_coupon ORDER BY coupon_id DESC ";
		return $this->db->select($sql);

	}
	
	
	public function couponbyid($table,$cond){
		$sql="SELECT * FROM $table WHERE $cond";
		return $this->db->select($sql);
	}

	public function insertcoupon($table,$data){
		return $this->db->insert($table,$data);

	}
	public function updatecoupon($table,$data,$cond){
		return $this->db->update($table,$data,$cond);
		
	}
		public function deletecoupon($table,$cond){
		return $this->db->delete($table,$cond);
		
	}
	//Home
	public function coupon_use($table_coupon,$cond){
		$sql="SELECT * FROM $table_coupon WHERE $cond ";
		return $this->db->select($sql);

	}
	public function coupon_home($table_coupon){
		$sql="SELECT * FROM $table_coupon ORDER BY coupon_id DESC ";
		return $this->db->select($sql);

	}
	
	
}
?>