<?php

$txtUsername=$_POST["txtUsername"];
$txtPassword=$_POST["txtPassword"];

require_once "dbConnect.php";

$rsuser=mysqli_query($con,"select * from userdetails where username='$txtUsername'");
//echo "select * from userdetails where username='$txtUsername'";
//echo $rsuser;
$w=$rsuser->num_rows;
if($w==0)
{
    header("location:Login.php?status=1");
}
else
{
    $row=mysqli_fetch_array($rsuser);
    
    if($row["userpass"]==$txtPassword)
    {
        if($row["usertype"]=="admin")
        {
            header("location:adminPage.php");
        }
        else
        {
            header("location:index.php");
        }
    }
    else
    {
        header("location:Login.php?status=2");
    }
}

?>




<!--
require_once "dbConnect.php";
//include("dbConnect.php");

$rsuser=  mysql_query("select * from userdetails where username='$txtUsername'");

if(mysql_num_rows($rsuser)==0)
{
    header("location:Login.php?status=1");
}
else
{
    $row=mysql_fetch_array($rsuser);
    
    if($row["userpass"]==$txtPassword)
    {
        if($row["usertype"]=="admin")
        {
            header("location:adminPage.php");
        }
        else
        {
            header("location:index.php");
        }
    }
    else
    {
        header("location:Login.php?status=2");
    }
}
-->

