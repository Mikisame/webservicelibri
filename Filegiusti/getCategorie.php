<?php
 function get_categorie($find){
	$libri_categ= array();
	$str = file_get_contents('C:\xampp\htdocs\cartella\Filegiusti\LibroCateg.json');
	$categorie = json_decode($str, true); 
	
	 foreach($categorie['book'] as $cat)
	 {
		 if($cat['categoria']==$find)
		 {
			 array_push($libri_categ, $cat['libro']);			 
		 }
		 
	 }
	 return $libri_categ;
	 
 }

?>