<?php 
/**
 * 
 */
class questionmodel extends DModel
{
	
	function __construct()
	{
		parent::__construct();
		
	}

	public function question($table_question){
		$sql="SELECT * FROM $table_question ORDER BY id_question DESC ";
		return $this->db->select($sql);

	}
	public function question_home($table_question){
		$sql="SELECT * FROM $table_question ORDER BY id_question DESC  ";
		return $this->db->select($sql);

	}
	public function questionbyid($table_question,$cond){
		$sql="SELECT * FROM $table_question WHERE $cond";
		return $this->db->select($sql);
	}

	public function insertquestion($table_question,$data){
		return $this->db->insert($table_question,$data);

	}
	public function updatequestion($table_question,$data,$cond){
		return $this->db->update($table_question,$data,$cond);
		
	}
		public function deletequestion($table_question,$cond){
		return $this->db->delete($table_question,$cond);
		
	}
	

	
}
?>