<?php

$txtCatName=$_POST["txtCatName"];
$txtCatDisplayName=$_POST["txtCatDisplayName"];

$Img=$_FILES["CatImage"];
$CatImage=$Img["name"];
move_uploaded_file($Img['tmp_name'],'.collection\\CategoryImages\\'.$CatImage);

include("dbConnect.php");


?>