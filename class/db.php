<?php

class Db{

	public $db;

	public function __construct ($host,$user,$pass,$db){
		
		$this->db = mysqli_connect ("$host","$user","$pass","$db") or die ("ERORR");
		mysqli_set_charset ($this->db,"UTF8") or die ("ERORR");
		
	}

	public function select_db ($query,$method){
		
		$result = mysqli_query($this->db,$query);
		//var_dump ($result);
		$myrow = $this->query_method($query,$method,$result);
		
		return $myrow;
		
	}
	
	public function insert_db ($query,$mess){
		
		$result = mysqli_query($this->db,$query);
		if ($result == true)
			header("Location: index.php");
	}
	
	

	public function query_method ($query,$method,$result){

		switch ($method){
			
			case "all" :
			$myrow = mysqli_fetch_all ($result,MYSQL_ASSOC);
			break;
			
			case "array":
			$myrow = mysqli_fetch_array ($result,MYSQL_ASSOC);
			break;
			
			default:
			echo "ERORR";
			break;
		}

	return 	$myrow;

	}

}



?>