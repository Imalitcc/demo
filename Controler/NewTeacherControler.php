<?php
    include'../Model/Dao.php';
    
 //creating Teacher Object
    $Teacher1= new Teacher();  
    
    $Teacher1->setFirstName($_POST['firstname']);
    $Teacher1->setLastName($_POST['lastname']);
    $Teacher1->setAddress($_POST['address']);
    $Teacher1->setContactNumber($_POST['contactnumber']);
    $Teacher1->setEmail($_POST['email']);
    $Teacher1->setDob($_POST['dob']);
    $Teacher1->setEq($_POST['eq']);
    $Teacher1->setWe($_POST['we']);
    $Teacher1->setNic($_POST['nic']);
    $Teacher1->setFad($_POST['Firstad']);
    

    
  
    //creating Data access Object
    $db= new Dao();

    
    if(isset($_POST['add'])){  
   
	    $db->insertNewTeacher($Teacher1);
	
	
	    header("Location: ../View/index.php?Login=successfllyregisteredTeacher");
} 
