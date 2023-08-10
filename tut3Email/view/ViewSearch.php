<?php
	class ViewSearch
	{
		public function __construct() {
			
		}

		public function output() {
			return ' User Search - <br> <form action="index.php">	Search : <input type="text" name="username"/>  	<input type="submit" /></form>';
		}


		public function userForm() {
			return 'User Login - <br>  <form action="index.php">	Email : <input type="email" name="email" required/> <br> Subject : <input type="text" name="subject" required/> Message : <input type="text" name="message" required/> <br>	<input type="submit" /></form>';
		}

	}
?>

