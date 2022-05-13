<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload Using PHP</title>
    <style>


body{
    display:flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    min-height: 100vh;
    background: skyblue;

}
form{
    border:1px solid orange;
    width:400px;
    height:100px;
    border-radius:5px;
    /* justify-content: center; */
    /* align-items: center; */

}
input{
    background:orange;
    color:white;
    font-size:1.2em;
    width:100px;
    height:30px;
    border-radius: 5px;
    margin-left: 60px;
    margin-top: 30px;

}
    </style>

</head>
<body>

<?php if (isset($_GET['error'])): ?>

        <p><?php echo $_GET['error']; ?></p>
    <?php endif ?>
    <form action="upload.php"
    method="post"
    enctype="multipart/form-data">

        <input type="file" name="my_image">

        <input type="submit" name="submit" value="Upload">






</form>
</body>
</html>