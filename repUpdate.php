<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'DBMS');
$q="Select * from report";
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
    <h1>Update Record......</h1><br/>
   <form action="repUpdation.php" method="post">
   <table id="view">
    <tr>
       <th>ReportNO</th>
       <th>Book</th>
       <th>Issue</th>
       <th>Return</th>
       <th>UserId</th>
   </tr>
   <?php
      for($i=1;$i<=$num;$i++)
      {
        $row=mysqli_fetch_array($result);
   ?> 
    <tr>
      <td><?php echo $row['rep_no']; ?><input type="hidden" name="rid<?php echo $i;?>" value="<?php echo $row['rep_no']; ?>"/></td>
      <td><input type="text" name="book<?php echo $i;?>" value="<?php echo $row['book_Name']; ?>" id="name"/></td>
      <td><input type="text" name="id<?php echo $i;?>" value="<?php echo $row['issue_date']; ?>" id="name"/></td>
      <td><input type="text" name="rd<?php echo $i;?>" value="<?php echo $row['return_date']; ?>" id="name"/></td>
      <td><input type="text" name="user<?php echo $i;?>" value="<?php echo $row['user_id']; ?>" id="name"/></td>
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