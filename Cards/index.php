<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Trimatrix Lab">
    <meta name="description" content="">
    <meta name="keywords" content="">


    <title>Vcard</title>
    <link rel="icon" href="images/fav-icon.png">

    <!--APPLE TOUCH ICON-->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">


    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>


    <!-- MATERIAL ICON FONT -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link href="stylesheets/font-awesome.min.css" rel="stylesheet">


    <!-- ANIMATION -->
    <link href="stylesheets/animate.min.css" rel="stylesheet">


    <!-- MATERIALIZE -->
    <link href="stylesheets/materialize.css" rel="stylesheet">
    <!-- BOOTSTRAP -->
    <link href="stylesheets/bootstrap.min.css" rel="stylesheet">


    <!-- CUSTOM STYLE -->
    <link href="stylesheets/style.css" id="switch_style" rel="stylesheet">

</head>
<body>


<header id="home">
   
    <div class="header-background section">
        <div id="v-card-holder">
            <div class="container">
			<?php 
			
	
 //Importing dbdetails file 
 require_once 'dbDetails.php';

                              $card_token = $_GET['card_token'];
								 $query = "SELECT * FROM vcard WHERE card_token='$card_token'"; 
								// $query = "SELECT * FROM vcard WHERE card_token='ef9f9ed148adb0e1ad10de8fa2084a3c'";
								$sql = mysqli_query($db,$query);
								while ($fetch = mysqli_fetch_assoc($sql)) {
                echo '<div class="row">';
                   echo ' <div class="col-md-12 col-sm-12 col-xs-12">';
				   echo ' <div id="v-card" class="card">';
                 echo ' <div id="profile" class="right">';
                               echo ' <img alt="profile-image" class="img-responsive" src="'.$fetch['v_image'].'">';
                               echo ' <div class="slant"></div>';
                              // echo ' <div class="btn-floating btn-large add-btn">';
							  // echo '<a href="google.com">';
                              //  echo '    <i class="material-icons">add</i></div>';
								//echo '</a>';
                          echo '  </div>';

                           echo ' <div class="card-content">';

                                 echo '<div class="info-headings">';
                                     echo '<h4 class="text-uppercase left">'.$fetch['name'].'</h4>';
                                     echo '<h6 class="text-capitalize left">'.$fetch['v_deg'].'</h6>';
                                 echo '</div>';

                               echo '  <div class="infos">';
                                     echo '<ul class="profile-list">';
									   echo '<li class="clearfix">';
									       echo '<a href="tel:'.$fetch['v_mobile'].'">';
                                            echo ' <span class="title"><i class="material-icons">phone</i></span>';
                                            echo ' <span class="content">'.$fetch['v_mobile'].'</span>';
											  echo '</a>';
                                       echo '  </li>';
                                        echo ' <li class="clearfix">';
										  echo '<a href="mailto:'.$fetch['v_email'].'">';
                                            echo ' <span class="title"><i class="material-icons">email</i></span>';
                                            echo ' <span class="content">'.$fetch['v_email'].'</span>';
											echo '</a>';
                                       echo '  </li>';
                                        echo ' <li class="clearfix">';
										  echo '<a href="'.$fetch['v_website'].'">';
                                           echo '  <span class="title"><i class="material-icons">language</i></span>';
                                             echo ' <span class="content">'.$fetch['v_website'].'</span>';
											 echo '</a>';
                                        echo ' </li>';
                                       echo '  <li class="clearfix">';
									     echo ' <a href="skype:skype:live:'.$fetch['v_skype'].'?chat?chat" target="_blank">';
                                          echo '   <span class="title"><i class="fa fa-skype" aria-hidden="true"></i></span>';
                                            echo ' <span class="content">'.$fetch['v_skype'].'</span>';
										echo '</a>';
                                                                              
									   echo '</li>';
                                       
                                        echo ' <li class="clearfix">';
                                           echo '  <span class="title"><i class="material-icons">place</i></span>';
                                           echo '  <span class="content">'.$fetch['v_address'].'</span>';
                                        echo ' </li>';

                                    echo ' </ul>';
                                 echo '</div>';

                              
                                echo ' <div class="links">';
                                   
                                  echo '<a href="https://www.facebook.com/'.$fetch['v_facebook'].'" id="first_one"
                                          class="social btn-floating indigo"><i
                                            class="fa fa-facebook"></i></a>';
                                    
                                   echo '  <a href="https://twitter.com/'.$fetch['v_twitter'].'" class="social  btn-floating blue"><i
                                            class="fa fa-twitter"></i></a>';
                                  
                                   echo '  <a href="https://plus.google.com/+'.$fetch['v_google'].'" class="social  btn-floating red"><i
                                            class="fa fa-google-plus"></i></a>';
                                  
                                   echo '  <a href="https://www.linkedin.com/in/'.$fetch['v_linkedin'].'" class="social  btn-floating blue darken-3"><i
                                            class="fa fa-linkedin"></i></a>';
                                 
                                      echo '    <a href="https://www.instagram.com/'.$fetch['v_insta'].'" class="social  btn-floating amber darken-2"><i
                                            class="fa fa-instagram"></i></a>'; 
											
											echo '<a href="http://m.me/'.$fetch['v_me'].'" class="social  btn-floating orange darken-3">
											<i class="fa fa-facebook-messenger"></i></a>';
                        echo '         </div>';
						
						
                     echo '        </div>';
					   
                    
                    echo '     </div>';
                  echo '   </div>';
                echo ' </div>';
								}
				?>
            </div>
        </div>
    </div>
</header>


<!--SCROLL TO TOP-->
<div id="scroll-top">
    <div id="scrollup"><i class="fa fa-angle-up"></i></div>
</div>

<script src="javascript/jquery-2.1.3.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
<script src="javascript/materialize.min.js"></script>
<script src="javascript/markerwithlabel.min.js"></script>
<script src="javascript/retina.min.js"></script>
<script src="javascript/scrollreveal.min.js"></script>
<script src="javascript/jquery.touchSwipe.min.js"></script>
<script src="javascript/custom.js"></script>


</body>
</html>