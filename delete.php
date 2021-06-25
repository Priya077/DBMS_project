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
   <title>Delete</title>
   <style type="text/css">
     body{
       background-image:url('img6.jpg');
       background-position:center;
       background-size:cover;
       background-repeat:no-repeat;}
     h1{
        color:yellow;
        font-weight:bold;
        font-size:30px;
        text-align:center;
        font-family:comic sans ms;
        }
     #view{
          border-style:solid;
          border-color:gray;
          margin:auto;
          width:80%;
          font-size:22px;
          color:white;
          }
    #view th{
          color:orangered;
          font-size:25px;
          font-family:italic;}
    #view tr{
        background-color:rgba(0,0,0,0.6);
        height:60px;
        }
   #sub{
       padding:8px;
       border-radius:10px;
       font-size:18px;
       background-color:green;
       color:yellow;
       }
  #sub:hover{
       background-color:white;
       color:black;}
   #view td{
        text-align:center;
        padding:8px;
        }
   </style>
 </head>
 <body>
    <h1>Delete Books Details From List......</h1><br/><br/>
     <form action="deletion.php" method="post">
  
   <table id="view">
    <tr>
       <th>Book Id</th>
       <th>Title</th>
       <th>Price</th>
       <th>Author</th>
       <th>Publisher</th>
       <th>Select</th>
   </tr>
   <?php
      for($i=1;$i<=$num;$i++)
      {
        $row=mysqli_fetch_array($result);
   ?> 
    <tr>
      <td><?php echo $row['bookid']; ?></td>
      <td><?php echo $row['title']; ?></td>
      <td><?php echo $row['price']; ?></td>
      <td><?php echo $row['author']; ?></td>
      <td><?php echo $row['Pub_id']; ?></td>
      <td><button type="submit" value="<?php echo $row['bookid']; ?>" name="b<?php echo $i; ?>" id="sub">DELETE</button></td>
    </tr>
    <?php
       }
    ?>
   </table>
 </form>
</body>
</html>