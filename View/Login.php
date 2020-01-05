<?php 
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('../Resources/images/Login1.jpg');
 background-repeat: no-repeat;
  background-size: 100% 900px;">
  <?php
  include'Headers/NormalHeader.php';
  ?>
>
        <div class="modal-dialog" style="opacity: 0.8;">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                   
                    <h3 class="modal-title">Log In</h3>
                </div>

                <!-- body (form) -->
                <div class="modal-body">
                    <form role="form" method="post"  action="../Controler/LoginControler.php">
                        <div class="form-group">
                            <input type="text" class="form-control" name="userid" placeholder="User Id" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="userpassword" placeholder="Password" required>
                        </div>
                           <div class="modal-footer">
                    <button class="btn btn-primary btn-block" name="submit">Submit</button>
                </div>
                    </form>
                </div>


            </div>
       
    </div>



</body>
</html>