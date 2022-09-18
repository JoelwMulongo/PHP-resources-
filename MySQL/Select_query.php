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
  
$sql = 'SELECT * FROM emp';  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
    echo "EMP ID :{$row['id']}  <br> ".  
         "EMP NAME : {$row['name']} <br> ".  
         "EMP SALARY : {$row['salary']} <br> ".  
         "--------------------<br>";  
 } //end of while  
}else{  
echo "0 results";  
}  
mysqli_close($conn);  
?>
