<?php
// process client request (via URL)
	header ("Content-Type_application/json");
	include ("getReparto.php");
	if(!empty($_GET['service'])){
	
			$name=$_GET['service'];
			
			
			if($name==1)
			{
				$ID_Reparto=get_reparto("fumetti");
				$ID_
				
			}
			if(
		
		
			
			
			$price=get_price($name);
	
			if(empty($price))
		//book not found
			deliver_response(200,"book not found", NULL);
			else
			//respond book price
			deliver_response(200,"book found", $price);
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