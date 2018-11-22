<?php

class Page{
	
	
	
	public function head () {
		
		include 'header.php';
		
	}	
		

	public function content (){
		
		$query = "SELECT * from mess ORDER by id DESC";
		$method = "all";
		$db = new Db (HOST,USER,PASS,DB);
		$myrow = $db->select_db ($query,$method);
		return $myrow;
		
		
	}

	public function footer () {
		
		$yer = date ("Y");
		return $yer;
		
	}	

}



?>