<?php 
$card_token = $_GET['card_token'];
	
 //Importing dbdetails file 
 require_once 'dbDetails.php';
 
 //connection to database 

 //sql query to fetch all images 
 $sql = "SELECT * FROM vcard WHERE card_token='$card_token'";
 
 //getting images 
 $result = mysqli_query($con,$sql);
 
 //response array 
 $response = array(); 
 $response['error'] = false; 
 $response['database'] = array(); 
 
 //traversing through all the rows 
 while($row = mysqli_fetch_array($result)){
 $temp = array(); 
 $temp['id']=$row['id'];
 $temp['card_token']=$row['card_token'];
 $temp['v_image'] = $row['v_image']; 
 $temp['name'] = $row['name'];
 $temp['v_deg']=$row['v_deg'];
 $temp['v_mobile']=$row['v_mobile'];
 $temp['v_email']=$row['v_email'];
 $temp['v_skype']=$row['v_skype'];
 $temp['v_website']=$row['v_website'];
 $temp['v_address']=$row['v_address'];
 $temp['v_what']=$row['v_what'];
 $temp['v_facebook']=$row['v_facebook'];
 $temp['v_twitter']=$row['v_twitter'];
 $temp['v_google']=$row['v_google'];
 $temp['v_insta']=$row['v_insta'];
 $temp['v_linkedin']=$row['v_linkedin'];
 $temp['v_me']=$row['v_me'];
 
 array_push($response['database'],$temp);
 }
 //displaying the response 
 echo json_encode($response);