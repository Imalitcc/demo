<?php
 /**
  * 
  */
 class Admin
 {
 	   private $nic;
 	   private $password;


 	public function setNic($nic)
 	{
            $this->nic=$nic;
 	}
 	
 	public function getNic()
 	{
 	        return $this->nic;
 	}
 	
 	public function setPassword($password)
 	{
 		     $this->password=$password;
 	}
    
    public function getPassword()
 	{
 	        return $this->password;
 		
 	}
 }
 ?>