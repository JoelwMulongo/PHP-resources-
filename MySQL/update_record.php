<?php  
$host = 'localhost:3306';  
$user = '';  
$pass = '';  
$dbname = 'test';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
  
$id=2;  
$name="Rahul";  
$salary=80000;  
$sql = "update emp4 set name=\"$name\", salary=$salary where id=$id";  
if(mysqli_query($conn, $sql)){  
 echo "Record updated successfully";  
}else{  
echo "Could not update record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?>  
