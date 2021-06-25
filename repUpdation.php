<?php
$size=sizeof($_POST);
$records=$size/5;

for($i=1;$i<=$records;$i++)
{
$index1="rid".$i;
$repid[$i]=$_POST[$index1];
$index2="book".$i;
$book[$i]=$_POST[$index2];
$index3="id".$i;
$id[$i]=$_POST[$index3];
$index4="rd".$i;
$rd[$i]=$_POST[$index4];
$index5="user".$i;
$user[$i]=$_POST[$index5];
}

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'DBMS');

for($i=1;$i<=$records;$i++)
{
$q="update report SET  book_Name='$book[$i]', issue_date='$id[$i]', return_date='$rd[$i]', user_id='$user[$i]'
where rep_no=$repid[$i]";
mysqli_query($con,$q);
}
mysqli_close($con);
?>

<html>
  <head>
      <title>Updation</title>
     
  </head>
  <body>
    <p>
       <?php
               echo "Updated";
      ?>
  <br/><br/>
           Do you want to continue?&nbsp;&nbsp;      
            <a href="repUpdate.php">Click Here......</a></p>
  
  </body>
</html>