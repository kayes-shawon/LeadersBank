
<?php 
if(isset($_POST['Submit'])){
print ".....................";
$name=$_POST['name'];
$email=$_POST['email'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$bankreg=$_POST['bankreg'];
$key= $_POST['key'];
$gender=$_POST['gender'];
$agree=$_POST['agreement'];

$status="OK";
$msg="";
if(empty($name)){
$msg.="Please fill up the name field.<BR>";
$status="NOTOK";
}
if(!stristr($email,"@") OR !stristr($email,".")){
$msg.="Your mail address is not correct";
$status="NOTOK";
}
if(empty($fname)){
$msg.="Please fill up the father's name field.<BR>";
$status="NOTOK";
}
if(empty($mname)){
$msg.="Please fill up the mother's name field";
$status="NOTOK";
}
if(empty($mobile)){
$msg.="Please fill up the mobile number field";
$status="NOTOK";
}
if(empty($password)){
$msg.="Please fill up the password field";
$status="NOTOK";
}
if(empty($bankreg)){
$msg.="Please fill up the bankregistration field";
$status="NOTOK";
}
if(empty($gender)){
$msg.="Please select the gender field";
$status="NOTOK";
}
if(empty($agree)){
$msg.="Please select the agreement";
$status="NOTOK";
}

if($status=='OK'){
print"$status 456789";
$con=mysql_connect("localhost","root","");
if(!$con)
{
print"a aaa";
die('mysql could not connect the database'.mysql_error());
}
print"123456";
mysql_select_db("regform",$con);
print "ssssssssssssssssssssssssssssss";
mysql_query("INSERT INTO `regform`.`info` (`name`, `email`, `fname`, `mname`, `mobile`, `passward`, `bankreg`,`key`, `gender`,`balance`) VALUES ('$name','$email','$fname','$mname','$mobile','$password','$bankreg','$key','$gender','0');");
print "mmoo";

echo"<center><font face='Verdana' size='2' color=green>Thank You $name, Your registration successfully completed. </font></center>";
print"....";
print "<meta http-equiv=\"refresh\" content=\"0\" URL=\"index.html\" />";
}

else{
echo"<center><font face='Verdana' size='2' color=red>$msg</font></center>";
}
}else{
print "<meta http-equiv=\"refresh\" content=\"0\" URL=\"index.html\" />";
}
?>

