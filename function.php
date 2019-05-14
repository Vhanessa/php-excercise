<?php
include "db.php";


 function showData(){
 	global $connection;
	$query = "SELECT * FROM users";
	$result = mysqli_query($connection,$query);
	if(!$result){
		die('Query failed' . mysqli_error());
	}

  	while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $username = $row['username'];
        $text = "{$id} - {$username}";
        echo "<option value='{$id}'>{$text}</option>";
	}
}
?>