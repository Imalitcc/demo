<?php
    include'../Model/Dao.php';
    
 //creating student Object
    $Student1= new Student();  
    
    $Student1->setFirstName($_POST['firstname']);
    $Student1->setLastName($_POST['lastname']);
    $Student1->setAddress($_POST['address']);
    $Student1->setContactNumber($_POST['contactnumber']);
    $Student1->setEmail($_POST['email']);
    $Student1->setDob($_POST['dob']);
    $Student1->setKeeper($_POST['keeper']);
    
  
    //creating Data access Object
    $db= new Dao();

    
    if(isset($_POST['add'])){  
   
	    $db->insertNewStudent($Student1);
	
	
	    header("Location: ../View/index.php?Login=successfllyregistered");
} 


    
/*    if(isset($_POST['addP'])){  
	     //image upload
    $file=$_FILES['img'];


    $filename=$_FILES['img']['name'];
    $fileerror=$_FILES['img']['error'];
    $filesize=$_FILES['img']['size'];
    $filetype=$_FILES['img']['type'];
 //validation
	$fileext=explode('.', $filename);
	$exactex=strtolower(end($fileext));
	$allowed= array('jpg','jpeg','png');
	if(in_array($exactex, $allowed))
	{
            if ($fileerror===0) 
            {
   
                 $db->insertNewStudentPic($Student1);
              
            }else
            {
                    echo "err";


             }


     }
	 else
	 {
                    echo "filety";


	 }


} 
*/
?>