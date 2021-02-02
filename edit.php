<?php
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query="SELECT * FROM `new_record` WHERE id='".$id."'";
$result=mysqli_query($con,$query);
$rows=mysqli_fetch_assoc($result);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <link rel="stylesheet" type="text/css"
href="final.css">
</head>

<body bgcolor="	#673AB7">
    
    <div class="form">
    <table border="5" bgcolor="black" bordercolor="black" width="1360px" height="60px">
	<tr>
	<td> <a href="dashboard.php"  target="_blank">Dashboard</a></td>
    <td><a href="insert.php" target="_blank"> Insert New Record</td>
    <td><a href="logout.php" target="_blank"> Logout</td>
</tr>
</table>
       
        <?php
        $status="";
        if(isset($_POST['new']) && ($_POST['new']==1))
        {
        $id=$_REQUEST['id'];
        $trn_date=date("Y-m-d H:i:s");
        $name=$_REQUEST['name'];
        $surname=$_REQUEST['surname'];
        $age=$_REQUEST['age'];
        $Gender=$_REQUEST['Gender'];
        //$birth_date=$_REQUEST['birth_date'];
        $submittedby=$_SESSION['username'];
        $update="UPDATE `new_record` SET birth_date='".$trn_date."',name='".$name."',surname='".$surname."',age='".$age." ',submittedby='".$submittedby."',Gender='".$Gender."' WHERE id='".$id."'";
        mysqli_query($con,$update);
        $status="Record updated successfully.<br><br><a href='view.php'> View updated record</a>";
        echo '<p style="color:"red";>'.$status.'</p>';
        }
        else{
           
           
        ?>
        <div clss="form">

   
        <img src="chat.jpg" align=left width="400px" height="400px">
        <br>
   <table border="5" bgcolor="	#4A148C" color="red" width="130px" height="50px">
    <tr>
   <td> <h2>Update <font color="black"></h2></td>
        </td>
        </table>
        <br>
            <form name="form" method="POST" action="">
    
                <input type="hidden" name="new" value="1"/>
                <input type="hidden" name="id" value="<?php echo $rows['id']?>"/>
                <table border="5" bgcolor="	#4A148C" color="red" width="130px" height="50px">
                 <tr>
               <td> <input type="text" name="name" placeholder="Enter Name" required value="<?php echo $rows['name'];?>" /></td>
               <tr>
               <td> <input type="text" name="surname" placeholder="Enter Surname" required value="<?php echo $rows['surname'];?>" /></td>
               <tr>
               <td> <p><input type="text" name="age" placeholder="Enter Age" required value="<?php echo $rows['age'];?>" /></td>
               <tr>
               <td> <p><input type="text" name="Gender" placeholder="Enter Gender" required value="<?php echo $rows['Gender'];?>" /></p>
               <div>
                <p>
            
                    <input type="submit" name="submit" value="Update"/>
                </p>
            </form>
        <?php }?>
        </div>
    </div>
</body>
</html>
