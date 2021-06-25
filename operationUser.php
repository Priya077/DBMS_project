<?php 
  session_start();
 ?>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style type="text/css">
      h2{
          margin-top:50px;
          text-align:center;
          font-size:30px;
          font-weight:bold;
          color:white;
         }
     .center{
        text-align:center;}
     body{
     background-image:url('p3.jpg');
     background-repeat:no-repeat;
     background-position:center;
     background-size:cover;
     background-attachment:fixed;
     }
     a{
     margin:auto;
     width:70%;
     padding:15px;
     background-color:rgba(0,0,139,1);
     border-radius: 10px;
     text-decoration:none;
     color:white;
     font-size:24px;
     font-weight:500;}
     @media(max-width: 720px){
     h2{
      color:white;
      font-size:60px;}
     a{
      font-size:40px;
      margin:400px;}
       
}
   </style>
</head>
<body>
    <h2>Welcome   <?php echo $_SESSION['username'];?></h2><br/><br/><br/>
   <div class="center">
    <a href="http://localhost/DBMS/view.php">View</a><br/><br/><br/>
    <a href="http://localhost/DBMS/view.php">Search</a><br/><br/><br/>
    <a href="http://localhost/DBMS/home.html">Logout</a>
   </div>
</body>
</html>