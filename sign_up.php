<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/login.scss">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Montserrat:wght@600&display=swap"
    rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="css/signup.css">
</head>


<body class="bg-green-300 flex justify-center items-center    ">

  <form  action="" method="get" class="border-1 bg-white p-10 mt-8 shadow-2xl rounded-xl">
    <label for="" class=" text-2xl p-2">Tên đăng kí</label><br>
    <input type="text" name="user" class="p-4 w-[500px] bg-green-100  " placeholder="username"><br>
    <label for="" class=" text-2xl p-2">Password</label><br>
    <input type="password" name="pass" class="p-4 w-[500px] bg-green-100 " placeholder="password"><br>
    <label for="" class=" text-2xl p-2">Số điện thoại</label><br>
    <input type="text" name="sdt" class="p-4 w-[500px] bg-green-100" placeholder="Số điện thoại"><br>
    <input type="submit" value="Signup" name="btn_sign_up" class="p-4 mt-4  rounded-2xl bg-green-300"><br>
   
    <?php
            include 'db.php';
            if(isset($_GET["btn_sign_up"])){
              $user=$_GET["user"];
              $pass=sha1($_GET["pass"]);
              $sdt=$_GET["sdt"];
              $sql_insert="insert into acc values(null,'$user','$pass',$sdt)";
             
              $kq=$conn->prepare($sql_insert);
              if($kq->execute()){
                header("location:login.php") ;
              // echo " Đăng kí thành công";
               } else 
              echo "Đăng kí không thành công";
            }


?>
  </form>
  

  </div>

  </div>
  </div>
  </div>

</body>

</html>