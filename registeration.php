<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body bgcolor="	#FF5722">
   <?php
   require('db.php');
   if(isset($_POST['username']))
   {
       $username=stripslashes($_REQUEST['username']);
       $username=mysqli_real_escape_string($con,$username);

       $email=stripslashes($_REQUEST['email']);
       $email=mysqli_real_escape_string($con,$email);
   
       $password=stripslashes($_REQUEST['password']);
       $password=mysqli_real_escape_string($con,$password);
       
       $trn_date=date("Y-m-d H:i:s");

       $query="INSERT INTO `users`(username,email,password,trn_date) VALUES ('$username','$email','$password','$trn_date')";
       $result=mysqli_query($con,$query);

       if($result)
       {
           echo "<div class='form'><h3>You are registered successfully. </h3><br> Click here to<a href='login.php'>Login</a></div>";
       }
     }else{
           ?>
           <img src="q.jpg" align="right"width="500px" height="600px">
        <div class="form">
        <table border="5" bgcolor="		#FF8A65" color="red" width="130px" height="50px">
                <tr>
            <td><h1>Registeration</h1></td>
            
            <form name="registeration" action="" method="POST">
            <table border="5" bgcolor="		#FF8A65" color="red" width="130px" height="50px">
                <tr>
            <td><input type="text" name="username" placeholder="Username" required /></td>
            <tr>
            <td><input type="email" name="email" placeholder="Email" required /><br></td>
            <tr>
           <td> <input type="password" name="password" placeholder="Password" required /></td><br>
             <tr>
            <td> <input type="submit" name="submit" value="Register" /></td>
            </tr>
</table> 

 
            </form>
        </div>
     <?php }?>

   
   
</body>
</html>