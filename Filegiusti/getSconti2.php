<?php

 function get_Sconti2($find){
	$libri_sconti= array();
	$str = file_get_contents('Libri.json');
	$sconti2 = json_decode($str, true); 
	
	 foreach($sconti2['book'] as $sc)
	 {
		 if($sc['ID'] == $find)
		 {
			 array_push($libri_sconti , $sc['titolo']);			 
		 }
		 
	 }
	 return $libri_sconti;
	 
 }
 ?>