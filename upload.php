<?php 
 
 //importing dbDetails file 
 require_once 'dbDetails.php';
 
 //this is our upload folder 
 $upload_path = 'uploads/';
 
 //Getting the server ip 
 $server_ip = gethostbyname(gethostname());
 
 //creating the upload url 
 $upload_url = 'http://'.$server_ip.'/Cards/'.$upload_path; 
 
 //response array 
 $response = array(); 
 
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 //checking the required parameters from the request 
 if(isset($_POST['name']) and isset($_FILES['image']['name'])){
 
 
 //getting name from the request 
 $name = $_POST['name'];
 //Generate a random string.
$token = openssl_random_pseudo_bytes(16);

//Convert the binary data into hexadecimal representation.
$token = bin2hex($token);
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


 $fileinfo = pathinfo($_FILES['image']['name']);
 
 //getting the file extension 
 $extension = $fileinfo['extension'];
 
 //file url to store in the database 
 $file_url = $upload_url . getFileName() . '.' . $extension;
 
 //file path to upload in the server 
 $file_path = $upload_path . getFileName() . '.'. $extension; 
 
 //trying to save the file in the directory 
 try{
 //saving the file 
 move_uploaded_file($_FILES['image']['tmp_name'],$file_path);
 $sql = "INSERT INTO `vcard` (`v_image`, `name`,`card_token`,`v_deg`,`v_mobile`,`v_email`,`v_skype`,`v_website`,`v_address`,
 `v_what`,`v_facebook`, `v_twitter`, `v_google`, `v_insta`, `v_linkedin`, `v_me`) 
 VALUES ('$file_url', '$name','$token','$v_deg','$v_mobile','$v_email','$v_skype','$v_website','$v_address','$v_what'
 ,'$v_facebook','$v_twitter','$v_google','$v_insta','$v_linkedin','$v_me');";
 
 //adding the path and name to database 
 if(mysqli_query($con,$sql)){
 
 //filling response array with values 
 $response['error'] = false; 
 $response['card_token']=$token;
 $response['v_image'] = $file_url; 
 $response['name'] = $name;
 $response['v_deg']=$v_deg;
 $response['v_mobile']=$v_mobile;
 $response['v_email']=$v_email;
 $response['v_skype']=$v_skype;
 $response['v_website']=$v_website;
 $response['v_address']=$v_address;
 $response['v_what']=$v_what;
 $response['v_facebook']=$v_facebook;
 $response['v_twitter']=$v_twitter;
 $response['v_google']=$v_google;
 $response['v_insta']=$v_insta;
 $response['v_linkedin']=$v_linkedin;
 $response['v_me']=$v_me;
 
 }
 //if some error occurred 
 }catch(Exception $e){
 $response['error']=true;
 $response['message']=$e->getMessage();
 } 
 //displaying the response 
 echo json_encode($response);
 
 //closing the connection 
 mysqli_close($con);
 }else{
 $response['error']=true;
 $response['message']='Please choose a file';
 }
 }
 
 /*
 We are generating the file name 
 so this method will return a file name for the image to be upload 
 */
 function getFileName(){
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');
 $sql = "SELECT max(id) as id FROM vcard";
 $result = mysqli_fetch_array(mysqli_query($con,$sql));
 
 mysqli_close($con);
 if($result['id']==null)
 return 1; 
 else 
 return ++$result['id']; 
 }
?>