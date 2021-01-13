
<?php

    $dbhost = "localhost";
    
    $dbuser = "root";
    $dbpass = "230596may";
    $dbname = 'cambridge';

    $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    } else{
echo "";

}
?>
<!DOCTYPE html>
  <html>
  <head>
  	<title>PHP</title>
  	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
  <body class="body">
<?php 
 $phone = $_POST['phone'];	
$fullname = $_POST['fullname'] ;
$date = $_POST['date'] ;
$phone2 = $_POST['phone2'] ;
$course = $_POST['course'] ;
$branch = $_POST['branch'];
$time = $_POST['time']
 ?>

 <?php 
 $data = 'INSERT INTO `cambridge`.`ielts` (`Phone`, `Fullname`, `Date of birth`, `Phone no.2`, `Course`, `Branch`, `Time`)';
 $data .= "VALUES ('$phone', '$fullname', '$date', '$phone2', '$course', '$branch', '$time')";
 $result = mysqli_query($connection, $data);

 if (!$result) {
 	echo 'Xatolik'.$data. "<br>". $connection->error;

 }else{
 	echo "";
 }

 $connection->close();
  ?>
  <div style="text-align: center;">
        <h3 style="">Muvaffaqiyatli yuklandi!</h3>
  			<div class="infor-cont">
  				
  		
          <div class="btn"  style="width: 50%; margin: 0 auto;">
            <a href="cambridge_registr.php"><button  class=" btn-success btn-sm btn-block" type="submit">Back</button></a>
          </div>
  			
  		</div>
  
  </body>
  <script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="index.js"></script>
  </html>