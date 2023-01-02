<?php 
/**
 * 
 */
class DModel
{
	protected $db=array();
	public function __construct()
	{
		$connect ='mysql:dbname=pdo_sally_shop; host=localhost;charset=utf8';
		$user='root';
		$password='';
		$this->db=new Database($connect,$user,$password);

	}
}

?>