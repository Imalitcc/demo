<?php
include 'Admin.php';
    
class dbch{
      public function Fun($admin)
      {
       echo$admin->getNic();
       echo$admin->getPassword();
      }
}


$obA=new Admin();
$obA->setNic("12");
$obA->setPassword("12");


$obD=new dbch();
$obD->Fun($obA);

