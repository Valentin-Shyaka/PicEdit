<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo edit</title>
    <style>
        body{
    display:flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    min-height: 100vh;
    /* background:#5F9EA0; */
    background: skyblue;

}
.alb{
    width:200px;
    height:200px;
    padding:5px;
    margin-top: 30px;

}
.alb img{
    width:100%;
    height:100%;
    
}
.alb img:hover{
    transform: scale(1.1);
    transition: 0.5s;
}
a{
    text-decoration: none;
    color:black;
    font-size: 2em;
}
a:hover{
    transform:translate-X(-20px);
    transform: scale(1.1);
    transition: 0.5s alternate;
}
.alb>a{
    padding: 10px;
    font-size: 15px;
    color: white;
    /* background: #5F9EA0; */
    background: red;
    border: none;
    border-radius: 5px;
}
.alb>a:hover{
    background: #5F9EA0;
}
    </style>
</head>
<body>
<?php
        $db_host="localhost";
        $db_user="root";
        $db_password="";
        $db_name="imagedb";
        $images=$_GET['image_url'];

                
        $connection=mysqli_connect($db_host,$db_user,$db_password,$db_name);
        $sql="SELECT * FROM images WHERE image_url='{$images}';";
        $result=mysqli_query($connection,$sql);
        if(!$result){
            echo "Photo not found";
        }else{
            $image=mysqli_fetch_assoc($result);
        ?>
        <div class="alb">
            <img src="uploads/<?=$image['image_url']?>" alt="">
            <a href="view.php" class="del_btn">Cancel</a>
        </div><?php
        }
        ?>


    
</body>
</html>