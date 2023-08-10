<?php   
	class ViewSearchOutput
	{
		public function output($users) {
			
			$output = "Search Outcome: <br>";
			
			foreach ($users as $id => $user)  
			{  
					$output .= "Username: " . $user->username."<br/>";
					$output .= "Password: " . $user->password . "<br/>";
					$output .= "First Name: " . $user->fname . "<br/>";
					$output .= "Last Name: " . $user->lname . "<br/>";

					$output .= "<br/>";
			}  		
			
			$output .= "<br/><a href ='index.php'>Go to Home</a>";
			
			return $output;
		}


		public function outputEmailSearch($fname) {
			
			if ($fname != '') {
				$output = "Log in Success : <b><i> $fname </i></b> <br/> <a href ='index.php'>Go to Home</a>";
			} else {
				$output = "No such user found. Incorrect Credentials. <br/> <a href ='index.php'>Go to Home</a>";
			}
			
			return $output;
		}

	}
?>  
  
