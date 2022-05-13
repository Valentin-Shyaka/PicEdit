<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
p{
    width: 500px;
    height: 40px;
    border:1px solid #cbcbcb;
    border-radius: 5px;
    margin-left: 290px;
    align-items: center;
    text-align:center;
    align-items: center;
    top:20px;
    

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
			<label>Password</label>
			<input type="password" name="password" required>
		</div>
        
		<div class="input-group">
			<button class="btn" type="submit" name="login" >Login</button>
		</div>
        
	</form>
    <?php
    if(isset($_POST['login'])){
        $name=$_POST['name'];
        $password=$_POST['password'];
        $encrypt=md5($password);

        $db_host="localhost";
        $db_name='crud';
        $db_password='';
        $db_user='root';
        
        
        $connection=mysqli_connect($db_host,$db_user,$db_password,$db_name);
        if(!$connection){
            echo "Not connected to DB";
        }else{

        $sql="SELECT * FROM user WHERE name='{$name}' AND password='{$encrypt}' ;";

        $insert = mysqli_query($connection, $sql) or die("Error occured".mysqli_error($connection));
        if(!$insert){
            echo "No result, you need to signup";
        }else{
            $yes=mysqli_num_rows($insert);
            if($yes > 0){

        
            // echo "Thanks for using our app";
            ?>
            <p>Thanks for using our app<a href="../uploadimange/index.php">continue</a></p>

                <?php
            }else{
                // echo "Please check your Username or password";?>
              <p> Please check your Username or password <a href="../authentication/update.php">signup</a></p>
                <?php
            }
    }
    }
          
        
    }


    ?>
    
</body>
</html>