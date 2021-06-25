<?php
$size=sizeof($_POST);
$records=$size/5;

for($i=1;$i<=$records;$i++)
{
$index1="bookid".$i;
$bookid[$i]=$_POST[$index1];
$index2="title".$i;
$title[$i]=$_POST[$index2];
$index3="price".$i;
$price[$i]=$_POST[$index3];
$index4="author".$i;
$author[$i]=$_POST[$index4];
$index5="publisher".$i;
$publisher[$i]=$_POST[$index5];
}

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'DBMS');

for($i=1;$i<=$records;$i++)
{
$q="update book SET title='$title[$i]', price=$price[$i], author='$author[$i]', Pub_id='$publisher[$i]'
where bookid=$bookid[$i]";
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
            <a href="update.php">Click Here......</a></p>
  
  </body>
</html>