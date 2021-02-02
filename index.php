<?php
include("auth.php");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Home</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body bgcolor="#CE93D8">
    <div class="form">
    <table border="5" bgcolor="	#F48FB1" bordercolor="black" width="1360px" height="60px">
        <tr>
        <td><a href="dashboard.php" target="_blank"><font color="black"> Dashboard</a> </td>
        <td><a href="logout.php" target="_blank"><font color="black">Logout</a> </td>
        </tr>
</table>
        <br>
        <table border="5" bgcolor=" #F48FB1	" bordercolor="black" width="300px" height="60px">
	<tr>
	<td> <h3>Kelebek.org Home Page <font color="black">Dashboard</font></h3></a></td>
	
</tr>
</table>
  
    </div>
    <h3>Welcome to Kelebek.org Home Page <?php echo $_SESSION['username'];?>!</h3> 
    <image src="seviye.jpg" align=left width="400px" height="400px"> 
</body>
</html>

