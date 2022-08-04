<?php
include 'db.php';
$new_id=$_GET['new_id'];
$sql="delete from news where new_id=$new_id";
$kq=$conn->prepare($sql);
if($kq->execute())
header("location:listnew.php");
else
echo "Erorr";
?>