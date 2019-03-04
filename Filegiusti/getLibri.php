<?php

 function get_libri($find, $find2){
	$libri=0;
	$str = file_get_contents('C:\xampp\htdocs\cartella\Filegiusti\Libri.json');
	$libri2 = json_decode($str, true); 
	
	foreach($find2 as $id)
	{
	 foreach($libri2['book'] as $lib)
	 {
		 if($lib['ID']==$id)
		 {
			if($lib['reparto']==$find)
			{
				$libri++;
			}
		 }
		 
	 }
	}
	 return $libri;
	 
 }

?>