<?php
$name=$_POST['Name'];
$user=$_POST['UserName'];
$password=$_POST['Password'];
$location=$_POST['Location'];
$gender=$_POST['Gender'];
@mysqli_connect('localhost', 'root', '','ani');
$query = "insert into register values('$name','$user','$password','$location','$gender')";
 
$con = mysqli_connect('localhost', 'root', '',"ani");
 
$result = mysqli_query($con,$query);

  if($result)
  {    
       $flag=1;
      
      echo "Data inserted successfully";

  }   
       
  else
  {
     echo "Data not inserted";
  }
  ?>
  <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }

      form {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        width: 300px;
        margin: 0 auto;
      }

      label {
        display: block;
        margin-bottom: 10px;
      }

      input[type="email"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 20px;
      }

      input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #45a049;
      }

      a {
        color: #4CAF50;
      }
      p {
    text-align: center;
  }
    </style>
  </head>
  <body>
     <center>
     <?php if($flag==1) 
     {?>}

     <h1 >You are register successfully</h1>
    
      <label for="email">UserId:</label>
      <?php echo $user; ?>
     

      <label for="password">Password:</label>
      <?php echo $password; ?>
     <?php } ?>
     </center>
  </body>
</html>
