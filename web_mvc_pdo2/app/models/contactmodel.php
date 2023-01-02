<?php 
/**
 * 
 */
class contactmodel extends DModel
{
	
	function __construct()
	{
		parent::__construct();
		
	}

    //contact
	public function contact($table_contact){
		$sql="SELECT * FROM $table_contact ORDER BY id_contact DESC ";
		return $this->db->select($sql);

	}
	public function contact_home($table_contact){
		$sql="SELECT * FROM $table_contact ORDER BY id_contact DESC  ";
		return $this->db->select($sql);

	}
	public function contact_by_id($table_contact,$cond){
		$sql="SELECT * FROM $table_contact WHERE $cond";
		return $this->db->select($sql);
	}


	public function updated_contact($table_contact,$data,$cond){
		return $this->db->update($table_contact,$data,$cond);
		
	}
	
	 public function insert_contact($tbl_contact_customer,$data_contact){
        return $this->db->insert($tbl_contact_customer,$data_contact);
    }  
     public function list_contact($tbl_contact_customer){
        $sql="SELECT * FROM $tbl_contact_customer WHERE contact_status=0 ORDER BY id_contact_customer DESC";
        return $this->db->select($sql);
    }
    public function  list_contact_customer_processed($tbl_contact_customer){
        $sql="SELECT * FROM $tbl_contact_customer WHERE contact_status=1 ORDER BY id_contact_customer DESC";
        return $this->db->select($sql);
    }
	public function contact_confirm($tbl_contact_customer,$data,$cond){
        return $this->db->update($tbl_contact_customer,$data,$cond);
    }
	public function delete_contact($table_contact_customer,$cond){
		return $this->db->delete($table_contact_customer,$cond);
		
	}
}
?>