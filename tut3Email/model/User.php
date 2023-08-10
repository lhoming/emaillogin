<?php

class User {  
    public $username;  
    public $password;
    public $fname;
    public $lname;
      
    public function __construct($username, $password, $fname, $lname)    
    {    
        $this->username = $username;  
        $this->password = $password;
        $this->fname = $fname;
        $this->lname = $lname; 
    }   
}  

?>