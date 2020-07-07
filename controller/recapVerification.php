<?php
/* [VERIFY CAPTCHA FIRST] */
$secret = '6LcsXMYUAAAAAMNCK-ILtnrMG6szi13KsLA8rEcb'; // CHANGE THIS TO YOUR OWN!
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=".$_POST['g-recaptcha-response'];
$verify = json_decode(file_get_contents($url));

/* [PROCESS YOUR FORM] */
if ($verify->success) {

echo "<div>acces recaptch was verifie</div>
      <div>check you email</div>
      <button>check you email</button>";


} else {
  // Invalid captcha
  echo "ERROR - Invalid Captcha heat the google<br>recaptcha to verifie";
}
?>