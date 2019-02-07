<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$card_token=$_GET['card_token'];
		$name = $_POST['name'];
		$name = $_POST['name'];
		$v_deg=$_POST['v_deg'];
        $v_mobile=$_POST['v_mobile'];
		$v_email=$_POST['v_email'];
		$v_skype=$_POST['v_skype'];
		$v_website=$_POST['v_website'];
		$v_address=$_POST['v_address'];
		$v_what=$_POST['v_what'];
		$v_facebook=$_POST['v_facebook'];
		$v_twitter=$_POST['v_twitter'];
		$v_google=$_POST['v_google'];
		$v_insta=$_POST['v_insta'];
		$v_linkedin=$_POST['v_linkedin'];
		$v_me=$_POST['v_me'];
		
	//importing dbDetails file 
 require_once 'dbDetails.php';
 
		$sql = "UPDATE vcard SET name = '$name',
		v_deg='$v_deg',
		v_mobile='$v_mobile',
		v_email='$v_email',
		v_skype='$v_skype',
		v_website='$v_website',
		v_address='$v_address',
 v_what='$v_what',
 v_facebook='$v_facebook',
 v_twitter='$v_twitter', 
 v_google='$v_google',
 v_insta='$v_insta',
 v_linkedin='$v_linkedin',
 v_me='$v_me'
		WHERE card_token = '$card_token'";
		//echo $sql;
		//exit;
		if(mysqli_query($con,$sql)){
			echo 'sucess';
		}else{
			echo 'failure';
		}
		
		mysqli_close($con);
	}
	
	