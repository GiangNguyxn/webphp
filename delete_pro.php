<?php
include 'db.php';
$id_pro=$_GET['id_pro'];
$sql="delete from product where id_pro=$id_pro";
$kq=$conn->prepare($sql);
if($kq->execute())
header("location:templateadmin.php");
else
echo "Erorr!!!!";
?>

