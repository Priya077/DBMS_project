<?php
$con=mysqli_connect("localhost","root","","DBMS");

?>
<html>
 <head>
   <title>View list</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <style type="text/css">
     body{
       background-image:url('p2.jpg');
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
       <div class="searchbook">
        <form method="post" name="form1">
           <input type="text" name="search" id="bookn" placeholder="search book..." required>
           <input type="submit" name="submit" value="Search" id="sub">
        </form>
   </div>
  <h1>List of Collections......</h1><br/>
    <?php
      if(isset($_POST['submit']))
      {
        $q=mysqli_query($con,"SELECT * from book where title like '%$_POST[search]%' ");
        
        if(mysqli_num_rows($q)==0)
        {
          echo "No result";
        }
        else{
   echo "<table id='view'>";
      echo "<tr>";
       echo "<th>";echo "Book Id";echo "</th>";
       echo "<th>";echo "Title";echo "</th>";
       echo "<th>";echo "Price";echo "</th>";
       echo "<th>";echo "Author";echo "</th>";
       echo "<th>";echo "Publisher ID";echo "</th>";
       echo "</tr>";
      
      while($row=mysqli_fetch_array($q))
      {
      echo "<tr>";
      echo "<td>";echo  $row['bookid'];echo "</td>";
      echo "<td>";echo  $row['title'];echo "</td>";
      echo "<td>";echo  $row['price'];echo "</td>";
      echo "<td>";echo  $row['author'];echo "</td>";
      echo "<td>";echo  $row['Pub_id'];echo "</td>";
      echo "</tr>";
       }
   echo "</table>";
    }
    }
    else{ 
    $r=mysqli_query($con,"SELECT * from book ");    
    echo "<table id='view'>";
      echo "<tr>";
       echo "<th>";echo "Book Id";echo "</th>";
       echo "<th>";echo "Title";echo "</th>";
       echo "<th>";echo "Price";echo "</th>";
       echo "<th>";echo "Author";echo "</th>";
       echo "<th>";echo "Publisher ID";echo "</th>";
       echo "</tr>";
      
      while($row=mysqli_fetch_array($r))
      {
      echo "<tr>";
      echo "<td>";echo  $row['bookid'];echo "</td>";
      echo "<td>";echo  $row['title'];echo "</td>";
      echo "<td>";echo  $row['price'];echo "</td>";
      echo "<td>";echo  $row['author'];echo "</td>";
      echo "<td>";echo  $row['Pub_id'];echo "</td>";
      echo "</tr>";
       }
   echo "</table>";
    }
  ?>
</body>
</html>