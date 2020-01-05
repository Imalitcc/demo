<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="image">
	<input type="submit" name="insert">
	


</form>
</body>
</html>

<?php
$conn;   
if(isset($_POST['insert'])){
   $file=$_FILES['image'];


   $filename=$_FILES['image']['name'];
   $fileerror=$_FILES['image']['error'];
   $filetmp=$_FILES['image']['tmp_name'];
   $filesize=$_FILES['image']['size'];
     $filetype=$_FILES['image']['type'];

$fileext=explode('.', $filename);
$exactex=strtolower(end($fileext));
$allowed= array('jpg','jpeg','png');
if(in_array($exactex, $allowed)){
   if ($fileerror===0) {
   	# code...

                       $conn=mysqli_connect("localhost","root","","tcc");
 
                $f=addslashes(file_get_contents($_FILES['image']['tmp_name']));
                $query="insert into img(name) values('$f')";
                if(mysqli_query($conn,$query)){

                	echo "su";
                }else{
                	echo "fail";
                
                }

   }else{
echo "err";


   }


}
	else{
        echo "filety";


	}






}
////////////////////////////////////////////////////////////

                       $conn1=mysqli_connect("localhost","root","","tcc");

$query1="select * from img where id=2;";
$Result=mysqli_query($conn1,$query1);
while($row=mysqli_fetch_array($Result)){
    
       echo'

<img src="data:image/jpeg;base64,'.base64_encode($row['name']).'" />
       ';




}
?>