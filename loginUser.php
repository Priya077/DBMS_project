<html>
<head>
  <title>Login</title>
  <style type="text/css">
     body{
            background-image:url('img4.jpg');
            background-position:center;
            background-size:cover;
            background-repeat:no repeat;}
    .content{
            text-align:center;
            width:30%;
            height:200px;
            margin:auto;
            margin-top:130px;
            border:2px solid grey;
            padding:70px;
            background-color:rgba(0,0,128,0.4);
            }
        h1{
          text-align:center;
          font-size:30px;
          color:white;
          font-style:italic;
          font-weight:bold;
          text-decoration:underline;
          padding:10px;}
       #name{
          width:70%;
          height:40px;}
       #sub{width:25%; padding:6px; font-size:18px;}
       #sub:hover{ background-color:pink;}
       ::placeholder{ font-size:18px;}
  </style>
</head>
<body>
    <h1>User Login</h1>
    <div class="content">
         <form action="validationUser.php" method="post">
            <input type="text" name="uname" id="name" placeholder="UserName" required><br/><br/><br/>
            <input type="password" name="pass" id="name" placeholder="password"   required><br/><br/><br/>
            <input type="submit" value="login" id="sub"><br/><br/>
         </form>
       <br/><a href="signupUser.php" style="font-size:25px;color:white;">SignUp</a><br/><br/>
    </div>

</body>
</html>