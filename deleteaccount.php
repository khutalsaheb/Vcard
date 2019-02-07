<?php 
	$card_token = $_GET['card_token'];
	
	//importing dbDetails file 
 require_once 'dbDetails.php';	
	//$sql = "DELETE FROM vcard WHERE card_token='$card_token'";
		$sql = "UPDATE vcard SET status='0' WHERE card_token='$card_token'";
	//echo $sql;
	//exit;
	if(mysqli_query($con,$sql)){
		echo 'sucess';
	}else{
		echo 'failure';
	}
	
	mysqli_close($con);
	?>
