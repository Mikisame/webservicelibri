<?php
 function get_reparto($find){
	
	$str = file_get_contents('C:\Users\marco.costanzo\Documents\webservicelibri\Reparti.json');
	$reparto = json_decode($str, true); 
	
	 foreach($reparto['book'] as $rep)
	 {
		 if($rep['tipo']==$find)
		 {
			 
			 return $rep['ID'];
			 break;
		 }
		 
	 }
 }

?>