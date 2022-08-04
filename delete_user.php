<?php
include 'db.php';
$id_acc=$_GET['id_acc'];
$sql="delete from acc where id_acc=$id_acc";
$kq=$conn->prepare($sql);
if($kq->execute())
header('location:listuser.php');
else
echo "Erorr!!!!";




?>