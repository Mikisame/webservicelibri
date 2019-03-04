<?php

// process client request (via URL)
	header ("Content-Type_application/json");
	include ("getReparto.php");
	include ("getCategorie.php");
	include ("getLibri.php");
	include("getSconti.php");
	include("getSconti2.php");
	$libri_categorie= array();
	$Libri_sconti= array();
	$Libri_sconti2= array();
	$libri = array();
	if(!empty($_GET['service'])){
	
			$name=$_GET['service'];
			
			
			if($name==1)
			{
				$ID_Reparto=get_reparto("fumetti");  //recupero l'ID del reparto fumetti
				$libri_categorie=get_categorie("Ultimi arrivi");				
				$libri=get_libri($ID_Reparto, $libri_categorie);
				deliver_response(200,"quantitativo", $libri);				
			}
			else if($name==2)
			{
				
				$libri_sconti= get_Sconti();
				$libri_sconti2=get_Sconti2($libri_sconti);
				foreach($libri_sconti2 as $lb)
				{
					print_r($lb);
				}
				
				
				
				
			}

		
		
			
			
			
				}
	else
	{
		//throw invalid request
		deliver_response(400,"Invalid request", NULL);
	}
	
	function deliver_response($status, $status_message, $data)
	{
		header("HTTP/1.1 $status $status_message");
		
		$response ['status']=$status;
		$response['status_message']=$status_message;
		$response['data']=$data;
		
		$json_response=json_encode($response);
		echo $json_response;
	}

?>