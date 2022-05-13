<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
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
.alb>#edit{
    background:#5F9EA0;
    margin-left: 60px;
}
.alb>a:hover{
    background: #5F9EA0;
}
    </style>
</head>
<body>
    <a href="index.php">&#8592;</a>

    <?php
    $sname='localhost';
    $uname="root";
    $password="";
    $dbname="imagedb";
    
    $conn= mysqli_connect($sname,$uname,$password,$dbname);

    $sql= "SELECT * FROM images ";
    $result=mysqli_query($conn,$sql);
    if($result){

    if(mysqli_num_rows($result) > 0){
        
        while($images=mysqli_fetch_assoc($result)){
             ?>
        <div class="alb">
            <img src="uploads/<?=$images['image_url']?>"/><a href="delete.php?image_url=<?=$images['image_url'] ?>" class="del_btn">Delete</a><a href="edit.php?image_url=<?=$images['image_url'] ?>" class="del_btn" id="edit">Edit</a>
        </div>


      <?php   }
    }
}else{
    echo "No photos found";
}







?>


</body>
</html>