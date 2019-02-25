
<?php
 function get_categorie($find){
	$libri_categ= array();
	$str = file_get_contents('C:\Users\marco.costanzo\Documents\webservicelibri\LibroCateg.json');
	$categorie = json_decode($str, true); 
	
	 foreach($categorie['book'] as $cat)
	 {
		 if($cat['categoria']==$find)
		 {
			 array_push($libri_categ = $cat['libri']);			 
		 }
		 
	 }
	 return $libri_categ;
	 
 }

?>