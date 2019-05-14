<?php


 $connection = mysqli_connect('localhost','root', '','testphp' );


 if ($connection) {
 	echo "we are connected";
 }else{
 	die("DB connection failed");
 }
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection,$query);

  if(!$result){
  	die('query failed' . mysqli_error());
  }



?>


<!DOCTYPE html>
<html>
<head>
	<title>READ</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
      <div class="container">
      	<div class="col-lg-6" style="background-color: pink">
      		<?php
      		  while($row = mysqli_fetch_assoc($result)){
      		  	?>

      		  	<pre>
      		  		<?php
      		  	// print_r($row);
      		  		echo $row['username'];

?>
      		  	</pre>
      		  	<?php
      		  }

      		?>
 </div>
</body>
</html>