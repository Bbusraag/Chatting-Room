<?php
require('db.php');
include("auth.php");
$status="";
if(isset($_POST['new'])&& ($_POST['new']==1))
{
    $birth_date=date("Y-m-d H:i:s");
    $name=$_REQUEST['name'];
    $age=$_REQUEST['age'];
  // $birth_date=$_REQUEST['birth_date'];
    $surname=$_REQUEST['surname'];
    $Gender=$_REQUEST['Gender'];
    $submittedby=$_SESSION['username'];

    $ins_query="INSERT INTO `new_record`(birth_date,name,surname,age,submittedby,Gender)VALUES ('$birth_date', '$name','$surname','$age','$submittedby','$Gender')";
    mysqli_query($con,$ins_query);
    $status="New record insearted seccssefully.<br><br><a href='view.php'> View insearted record</a>";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert new record</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body bgcolor="orange">
<table border="5" bgcolor=" #FFF176	" bordercolor="black" width="1360px" height="60px">
	<tr>
	<td> <a href="dashboard.php" target="_blank"><font color="black">Dashboard</font></a></td>
	<td><a href="view.php" target="_blank"><font color="black"> View new record</font></td>
    <td><a href=" logout.php" target="_blank"><font color="black">Logout</font></a></td>
    
</tr>
</table>
<br>
<table border="3" bgcolor="	orange" bordercolor="black" width="300px" height="30px">
	<tr>
    <td><h3>Insert new record</h3></td>
</tr>
</table>
    <div class="form">
  
        <div>
    
            
            <form name="form" action=" "method="POST">
            <p> <input type="hidden" name="new" value="1"/> </p>
            <table border="3" bgcolor="	orange" bordercolor="black" width="180px" height="30px">
	<tr>


            <td><p> <input type="text" name="name" placeholder="Enter Name" required/> </p></td>
            <tr>
               <td> <p> <input type="text" name="surname" placeholder="Enter surname" required/> </p></td>
               <tr>
               <td> <p> <input type="text" name="age" placeholder="Enter Age" required/> </p></td>
               <tr>
               <td> <p> <input type="text" name="Gender" placeholder="Enter Gender" required/> </p></td>
               <tr>
                <td> <p> <input type="submit" name="submit" value="Submit"/></td>
                </p>
            </form>
            </tr>
         </table>
           <p style="color:#FF0000;" ><?php echo $status;?></p>
        </div>

    </div>
</body>
</html>