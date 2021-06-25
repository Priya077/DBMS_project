<?php
  $userid=$_POST['uid'];
  $book=$_POST['bname'];
  $idate=$_POST['id'];
  $rdate=$_POST['rd'];

  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'DBMS');

  $q="INSERT INTO report(user_id,book_Name,issue_date,return_date) values('$userid','$book','$idate','$rdate')";
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
  <p>Do you want to continue?&nbsp;&nbsp;<a href="report.php">Click Here</a>....</p>
  </body>
</html>