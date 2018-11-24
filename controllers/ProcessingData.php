<?php
class ProcessingData{
	public function transferpost($post){		
		//var_dump ($post);
		if ($post == true) {
			$add_message= new AddData();
			$add_message -> add_post ($post);
			
		}	
	}
}

?>