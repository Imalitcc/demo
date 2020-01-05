<?php
 session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
     <link rel="stylesheet" href="../Resources/css/sidebar.css">  
     <link rel="stylesheet" href="../Resources/css/Slideshow.css">   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">	
  <script type="text/javascript">
  	$(document).scroll(function(e){
    var scrollTop = $(document).scrollTop();
    if(scrollTop > 0){
        console.log(scrollTop);
        $('.navbar').removeClass('navbar-static-top').addClass('navbar-fixed-top');
    } else {
        $('.navbar').removeClass('navbar-fixed-top').addClass('navbar-static-top');
    }
});



  </script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
 <script type="text/javascript">$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(3000)
    .next()
    .fadeIn(3000)
    .end()
    .appendTo('#slideshow');
},  3000);
</script>
    
</head>
<body>



 <?php
     


     if(isset($_SESSION['student']))
     {
     	include'Headers/LoggedSHeader.php';
     }
     if(isset($_SESSION['teacher']))
     {
     	include'Headers/LoggedTHeader.php';
     }
     if(isset($_SESSION['admin']))
     {
     	include'Headers/LoggedAHeader.php';
     }
     if(!(isset($_SESSION['admin']))&&!(isset($_SESSION['student']))&&!(isset($_SESSION['teacher']))){
     	include'Headers/NormalHeader.php';
     }

     include'Body.php';
     
      
      
 ?>
</body>
</html>