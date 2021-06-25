<?php
  $size=1;
  $j=1;
  for($i=1;$i<=$size;$i++,$j++)
  {  
     $index="b".$j;
     if(isset($_POST[$index]))
         $b_id=$_POST[$index];
     else
         $i--;
  }

  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'DBMS');

  $q="delete from book where bookid=".$b_id;
  $status=mysqli_query($con,$q);
  mysqli_close($con);
?>
<html>
  <head>
      <title>Deletion</title>
      <style type="text/css">
          body{
          background-color:rgba(0,0,0,0.6);
         } 
          p{
           
           color:white;
           text-align:center;
           margin:auto;
           margin-top:260px;
           font-size:26px;
           }
          a{
            font-size:28px;
            text-decoration:none;
            color:pink;
            }
          a:hover{
            color:yellow;}
      </style>
  </head>
  <body>
    <p>
       <?php if($status==1)
               echo "Deleted";
             else
               echo "try again";
      ?>
  <br/><br/>
           Do you want to continue?&nbsp;&nbsp;      
            <a href="delete.php">Click Here......</a></p>
  
  </body>
</html>