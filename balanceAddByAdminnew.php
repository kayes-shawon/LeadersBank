
<?php 
$accountno=$_POST['accountno'];
$balance=$_POST['balence'];

$status="OK";
$msg="";
if(empty($accountno)){
$msg.="Please please enter the accountno.<BR>";
$status="NOTOK";
}
if(empty($balance)){
$msg.="Please enter the balance field";
$status="NOTOK";
}


if($status=='OK'){

$con=mysql_connect("localhost","root","");
if(!$con)
{

die('mysql could not connect the database'.mysql_error());
}

mysql_select_db("adminupdate",$con);
mysql_query("INSERT INTO `adminupdate`.`admin` (
`Accountno.` ,`Balance`)VALUES ('$accountno', '$balance');");

echo"<center><font face='Verdana' size='2' color=green>Balance has been added successfully </font></center>";
}

else{
echo"<center><font face='Verdana' size='2' color=red>$msg</font></center>";
}
?>

