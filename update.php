<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'DBMS');
$q="Select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>

<html>
 <head>
   <title>Update</title>
   <style type="text/css">
     body{
       background-color:rgba(152,180,212);}
     h1{
        color:black;
        font-weight:bold;
        font-size:30px;
        text-align:center;
      }
     #view{
          margin:auto;
          width:80%;
          font-size:25px;
          }
    #view tr{
        background-color:rgba(0,0,0,0.5);
        height:60px;
        font-size:28px;
        }
    #view th{
        background-color:orange;}
    #view td{
        text-align:center;
        padding:15px;
        color:white;
        }
    #name{
     padding:8px;
     font-size:18px;}
    #sub{
      margin-left:600px;
      width:100px;
      padding:10px;
      font-size:20px;
      background-color:rgba(102,51,153);
      color:white;
      font-weight:600;}
   </style>
 </head>
 <body>
    <h1>Update Details......</h1><br/>
   <form action="updation.php" method="post">
   <table id="view">
    <tr>
       <th>Book Id</th>
       <th>Title</th>
       <th>Price</th>
       <th>Author</th>
       <th>Publisher</th>
   </tr>
   <?php
      for($i=1;$i<=$num;$i++)
      {
        $row=mysqli_fetch_array($result);
   ?> 
    <tr>
      <td><?php echo $row['bookid']; ?><input type="hidden" name="bookid<?php echo $i;?>" value="<?php echo $row['bookid']; ?>"/></td>
      <td><input type="text" name="title<?php echo $i;?>" value="<?php echo $row['title']; ?>" id="name"/></td>
      <td><input type="text" name="price<?php echo $i;?>" value="<?php echo $row['price']; ?>" id="name"/></td>
      <td><input type="text" name="author<?php echo $i;?>" value="<?php echo $row['author']; ?>" id="name"/></td>
      <td><input type="text" name="publisher<?php echo $i;?>" value="<?php echo $row['Pub_id']; ?>" id="name"/></td>
    </tr>
   
    <?php
       }
    ?>
   </table>
   <br/><br/>
    <tr><input type="submit" value="Edit" id="sub"/></tr>
   </form>
</body>
</html>