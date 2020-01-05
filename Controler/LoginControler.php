<?php
 include'../Model/Dao.php';
  session_start();
 


   $u_id=$_POST['userid'];
   $u_password=$_POST['userpassword'];
 

        //create object of Dao
        $ob=new Dao();
           if($ob->retrieveAdmin($u_id,$u_password)==1)
            {
               $_SESSION['adminid']= $u_id;
               header("Location: ../View/index.php?Login1=success");
               
            }else if($ob->retrieveStudent($u_id,$u_password)==1)
            {
               $_SESSION['studentid']= $u_id;	
               header("Location: ../View/index.php?Login1=successS");
            
            }else if($ob->retrieveTeacher($u_id,$u_password)==1)
            {
               $_SESSION['teacherid']= $u_id;	
               header("Location: ../View/index.php?Login1=successT");

            }else{

              header("Location: ../View/Login.php?Login1=Failed");

            }




