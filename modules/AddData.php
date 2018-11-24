<?php

class AddData{

	public function add_post ($mess){
		
		$query = "INSERT INTO mess (user,text) VALUES ('$mess[log]','$mess[text]')";
		$db = new DataBase (HOST,USER,PASS,DB);
		$myrow = $db->insert_db ($query,$mess);
		
		
		
	}

}



?>