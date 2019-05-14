<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="index.php">
	<input type="text" name="username" placeholder="username"><br>
	<input type="password" name="password" placeholder="password"><br>
	<input type="submit" name="submit">

	</form>

  <?php
	$title="Master King Site!";

	// $arrayNumber = array(190, 280, 780, "90", "200");

	// $user = array("username" => "vhaneng", "password" => "Miya");

	// print_r($arrayNumber);
	// echo"<br>";
	// print_r($user);
	// echo"<br>";
	// echo $arrayNumber[0]  . "<br>";
	// echo $user["username"] . " " . $user["password"];


	// if (3>10) {
	// 	echo "Your Wrong";	
	// }else if (4 > 5){
	// 	echo "Your Right";
	// }else {
	//   echo "its not!";
	// 	}

	// for ($i=0; $i < 10; $i++){
	// 	echo $i . "<br>";
	// }

	// $todos = array("pray","eat","sleep","play","study");
	// foreach($todos as $todo){
	// 	echo $todo . "<br>";
	// }

	// function calculate($a,$b){
 //         echo ($a + $b);
	// }

	// calculate(20,20 / 30,30);

	// function greeting($message, $name){
	// 	echo $message . " " . $name;
	// }

	// greeting ("Hi Maam/Sir", "lorna")

	// function_exists(function_name){

	// 	return
	// }

	 // $string = "hi neng";
	 // echo strtolower($string);

	 // echo "<br>";

	 // $arrayNum = array(300,200,100,50,20);
	 // echo max($arrayNum);
	 // echo "<br>";
	 // echo min($arrayNum);

	// echo $_POST["password"];

	if(isset($_POST["submit"])){
		// $username = $_POST['username'];
		// $password = $_POST['password'];

		// echo "hello " . $username;
		// echo "your password is " . $password;
		$name = array("james","ali","bea","noro","cuna","rico");

		$maximum = 10;
		$minimum = 5;

		$username=$_POST["username"];
		$password=$_POST["password"];

		if(strlen($username) < $minimum){
			echo "username has to be longer than 5 characters ";
		}

   if(strlen($username) > $maximum){
   	echo "username cannot be longer than 10 characters ";
   }
   if(!in_array($username, $name)){
   	 echo "sorry you are not Allowed to Login";
   }else{
   	echo "welcome";

   }
	}

	?>

<h1><?php echo $title; ?></h1>


</body>
</html>