<?php
$staffname=$_POST['uname'];
$mailid=$_POST['mail'];
$phn=$_POST['phn'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'DBMS');

$q="INSERT INTO admin(Staff_name,Mail_id,Contact_no) values('$staffname','$mailid','$phn')";
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
     
  </body>
</html>












