
<?php
include 'db.php';
if(isset($_GET['id_pro'])){
        $id_pro=$_GET['id_pro'];
        $sql="select*from product where id_pro=$id_pro";
        $kq=$conn->query($sql)->fetch();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-400 m-32">
        <form action="" method="post" class="space-y-10 p-16 bg-white max-w-xl m-auto rounded-2xl shadow-2xl" enctype ="multipart/form-data">
        <h1 class="text-4xl font-bold">Update sản phẩm</h1>
        <div> 
        <input type="hidden" name="id_pro" value=<?php echo $kq['id_pro']   ?> id="">
        <label for="" class="text-xl">Tên sản phẩm</label><br>
        <input type="text" name="name_pro" value=<?php echo $kq['name_pro']   ?> class="bg-slate-300 w-full p-4" placeholder="Tên sản phẩm"><br></div>
        <div>
        <label for="" class="text-xl">Image</label><br>
        <input type="file" name="img_pro" value=<?php echo $kq['img_pro']   ?> class="bg-slate-300 w-full p-4" ><br>
       </div>
        <div>
        <label for="" class="text-xl">Price</label><br>
        <input type="text" name="price_pro"  value=<?php echo $kq['price_pro']   ?>  class="bg-slate-300 w-full p-4" placeholder="Price"><br>
        </div>
       
        <input type="submit" value="Update" name="btn" class="p-4 mt-4 rounded-xl bg-gray-600 text-white">



        </form>
        <?php
         if(isset($_POST['btn'])){
                if(isset($_POST['btn'])){
                        $name_pro=$_POST['name_pro'];
                        $price_pro=$_POST['price_pro'];
                        $img_pro = $_FILES['img_pro']['name'] ; 
                        $tmp_img = $_FILES['img_pro']['tmp_name'] ;
                        move_uploaded_file($tmp_img,"img/".$img_pro) ; 
                        $sql="update product set name_pro='$name_pro',img_pro='$img_pro',price_pro='$price_pro' where id_pro=$id_pro";
                        $kq=$conn->prepare($sql);
                        if($kq->execute())
                        header("location:templateadmin.php");     
                        else
                        echo "Không update đc dữ liệu";
                       }
               
         }



        ?>
        
</body>
</html>