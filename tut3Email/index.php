<html>
<head><title> MVC Webpage </title></head>
<body>

<h1>Welcome to MVC (Email Login page)</h1>

<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// include controller  
include_once("controller/Controller.php");  
  
//Initilize controller
$controller = new Controller();  

if(isset($_GET['username']) && !isset($_GET['password']) ) {
	echo "User Search Page <br>";
	$controller->execute(2, $_GET['username'], "");
}
else if(isset($_GET['username']) && isset($_GET['password']) ) {
	echo "Logged In Page <br>";
	$controller->execute(3, $_GET['username'], $_GET['password']);
}
else {
	echo "Home Page <br><br><br><br>";
	$controller->execute(0, "", "");
	$controller->execute(1, "", "");
}
if(isset($_GET['email']) && !isset($_GET['message']) && !isset($_GET['subject']) ) {
	//echo "User Search Page <br>";
	$controller->email($_GET['email'], $_GET['message'], $_GET['subject']);
}
else
{
	echo "Please enter all credential: email, message and subject.";
}
?>
