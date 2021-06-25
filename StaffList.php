<?php
$con=mysqli_connect("localhost","root","","DBMS");

?>
<html>
 <head>
   <title>View list</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <style type="text/css">
     body{
       background-color:rgba(112,128,144);
       background-attachment:fixed;
       background-position:center;
       background-size:cover;
       background-repeat:no-repeat;}
     h1{
        color:black;
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
   .searchAdmin{
      text-align:left;
      margin:50px;}
    #bookn{
      padding:12px;
      font-size:20px;
      }
   #sub{
       padding:12px;
      font-size:20px;
      background-color:navy;
      color:yellow;}
   </style>
 </head>
 <body>
       <div class="searchAdmin">
        <form method="post" name="form1">
           <input type="text" name="search" id="bookn" placeholder="search staff..." required>
           <input type="submit" name="submit" value="Search" id="sub">
        </form>
   </div>
  <h1>List......</h1><br/>
    <?php
      if(isset($_POST['submit']))
      {
        $q=mysqli_query($con,"SELECT * from admin where Staff_Name like '%$_POST[search]%' ");
        
        if(mysqli_num_rows($q)==0)
        {
          echo "No result";
        }
        else{
   echo "<table id='view'>";
      echo "<tr>";
       echo "<th>";echo "Staff Id";echo "</th>";
       echo "<th>";echo "Staff Name";echo "</th>";
       echo "<th>";echo "Mail ID";echo "</th>";
       echo "<th>";echo "Contact No";echo "</th>";
       echo "</tr>";
      
      while($row=mysqli_fetch_array($q))
      {
      echo "<tr>";
      echo "<td>";echo  $row['Staff_id'];echo "</td>";
      echo "<td>";echo  $row['Staff_Name'];echo "</td>";
      echo "<td>";echo  $row['Mail_id'];echo "</td>";
      echo "<td>";echo  $row['Contact_no'];echo "</td>";
      echo "</tr>";
       }
   echo "</table>";
    }
    }
    else{ 
    $r=mysqli_query($con,"SELECT * from admin ");    
    echo "<table id='view'>";
      echo "<tr>";
        echo "<th>";echo "Staff Id";echo "</th>";
       echo "<th>";echo "Staff Name";echo "</th>";
       echo "<th>";echo "Mail ID";echo "</th>";
       echo "<th>";echo "Contact No";echo "</th>";
       echo "</tr>";
      
      while($row=mysqli_fetch_array($r))
      {
      echo "<tr>";
       echo "<td>";echo  $row['Staff_id'];echo "</td>";
      echo "<td>";echo  $row['Staff_Name'];echo "</td>";
      echo "<td>";echo  $row['Mail_id'];echo "</td>";
      echo "<td>";echo  $row['Contact_no'];echo "</td>";
      echo "</tr>";
       }
   echo "</table>";
    }
  ?>
</body>
</html>