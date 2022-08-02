<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./css/login.css">
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="login-form" method="get">
      <input type="text" placeholder="username" name="user"/>
      <input type="password" placeholder="password" name="pass"/>
      <button type="submit" name="btn_login">login</button>
   <?php
   include 'db.php';
   if(isset($_GET['btn_login'])){
        $user=$_GET['user'];
        $pass=sha1($_GET['pass']);
        $sql="select*from acc where user_acc='$user' and pass_acc='$pass'";
        $kq=$conn->query($sql);
        if($kq->rowcount()==1){
                $_SESSION['user_acc']=$user;
                header('location:templateadmin.php');

        }else{
                echo "Đăng nhập không thành công";
        }



   }


?>
    </form>
  </div>
</div>

</body>
</html>