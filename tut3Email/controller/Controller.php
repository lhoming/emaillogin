<?php

include_once("model/Model.php");  
include_once("view/ViewSearch.php");  
include_once("view/ViewSearchOutput.php");  
  
class Controller {  

    public $model;   
  
    public function __construct()        {    
        $this->model = new Model();  
    }   
      
	public function execute($action, $username, $password)  	{  
	
		if($action == 0) {
			$v = new ViewSearch(); 
			echo $v->output();
		}
		else if($action == 1) {

			$v = new ViewSearch(); 
			echo $v->userLogin();

		} else if($action == 2) {

			$v = new ViewSearch(); 
			echo $v->output();

			$customers = $this->model->searchUserList($username);
			$v = new ViewSearchOutput(); 
			echo $v->output($customers);

		} else if($action == 3) {

			//$v = new ViewSearch(); 
			//echo $v->userLogin();

			$emailOutput = $this->model->loginWithUserNamePassword($username, $password);
			$v = new ViewSearchOutput(); 
			echo $v->outputEmailSearch($emailOutput);
		}

	} 
	public function email($email, $subject, $message)
	{
		$request = $this->model->email($email, $subject, $message);
		if ($request)
		{
		echo ("Email Sent Successfully");	
		}
		else 
		{
		echo "Please verify the Email";
		}
	}
}  

?>