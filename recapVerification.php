<?php
/* [VERIFY CAPTCHA FIRST] */
$secret = '6LcsXMYUAAAAAMNCK-ILtnrMG6szi13KsLA8rEcb'; // CHANGE THIS TO YOUR OWN!
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=".$_POST['g-recaptcha-response'];
$verify = json_decode(file_get_contents($url));
  //require 'views/registration.php';
$email = $_POST['email'];
/* [PROCESS YOUR FORM] */
if ($verify->success) {
//echo "accept recaptcha was verifie check you email so you can acces welcom page";
//header('Location : views/beforWilKommen.php');
  echo "check you email:  So you can start to welcom page";
 
} else {
  // Invalid captcha
  echo "ERROR - Invalid Captcha heat";
  echo " the google recaptcha to verifie";
}
?>
