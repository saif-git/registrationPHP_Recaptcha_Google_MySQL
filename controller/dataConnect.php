 <?php

//Create Connnection
$db = mysqli_connect('localhost','root','','authentication');

//If Error Connecting
if(!$db) {
    die('<center><br><h3>Error connecting to servers Database.');
}

?>