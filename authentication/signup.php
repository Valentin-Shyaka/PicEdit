<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
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
	<form method="POST" action=<?php echo $_SERVER["PHP_SELF"]?> >
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" required>
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" required>
		</div>
        <div class="input-group">
			<label>Password</label>
			<input type="text" name="password" required>
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
        <div>
            <input type="file" name="my_image">
        </div>
	</form>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        $name=$_POST['name'];
        $address=$_POST['address'];
        $password=$_POST['password'];
        $encrypt=md5($password);
        

        

        $db_host='localhost';
        $db_name='crud';
        $db_password='';
        $db_user='root';

        $connection=mysqli_connect($db_host,$db_user,$db_password,$db_name);

        if(!$connection){
            echo "Not connected to the database !!!";
        }else{
            $sqli="INSERT INTO user(name,address,password) VALUES('$name','$address','$encrypt')";
            $insert=mysqli_query($connection,$sqli);

            if(!$insert){
                echo "Data not inserted in the database";
            }else{
                echo "Data inserted in database";
            }
        }



    }


















































































    // if($_SERVER["REQUEST_METHOD"]=="POST"){
    //     $name=$_POST['name'];
    //     $address=$_POST['address'];
    //     $password=$_POST['password'];
    //     $encrypt=md5($password);

    //         $db_host="localhost";
    //         $db_user="root";
    //         $db_password="";
    //         $db_name="crud";

    //         $connection=mysqli_connect($db_host,$db_user,$db_password,$db_name);

    //         if(!$connection){
    //             echo "you are no connected ";
    //         }else{
    //             $sqli="INSERT INTO user(name,address,password) VALUES('$name','$address','$encrypt')";
    //             $insert=mysqli_query($connection,$sqli);

    //             if(!$insert){
    //                 echo "Failed to load data";
    //             }else{
    //                 echo "Data iserted in database";
    //             }
    //         }
    //     }
    
    ?>
    <a href="./view.php">view user</a>
</body>
</html>