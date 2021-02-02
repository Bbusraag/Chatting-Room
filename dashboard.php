<?php
require('db.php');
include("auth.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body bgcolor=	#7986CB>
    <div class="form">
    
    <table border="5" bgcolor="#4DB6AC" bordercolor="black" width="1360px" height="60px">
	<tr>

	<td> <a href="index.php" target="_blank"><font color="black">Home</a></td>
	<td><a href="insert.php" target="_blank"><font color="black"> Insert New Record</td>
	<td><a href=" view.php" target="_blank"><font color="black">View Record</a></td>
	<td><a href="logout.php" target="_blank"><font color="black"> LogOut</td>

    </tr>
</table>
<div class="das">
<h2>Welcome to may dashboard page...</h2>
<image src="turk.jpg" align=left width="400px" height="400px">
    </div>
  
</body>
</html>