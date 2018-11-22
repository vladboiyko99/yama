<?php

class Data_processing {

	
	public function __construct ($post){
		
		//var_dump ($post);
		if ($post == true) {
			$this -> add_post ($post);
			
		}		
		
	}
	
	
	public function foreach_mess  ($myrow){
		
		foreach ($myrow as $key=>$vol){
			
			echo "<br><article>
			<header>".$myrow[$key]['user']."</header>
			<p>".$myrow[$key]['text']."</p>
			<footer>".$myrow[$key]['data']."</footer>
			</article>";
			
		}
			
	}

	public function add_post ($mess){
		
		$query = "INSERT INTO mess (user,text) VALUES ('$mess[log]','$mess[text]')";
		$db = new Db (HOST,USER,PASS,DB);
		$myrow = $db->insert_db ($query,$mess);
		
		
		
	}

}



?>