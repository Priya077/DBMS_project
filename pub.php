<?php
  $pid=$_POST['id'];
  $name=$_POST['pname'];


  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'DBMS');

  $q="INSERT INTO publisher(pub_id,pub_name) values('$pid','$name')";
  $status=mysqli_query($con,$q);
  mysqli_close($con);
 ?>

<html>
  <head>
     <title>Insertion</title>
   <style type="text/css">
       body{
         background-color:rgba(0,0,0,0.5);}
       p{
         font-size:28px;
        text-align:center;}
  </style>
  </head>
  <body>
     <p><?php
            if($status==1)
               echo "Inserted";
            else
               echo "Failed";
        ?></p>
  <p>Do you want to continue?&nbsp;&nbsp;<a href="publisher.php">Click Here</a>....</p>
  </body>
</html>