<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body>
    <h1 style="color:blue;">Register with us  onetool company</h1>

<div class="container card" style="width:350px;height: 500px;">

<form style="margin-bottom: 30px;"  method="post" onsubmit="return ajaxsubmit()">


  <div class="form-group">
    <label>username</label><br>
    <input type="name" name="name" class="form-control" id="name" placeholder="Enter name"  required autofocus>

    <small id="username" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label>email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
  </div>

   <div style="color:red;" id="email_error"></div>

 
  <button type="submit" class="btn btn-primary" id="Submit" name="submit">Register</button>

</form><br>

    <div class="g-recaptcha" data-sitekey="6LcsXMYUAAAAAPIIEJLkNTodnXrcCIkqLqsgjkFW"></div>

    <div class="kickbox-form" kickbox-app-code="7e5506fd64b4ed3a61161d41c39fac52010af77e3c77d72900d556d5017aa397"></div>
</div>
<script type="text/javascript" src="../model/emailVerification.js"></script>
<script type="text/javascript" src="../model/recaptchawithAjax.js"></script>
<?php 

require_once '../senderemail.php';
require_once '../controller/dataConnect.php';



if (isset($_POST['submit'])) {

$errors = array();
$name = $_POST['name'];
$email = $_POST['email'];
$content = '<h1>welcom to onetool company<h1><br>mister :'.$name.' with email: '.$email.'<br> '.
'<a class="btn btn-outline-primary" href="http://localhost/onetoolTestRegistration/views/welcom.php">Accees_Here</a>';

  SendEmail::SendMail($email,"welcom to onetool company conference",$content);

$username2 = mysqli_real_escape_string($db,$name);
$email2 = mysqli_real_escape_string($db,$email);


$user_check_query = "SELECT * FROM users WHERE username='$username2' OR email='$email2'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $name) {
      array_push($errors, "Username already exists");
      echo "username already exist";
    }
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    die('<center><br><h3>email already exist</h3></center>');
    } 

    if (count($errors) == 0 && filter_var($_POST["email"])) {
    $sql = "INSERT INTO users(username,email) VALUES('$username','$email')";
    mysqli_query($db,$sql);
    echo "dataConnect was registerd";

}


    }

  

 }

?>
</body>
</html>
