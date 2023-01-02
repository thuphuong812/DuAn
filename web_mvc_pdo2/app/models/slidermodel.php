<?php 
/**
 * 
 */
class slidermodel extends DModel
{
	
	function __construct()
	{
		parent::__construct();
		
	}
	//Admin
    public function slider($table){
		$sql="SELECT * FROM $table ORDER BY id_slider DESC ";
		return $this->db->select($sql);

	}
	public function insertslider($table,$data){
		return $this->db->insert($table,$data);

	}
	public function updateslider($table,$data,$cond){
		return $this->db->update($table,$data,$cond);
		
	}
    public function sliderbyid($table,$cond){
		$sql="SELECT * FROM $table WHERE $cond";
		return $this->db->select($sql);
	}

		public function deleteslider($table,$cond){
		return $this->db->delete($table,$cond);
		
	}
	// //Home
    public function slider_home($table_slider){
		$sql="SELECT * FROM $table_slider ORDER BY $table_slider.id_slider DESC LIMIT 3 ";
		return $this->db->select($sql);

	}
	

	
}
?>