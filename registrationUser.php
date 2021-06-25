<?php
$username=$_POST['uname'];
$mailid=$_POST['mail'];
$phn=$_POST['phn'];
$password=$_POST['pass'];
$pw=md5($password);
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'DBMS');

$q="INSERT INTO user(User_name,Mail_id,Contact_no,Password) values('$username','$mailid','$phn','$pw')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>

<html>
  <head>
     <title>Insertion</title>
     <style type="text/css">
        h1{
          text-align:center;
          height:150px;}
          body{
          background-color:yellow;}
        p{
          font-size:20px;
          font-weight:bold;
          text-align:center;}
     </style>
  </head>
  <body>
     <h1>******************YOUR STATUS*****************</h1>
      <p><?php if($status==1)
                  echo "Registration Successful";
               else
                   echo "Registration Failed";
         ?></p>
     <a href="http://localhost/DBMS/loginUser.php">Login</a>
  </body>
</html>












