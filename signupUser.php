<html>
<head>
  <title>Signup</title>
  <meta name="viewport" content="width=device-width ,initial-scale=1.0">
   <style>
           body{
               
               background-repeat:no-repeat;
               background-position:center;
               background-size:cover;
               background-attachment:fixed;}
        .content{
              margin:auto;
              width:40%;
              margin-top:190px;
              text-align:center;
              padding:5px;
              background-color:rgba(0,0,0,0.4);
                }
        label{
              font-size:22px;
              font-family:italic;
              font-weight:bold;
              }
        #name,#text{
              width:60%;
                 }
       #sub{
            font-size:20px;}
       @media (max-width:720px)
      {
          .content{
                  width:90%;
                  }
          label{
                font-size:28px;}
          #sub{
            font-size:20px;}
      }
           
   </style>
</head>
<body>
 <div class="content">
   <h1>SIGN UP</h1>
  <form action="registrationUser.php" method="post">
          
         <label>User Name:</label><br/>
         <input type="text" name="uname" id="name" required><br/><br/>
         <label>Mail Address:</label><br/>
         <input type="email" name="mail" id="name" required><br/><br/>
         <label>Contact No:</label><br/>
         <input type="mobile" name="phn" id="name" required><br/><br/>
         <label>Password:</label><br/>
         <input type="password" name="pass" id="name" required><br/><br/>
         <input type="submit" id="sub" value="submit">&nbsp;&nbsp;&nbsp; <input type="reset" id="sub" value="reset">
 </form>
</div>
</body>
</html>