<?php

$txtName=$_POST["txtName"];
$txtEmail=$_POST["txtEmail"];
$txtMobile=$_POST["txtMobile"];
$txtUsername=$_POST["txtUsername"];
$txtPassword=$_POST["txtPassword"];
include("dbConnect.php");

$rsuser=mysql_query("select * from userdetails where username='$txtUsername'");

if(mysql_num_rows($rsuser)==0)
{
    mysql_query("insert into userdetails(uname,uemail,umobile,username,userpass,usertype,regdate) values('$txtName','$txtEmail','$txtMobile','$txtUsername','$txtPassword','user',now())");

    header("location:index.php");    
}
else
{
    header("location:Signup.php?status=2");
}

?>

