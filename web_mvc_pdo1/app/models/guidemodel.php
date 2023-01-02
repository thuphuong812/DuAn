<?php 
/**
 * 
 */
class guidemodel extends DModel
{
	
	function __construct()
	{
		parent::__construct();
		
	}

    //ordering_guide
	public function ordering_guide($table_ordering_guide){
		$sql="SELECT * FROM $table_ordering_guide ORDER BY id_ordering_guide DESC ";
		return $this->db->select($sql);

	}
	public function ordering_guide_home($table_ordering_guide){
		$sql="SELECT * FROM $table_ordering_guide ORDER BY id_ordering_guide DESC  ";
		return $this->db->select($sql);

	}
	public function ordering_guide_by_id($table_ordering_guide,$cond){
		$sql="SELECT * FROM $table_ordering_guide WHERE $cond";
		return $this->db->select($sql);
	}


	public function updated_ordering_guide($table_ordering_guide,$data,$cond){
		return $this->db->update($table_ordering_guide,$data,$cond);
		
	}
	
	
	

	
}
?>