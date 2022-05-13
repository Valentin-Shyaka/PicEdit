<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
               body {
    font-size: 19px;
}
table{
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: left;
}
tr {
    border-bottom: 1px solid #cbcbcb;
}
th, td{
    border: none;
    height: 30px;
    padding: 2px;
}
tr:hover {
    background: #F5F5F5;
}

form {
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
}

.input-group {
    margin: 10px 0px 10px 0px;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
.msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}
    </style>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Password</th>
        </tr>
        </thead>

        <?php
        $db_host="localhost";
        $db_name='crud';
        $db_password='';
        $db_user="root";

        $connection=mysqli_connect($db_host,$db_user,$db_password,$db_name);

        $sql="SELECT * FROM user";
        

        $select=mysqli_query($connection,$sql);
        if(!$select){
            echo "The query didn't execute";
        }else{
            $count=mysqli_num_rows($select);
            
            if($count>0){
                while($data=mysqli_fetch_assoc($select)){
                    ?>
                    <tr>
                        <td><?=$data['name']?></td>
                        <td><?=$data['address']?></td>
                        <td><?=$data['password']?></td>
                        <td>
                            <a href="update2.php?id=<?= $data['id'] ?>" class="edit_btn" >Edit</a>
                        </td>
                        <td>
                            <a href="delete.php?id=<?=$data['id'] ?>" class="del_btn">Delete</a>
                        </td>

                    </tr>
               <?php }
            }
        }
        
        
        
        
        ?>
    </table>



















































































<form>  
</body>
</html>




    