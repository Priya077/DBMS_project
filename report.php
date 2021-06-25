<html>
<head>
   <title>Insert</title>
   <style type="text/css">
         body{
              background-color:rgba(32,178,170);
              background-position:center;
              background-repeat:no-repeat;
              background-size:cover;
              background-attachment:fixed;}
       .insert{
               border:2px solid white;
               text-align:center;
               width:30%;
               margin:auto;
               margin-top:120px;
               padding:10px;
               background-color:rgba(128,0,0,0.3);}
       label{
            font-size:20px;
            color:yellow;
            font-weight:bold;
            }
         h1{
            text-align:center;
            color:white;
            font-weight:bold;
            font-size:22px;
            text-decoration:underline;
            }
        #name{
             width:60%;
             border-radius:10px;
             height:30px;     
             }
        #sub{
          background-color:gray;
          width:20%;
          height:30px;
          color:white;
          font-size:22px;
          }
   </style>
</head>
<body>
   <div class="insert">
         <h1>Report Entry...</h1>
       <form action="repEntry.php" method="post">
    
           <label>User ID:</label><br/><br/> 
                <input type="text" name="uid" id="name"  required><br/><br/>
           <label>Book Name:</label><br/><br/> 
                <input type="text" name="bname" id="name"  required><br/><br/>
           <label>Issue Date:</label><br/><br/>
                <input type="text" name="id" id="name"  ><br/><br/>
           <label>Return Date:</label><br/><br/>
                <input type="text" name="rd" id="name"  ><br/><br/>
            <input type="submit" value="Insert" id="sub">
        
       </form>
   </div>
</body>
</html>