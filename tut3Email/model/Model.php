<?php
	include_once("User.php");  
	  
	class Model {  

		public function searchUserList($uname)  
		{  
			include_once("DBConn.php");  
			$sql= "select * from users where username LIKE '%" . $uname . "%'";
			$result=$mysqli->query($sql);

			$arr= array();

			while($row = $result->fetch_array(MYSQLI_ASSOC))	{
				
				$arr[$row['username']]= new User($row['username'], $row['password'], $row['fname'], $row['lname'] );
			}
			
			return $arr;
		}      

		public function loginWithUserNamePassword($username, $password)  
		{  
			include_once("DBConn.php");  
			$sql= "select * from users where username = '" . $username . "' AND password = '" . $password . "'";
			$result=$mysqli->query($sql);

			$firstname = "";

			while($row = $result->fetch_array(MYSQLI_ASSOC))	{				
				$firstname = $row['fname'];
			}
			
			return $firstname;
		} 
		public function email($email, $message, $subject) 
		{
			$stri = 'echo "' . $message . '" | mail -s "' . $subject . '" ' . $email;
			$last_line = system($stri, $retval);
	
			if ($retval == 0) 
			{
				return true;
			} else {
				return false;
			}
		}
	} 
?>

