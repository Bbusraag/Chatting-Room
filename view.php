<?php
require('db.php');
include("auth.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Records</title>

    <link rel="stylesheet" type="text/css"
href="final.css">
</head>
<table border="5" bgcolor="	green" bordercolor="black" width="1360px" height="60px">
	<tr>
	<td> <a href="index.php" target="_blank"><font color="black">Home</font></a></td>
	<td><a href="insert.php" target="_blank"><font color="black"> Insert New Record</td>
    <td><a href=" view.php" target="_blank"><font color="black">View Record</a></td>
    <td><a href=" logout.php" target="_blank"><font color="black">Logout</a></td>
</tr>
</table>
<body bgcolor="	#4CAF50	">
    <div id="table" style="color:black;">
    <div class="k"><h2>User List</h2>
</div>
        <table width="100%" border="1" style="border-color:black" align="center">
        <thead style="color:green;">
            <tr>
                <th><strong>ID</strong></th>
                <th><strong>Name</strong></th>
                <th><strong>Surname</strong></th>
                <th><strong>Age</strong></th>
                <th><strong>Birth Date</strong></th>
                <th><strong>Gender</strong></th>
                <th><strong>Edit</strong></th>
                <th><strong>Delete</strong></th>
            </tr>
        </thead>
  
        <tbody style="color:black;">
            <?php

            $cout=1;
            $sql_query="SELECT *  FROM new_record ORDER BY id Desc";
            $result=mysqli_query($con,$sql_query);
            while($rows = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td align="center"><?php echo $cout; ?></td >
                    <td align="center"><?php echo $rows["name"]; ?></td >
                    <td align="center"><?php echo $rows["surname"]; ?></td >
                    <td align="center"><?php echo $rows["age"]; ?></td >
                    <td align="center"><?php echo $rows["birth_date"]; ?></td >
                    <td align="center"><?php echo $rows["Gender"]; ?></td >
                    <td align="center"><a href="edit.php ?id=<?php echo $rows["id"];?>">Edit</a></td >
                    <td align="center"><a href="delete.php ?id=<?php echo $rows["id"];?>">Delete</a></td >
                </tr>
                <?php $cout++; ?>
            
            <?php }?>
        </tbody>
    
    </table>
    </div>
</body>
</html>
