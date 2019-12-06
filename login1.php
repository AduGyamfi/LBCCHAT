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
