<?php
$con=mysqli_connect("localhost","root","","DBMS");

?>
<html>
 <head>
   <title>View list</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <style type="text/css">
     body{
       
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
   .searchUser{
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
       <div class="searchUser">
        <form method="post" name="form1">
           <input type="text" name="search" id="bookn" placeholder="search user..." required>
           <input type="submit" name="submit" value="Search" id="sub">
        </form>
   </div>
  <h1>List......</h1><br/>
    <?php
      if(isset($_POST['submit']))
      {
        $q=mysqli_query($con,"SELECT * from user where User_Name like '%$_POST[search]%' ");
        
        if(mysqli_num_rows($q)==0)
        {
          echo "No result";
        }
        else{
   echo "<table id='view'>";
      echo "<tr>";
       echo "<th>";echo "User Id";echo "</th>";
       echo "<th>";echo "User Name";echo "</th>";
       echo "<th>";echo "Mail ID";echo "</th>";
       echo "<th>";echo "Contact No";echo "</th>";
       echo "<th>";echo "Password";echo "</th>";
       echo "</tr>";
      
      while($row=mysqli_fetch_array($q))
      {
      echo "<tr>";
      echo "<td>";echo  $row['User_id'];echo "</td>";
      echo "<td>";echo  $row['User_name'];echo "</td>";
      echo "<td>";echo  $row['Mail_id'];echo "</td>";
      echo "<td>";echo  $row['Contact_no'];echo "</td>";
      echo "<td>";echo  $row['Password'];echo "</td>";
      echo "</tr>";
       }
   echo "</table>";
    }
    }
    else{ 
    $r=mysqli_query($con,"SELECT * from user ");    
    echo "<table id='view'>";
      echo "<tr>";
        echo "<th>";echo "User Id";echo "</th>";
       echo "<th>";echo "User Name";echo "</th>";
       echo "<th>";echo "Mail ID";echo "</th>";
       echo "<th>";echo "Contact No";echo "</th>";
       echo "<th>";echo "Password";echo "</th>";
       echo "</tr>";
      
      while($row=mysqli_fetch_array($r))
      {
      echo "<tr>";
       echo "<td>";echo  $row['User_id'];echo "</td>";
      echo "<td>";echo  $row['User_name'];echo "</td>";
      echo "<td>";echo  $row['Mail_id'];echo "</td>";
      echo "<td>";echo  $row['Contact_no'];echo "</td>";
      echo "<td>";echo  $row['Password'];echo "</td>";
      echo "</tr>";
       }
   echo "</table>";
    }
  ?>
</body>
</html>