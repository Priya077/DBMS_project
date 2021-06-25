<?php
session_start();
$userid=$_POST['uname'];
$password=$_POST['pass'];
$pw=md5($password);
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'DBMS');
$q="Select * from authentication where userid='$userid' && password='$pw'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
   $_SESSION['userid']=$userid;
   header('location:http://localhost/DBMS/operationAdmin.php');
}
else
{
  
  header('location:http://localhost/DBMS/loginAdmin.php');
}
?>