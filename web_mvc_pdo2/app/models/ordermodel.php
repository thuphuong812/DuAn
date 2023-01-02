<?php 
/**
 * 
 */
class ordermodel extends DModel
{
	
	function __construct()
	{
		parent::__construct();
		
	}
    public function insert_order($table_order,$data_order){
        return $this->db->insert($table_order,$data_order);
    }  
    public function insert_order_details($table_order_details,$data_details){
        return $this->db->insert($table_order_details,$data_details);
    }

    public function list_order($table_order){
        $sql="SELECT * FROM $table_order WHERE order_status=0 ORDER BY order_id DESC";
        return $this->db->select($sql);
    }
    public function  list_order_processed($table_order){
        $sql="SELECT * FROM $table_order WHERE order_status=1 ORDER BY order_id DESC";
        return $this->db->select($sql);
    }
   
    public function list_order_details($table_product,$table_order_details,$table_order,$cond){
        $sql="SELECT * FROM  $table_product,$table_order_details,$table_order WHERE $cond";
        return $this->db->select($sql);
    }
    public function list_infor($table_order_details,$cond_infor){
        $sql="SELECT * FROM $table_order_details WHERE $cond_infor LIMIT 1";
        return $this->db->select($sql);
    }
    public function coupon_code($table_coupon,$table_order_details,$cond_coupon){
        $sql="SELECT * FROM $table_coupon,$table_order_details WHERE $cond_coupon LIMIT 1";
        return $this->db->select($sql);
    }
    public function order_confirm($table_order,$data,$cond){
        return $this->db->update($table_order,$data,$cond);
    }
    public function delete_order($table_order,$cond){
		return $this->db->delete($table_order,$cond);
		
	}
    public function update_quantity($table,$data,$cond){
		return $this->db->update($table,$data,$cond);
		
	}
    public function update_coupon($table,$data,$cond){
		return $this->db->update($table,$data,$cond);
		
	}
}
?>