<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body bgcolor=#C62828>
<image src="hhh.jpg" align=right widht=400px height=400px>
 <?php
 require('db.php');
 session_start();
if(isset($_POST['username']))
{
    $username=stripslashes($_REQUEST['username']);
    $username=mysqli_real_escape_string($con,$username);

    $password=stripslashes($_REQUEST['password']);
    $password=mysqli_real_escape_string($con,$password);

    $query="SELECT * FROM `users` WHERE username='$username' and password='$password'";
    $result=mysqli_query($con,$query);
    $rows=mysqli_num_rows($result);
    if($rows==1)
    {
        $_SESSION['username']=$username;
        header("location:index.php");
    }
    else{
        echo "<div class='form'><h3> Username/password is incorrect. </h3> <br> Click here to <a href='loging.php'>Login</a></div>";
    
    }
} else{
    ?>
<div clss="form">
<table border="5" bgcolor="	#B71C1C" color="red" width="130px" height="50px">
    <tr>
   <td> <h1> Login</h1></td>
   
    <form action="" method="POST" name="Login">
    <table border="5" bgcolor="	#B71C1C" color="red" width="130px" height="50px">
    <tr>
   <td> <input type="text" name="username" placeholder="Username" required /></td>
   <tr>
  <td>  <input type="text" name="password" placeholder="Password" required /></td>
<tr>
   <td> <input type="submit" name="submit" value="Login" /></td>
   </form>
<br>
    

    <table border="5" bgcolor="	#B71C1C" color="red" width="130px" height="50px">
	<tr>
	<td> <a href="registeration.php" 
    target="_blank"><font color="black"><h3>Register Here</font></h3></a></td>
    <p><font face="tahoma" size="3" color="black"<b> Don't Have a Account? Not registered yet? </b></font></p>
</div>

<?php }?>
</body>
</html>

