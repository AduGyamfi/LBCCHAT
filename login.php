<!doctype html>
<html>
<head>
<link rel="stylesheet" href="styleL.css">
</head>
<style>

/**{margin:0px ; padding: 0px;}
#main{width:200px; margin:20px auto;}*/
</style>
<body>

<?php 
    session_start();
    require_once("connection.php");

    if(Isset($_POST['login'])){
	$user_name = $_POST['user_name'];
	$password =$_POST['password'];

	$q='SELECT * FROM `user` where `user_name`= "'.$user_name.'"and `password`="'.$password.'"';
	$r = mysqli_query($con, $q);
	if(mysqli_num_rows($r) > 0){
		
     $_SESSION['user_name'] = $user_name;

		header("location:chat.php");
	} 
}

?>
<div id="main">
<h2 style="text-align:center"> Login in here!!! </h2>
<form method="post">
User Name:<br>
<input type="text" name="user_name" placeholder="user name" required/><br><br>
Password:<br>
<input type="text" name="password" placeholder="password" required/><br><br>
<input type="submit" name="login" value="Login" />
<a href="registration.php">Create an Account </a>
</form>
</div>
</body>
</html>