<?php 
/**
 * 
 */
class policymodel extends DModel
{
	
	function __construct()
	{
		parent::__construct();
		
	}

    //privacy_policy
	public function privacy_policy($table_privacy_policy){
		$sql="SELECT * FROM $table_privacy_policy ORDER BY id_privacy_policy DESC ";
		return $this->db->select($sql);

	}
	public function privacy_policy_home($table_privacy_policy){
		$sql="SELECT * FROM $table_privacy_policy ORDER BY id_privacy_policy DESC  ";
		return $this->db->select($sql);

	}
	public function privacy_policy_by_id($table_privacy_policy,$cond){
		$sql="SELECT * FROM $table_privacy_policy WHERE $cond";
		return $this->db->select($sql);
	}


	public function updated_privacy_policy($table_privacy_policy,$data,$cond){
		return $this->db->update($table_privacy_policy,$data,$cond);
		
	}
	
    //return_policy
 
	public function return_policy($table_return_policy){
		$sql="SELECT * FROM $table_return_policy ORDER BY id_return_policy DESC ";
		return $this->db->select($sql);

	}
	public function return_policy_home($table_return_policy){
		$sql="SELECT * FROM $table_return_policy ORDER BY id_return_policy DESC  ";
		return $this->db->select($sql);

	}
	public function return_policy_by_id($table_return_policy,$cond){
		$sql="SELECT * FROM $table_return_policy WHERE $cond";
		return $this->db->select($sql);
	}


	public function updated_return_policy($table_return_policy,$data,$cond){
		return $this->db->update($table_return_policy,$data,$cond);
		
	}
	
	//Warranty_policy
    public function warrantly_policy($table_warrantly_policy){
		$sql="SELECT * FROM $table_warrantly_policy ORDER BY id_warrantly_policy DESC ";
		return $this->db->select($sql);

	}
	public function warrantly_policy_home($table_warrantly_policy){
		$sql="SELECT * FROM $table_warrantly_policy ORDER BY id_warrantly_policy DESC  ";
		return $this->db->select($sql);

	}
	public function warrantly_policy_by_id($table_warrantly_policy,$cond){
		$sql="SELECT * FROM $table_warrantly_policy WHERE $cond";
		return $this->db->select($sql);
	}


	public function updated_warrantly_policy($table_warrantly_policy,$data,$cond){
		return $this->db->update($table_warrantly_policy,$data,$cond);
		
	}

	
}
?>