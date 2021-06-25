<?php
$con=mysqli_connect("localhost","root","","DBMS");

?>
<html>
 <head>
   <title>Record list</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <style type="text/css">
     body{
       background-color:rgba(160,82,45);
       background-attachment:fixed;
       background-position:center;
       background-size:cover;
       background-repeat:no-repeat;}
     h1{
        color:white;
        font-weight:bold;
        font-size:34px;
        text-align:center;
        margin-left:90px;}
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
        padding:8px;
        color:white;}
   .searchbook{
      text-align:right;
      margin:50px;}
    #bookn{
      padding:12px;
      font-size:20px;
      }
   #sub{
       padding:12px;
      font-size:20px;
      background-color:darkgreen;
      color:yellow;}
   </style>
 </head>
 <body>
      
  <h1>List of Collections......</h1><br/>
    <?php
      
    $r=mysqli_query($con,"SELECT * from report ");    
    echo "<table id='view'>";
      echo "<tr>";
       echo "<th>";echo "ReportNO";echo "</th>";
       echo "<th>";echo "Book";echo "</th>";
       echo "<th>";echo "Issue";echo "</th>";
       echo "<th>";echo "Return";echo "</th>";
       echo "<th>";echo "UserId";echo "</th>";
       echo "</tr>";
      
      while($row=mysqli_fetch_array($r))
      {
      echo "<tr>";
      echo "<td>";echo  $row['rep_no'];echo "</td>";
      echo "<td>";echo  $row['book_Name'];echo "</td>";
      echo "<td>";echo  $row['issue_date'];echo "</td>";
      echo "<td>";echo  $row['return_date'];echo "</td>";
      echo "<td>";echo  $row['user_id'];echo "</td>";
      echo "</tr>";
       }
   echo "</table>";
    
  ?>
</body>
</html>