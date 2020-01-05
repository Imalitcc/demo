<?php


if((!isset($_SESSION['admin']))&&(!isset($_SESSION['student']))&&(!isset($_SESSION['teacher']))){
?>
<div class="container-fluid" style="height: 100px;" >
        <div class="row">
            <div class="col-md-8"  ">
                 <div id="slideshow">
                          <div>
                             <img  src="../Resources/images/Tcc2.jpg" width="100%" height="500px"  /> 
                         </div>
                         <div>
                             <img  src="../Resources/images/tcc3.jpg" width="100%"  height="500px" />
                         </div>
                         <div>
                             <img  src="../Resources/images/Tcc1.jpg" width="100%"  height="500px" />
                         </div>
                         <div>
                             <img  src="../Resources/images/tcc4.jpg" width="100%"  height="500px" />
                         </div>
                         
                 </div>
            </div>

            <div class="col-md-4">
                   <div class="w3-card-4" style="position: relative; top:11px;">

                        <header class="w3-container w3-blue">
                          <h1>News</h1>
                        </header>

                        <div class="w3-container" style="height: 400px;">
                          <p>Lorem ipsum...</p>
                        </div>

                        <footer class="w3-container">
                          <h5>Footer</h5>
                        </footer>

                   </div>                 
            </div>
        </div>
</div>            



<?php
}else{?>
<div class="container-fluid" style="height: 700px;" >
        <div class="row">
            <div class="col-md-2"  >
            
            		<?php
            		if(isset($_SESSION['admin'])){
            	       include'SideBars/AdminSB.PHP';
            	         }
                    if(isset($_SESSION['student'])){
                        include'SideBars/StudentSB.PHP';

                      }



            	     ?>
            </div>
            <div class="col-md-10"  >
                     	        
                     	        		<?php
                                            if((isset($_GET['Login']))&&(isset($_SESSION['admin']))){
                                                include'AddNewTeacher.PHP';
                                                  
                                            }elseif(isset($_SESSION['admin'])){
                                                 include'AddNewStudent.PHP';
                                               }elseif(isset($_SESSION['student'])){
                                                 include'StudentProfile.PHP';

                                                 }


            	                        ?>
                                 

            </div>	
            	   
       </div>
          
         
</div>
<?php
}
?>