<?php

if($_POST)
{
    echo "post var <hr>";
    $phone=$_POST['phone'];
    if(!is_numeric($phone))
    {
        echo "Numara hatali";
        //header("refresh:2");
    }
    else{
        echo "Numara doğru";
    }
}
else{
    echo "post yok";
}
$name=$_POST['name'];
$maxlength=10;
$nameLength=mb_strlen($name);
if($nameLength>$maxlength)
{
    echo "Username 10 karakterden fazla olamaz..";
}
else{
    echo "Hosgeldin:".$name;
}





?>