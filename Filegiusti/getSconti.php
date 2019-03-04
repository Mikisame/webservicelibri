<?php

 function get_Sconti(){
	$libri_sconti= array();
	$str = file_get_contents('C:\xampp\htdocs\cartella\Filegiusti\LibroCateg.json');
	$sconti = json_decode($str, true); 
	
	 foreach($sconti['book'] as $sc)
	 {
		 if($sc['categoria'] != "I più venduti" AND $sc['categoria'] != "Ultimi arrivi")
		 {
			 
			 array_push($libri_sconti,$sc['libro']);			 
		 }
		 
	 }
	 return $libri_sconti;
	 
 }
 ?>