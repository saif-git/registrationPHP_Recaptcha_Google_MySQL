<!DOCTYPE html>
<html>
<head>
	<title>home and welcom page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style type="text/css">
div.panel,p.flip {
    margin: 0px;
    padding: 5px;
    text-align: center;
    background: #ddd;
    border: solid 1px #fff;
}
 
div.panel {
    widht: 50%;
    height: 100px;
    display: none;
}
</style>
</head>
<body>
<h1 style = "text-align:center;color: green;">Welcom page</h1>
 
<div class="card container" style="width: 600px;margin-left: 300px;">
<h1 style = "text-align:center;">people how register with us</h1>
<hr>
	<?php
    //include_once('../recapVerificaton.php');
        include_once('../controller/dataConnect.php');
        $query = mysqli_query($db,"SELECT * FROM users ORDER by id");
        while($row = mysqli_fetch_array($query)){
             echo "<div class='row'><br>";
            echo "<li class='panel ' id='details'>".$row['username']." Email : ".$row['email']." </li><hr><hr>";
            echo "</div> ";
        }
       echo "<button class='btn btn-success' style='width:100px;position:center' id='btn'>Details</button><br>";
        ?>

</div>
<script>
     $(document).ready(function() { 
            $("#btn").click(function() { 
               // $("#Outer").show(1000); 
               console.log("clicked for details num");
                $(".panel").slideToggle("slow");


            }); 
        }); 
</script>



</body>
</html>