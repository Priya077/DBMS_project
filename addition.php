<?php
  $title=$_POST['title'];
  $price=$_POST['price'];
  $author=$_POST['author'];
  $publisher=$_POST['publisher'];

  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'DBMS');

  $q="INSERT INTO book(title,price,author,Pub_id) values('$title',$price,'$author','$publisher')";
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
  <p>Do you want to continue?&nbsp;&nbsp;<a href="add.php">Click Here</a>....</p>
  </body>
</html>