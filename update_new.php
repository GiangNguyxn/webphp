<?php
include 'db.php';
if(isset($_GET['new_id'])){
        $new_id=$_GET['new_id'];
        $sql="select*from news where new_id=$new_id";
        $kq=$conn->query($sql)->fetch();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Addnews</title>
        <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-400 m-32">
        <form action="" method="post" class="space-y-10 p-16 bg-white max-w-xl m-auto rounded-2xl shadow-2xl" enctype ="multipart/form-data">
        <h1 class="text-4xl font-bold">Update tin tức</h1>
        <div> 
        <input type="hidden" name="new_id" value=<?php echo $kq['new_id']   ?>>
        <label for="" class="text-xl">Title</label><br>
        <input type="text" name="title" value=<?php echo $kq['title']   ?> class="bg-slate-300 w-full p-4" placeholder="Tiêu đề"><br></div>
        <div>
        <label for="" class="text-xl">Image</label><br>
        <input type="file" name="img" value=<?php echo $kq['img']   ?> class="bg-slate-300 w-full p-4" ><br>
       </div>
        <div>
        <label for="" class="text-xl">Intro</label><br>
        <textarea  name="intro" value=<?php echo $kq['intro']?> class="bg-slate-300 w-full p-4"  cols="60" rows="10"></textarea><br>
        
        </div>
       
        <input type="submit" value="Update" name="btn" class="p-4 mt-4 rounded-xl bg-gray-600 text-white">



        </form>
        <?php
        include 'db.php';
        if(isset($_POST['btn'])){
         $title=$_POST['title'];
         $intro=$_POST['intro'];
         $img = $_FILES['img']['name'] ; 
         $tmp_img = $_FILES['img']['tmp_name'] ;
         move_uploaded_file($tmp_img,"img/".$img) ; 
         $sql="update  news set  title='$title',img='$img',intro='$intro' where new_id='$new_id'";
         $kq=$conn->prepare($sql);
         if($kq->execute())
         header("location:listnew.php");     
         else
         echo "Không update đc dữ liệu";
        }


?>
</body>
</html>